const api = startAPI();
api.getDataUsed().then(data => console.log("Data used:", data));

var itemDict = {};

// function updateItemResults(name, didWin) {
// 	// console.log(name, itemDict[name], itemDict);
// 	if (didWin) {
// 		itemDict[name].wins += 1;
// 	} else {
// 		itemDict[name].losses += 1;
// 	}
// }

async function getItemsFromMatch(matchID, itemList) {
	console.log("Getting data from match " + matchID);
	// const match = await api.getMatchDetails(matchID);
	await api.getMatchDetails(matchID)
	.then(match => {
		for (player of match) {
			// console.log(player, player.Item_Purch_2, tier3Items);
			for (let i = 1; i <= 6; i++){
				//update wins/losses
				if(itemList.hasOwnProperty(player[`Item_Purch_${i}`])) {
					if(player.Win_Status == "Winner"){
						itemDict[player[`Item_Purch_${i}`]].wins += 1;
					} else {
						itemDict[player[`Item_Purch_${i}`]].losses += 1
					}
				}
				// itemList.hasOwnProperty(player[`Item_Purch_${i}`]) ? (player.Win_Status == "Winner" ? itemDict[player[`Item_Purch_${i}`]].wins += 1 : itemDict[player[`Item_Purch_${i}`]].losses += 1) : 0;
				// itemList.hasOwnProperty(player[`Item_Purch_${i}`]) ? updateItemResults(player[`Item_Purch_${i}`], player.Win_Status == "Winner") : 0;
			}
		}
	}).then(
		updateRows()
	)
}

function updateRows(itemList = itemDict) {
	//update all item rows with winrates
	//TODO change timing of this to work properly
	let rowName = "";
	for (let i = 0; i < document.getElementsByClassName("itemWinRate").length; i++) {
		rowName = document.getElementsByClassName("itemWinRate").item(i).parentNode.getElementsByClassName("itemName")[0].textContent;
		//update row data by checking rowName vs wins/losses in itemList
		if (typeof itemList[rowName] !== "undefined") {
			//set to "No Data" if the item hasn't been played
			document.getElementsByClassName("itemWinRate").item(i).textContent = Math.floor(itemList[rowName].wins / (itemList[rowName].wins + itemList[rowName].losses) * 100) ? Math.floor(itemList[rowName].wins / (itemList[rowName].wins + itemList[rowName].losses) * 100) + "%" : "No Data";
			
			//show tooltip on hover
			// document.getElementsByClassName("itemWinRate").item(i).addEventListener("mouseover", () => {
			// 	document.getElementById("tooltip").textContent = "[" + itemDict[rowName].wins + " wins, " + itemDict[rowName].losses + " losses]";
			// 	document.getElementById("tooltip").style.display = "block"
			// 	console.log(document.getElementById("tooltip"));
			// }, false);
			// document.getElementsByClassName("itemWinRate").item(i).addEventListener("mouseleave", () => {
			// 	document.getElementById("tooltip").style.display = "none"
			// }, false);


		} else {
			document.getElementsByClassName("itemWinRate").item(i).textContent = "No data found";
		}
	}
	// console.log("Rows Updated");
}

//async?
async function getItemsFromTopMatches(itemList) {
	//gets all match id's from past x hours
	for(let hour = 0; hour < 6; hour++){
		//gets games from every 10 minute interval of that hour
		for(let minutes = 0; minutes <= 5; minutes++){
			console.log("Getting match data from the past " + hour + " hours and " + minutes + "0 minutes");
			// await?
			await api.getMatchIdsByQueue(426, new Date().YYYYMMDD(), hour + "," + minutes + 0)
			.then( async data => {
				//looks at all items from each match id received
				for (id of data) {
					//check if game is ongoing
					if (id.Active_Flag == "n") {
						await getItemsFromMatch(id.Match, itemList);
					}
				}
			})
		}
	}
	// localStorage.setItem("items", JSON.stringify(itemDict));
	// console.log(JSON.parse(localStorage.getItem("items")));
	// updateRows();
	console.log("Done getting match info");
	return itemDict;
}

async function generateItemList() {
	await api.getItems()
	.then( data => {
		for (element of data) {
			// console.log(element);
			//get all items that are currently in the game ignoring actives and consumables
			if (element.Type == "Item" && element.ActiveFlag == "y") {
				//get upgraded starters and t3 items
				// console.log(element);
				if (element.ItemTier == 3 || element.ItemTier == 4 || (element.ItemTier == 2 && element.StartingItem)) {
					//find some way to get item prices from entire item tree? element.Price only gives the price of the t3 when bilt from the t2
					//maybe loop through each item in getItems(), sum total += item.Price, and save each price in an array?
					//if next item.ItemTier == current item.ItemTier remove current price and add new one
					//if next item.ItemTier < current item.ItemTier remove current and previous prices and add new one
					itemDict[element.DeviceName] = {name: element.DeviceName, desc: element.ItemDescription, price: element.Price, icon: element.itemIcon_URL, wins: 0, losses: 0};
				}
			}
		}
		console.log("Item List Generated");
	})
	return itemDict;
}

function createItemRows(itemList) {
	let focusFirst = true;
	// let itemList = JSON.parse(localStorage.getItem("items"));
	for (let item in itemList) {
		createRow(itemList[item]);
		if (focusFirst) {
			focusOnItem(itemList[item]);
			focusFirst = false;
		}
	}
	console.log("Item Rows Created");
}

function create(str) {
	return document.createElement(str);
}

function createRow(element) {
	// console.log(element, element.icon, element.name);
	//create row with that data
	let row = create("div");
	row.setAttribute("class", "grid-item");

	let itemImage = create("img");
	itemImage.setAttribute("src", element.icon);
	itemImage.setAttribute("class", "item-image");
	itemImage.setAttribute("alt", "item not found");

	let name = create("p");
	name.textContent = element.name;
	name.className = "itemName";

	let winRate = create("p");
	winRate.textContent = "Waiting for data";
	winRate.className = "itemWinRate";

	let bestOn = create("p");
	bestOn.textContent = "Waiting for data";
	bestOn.className = "itemBestOn";

	row.append(itemImage, name, winRate, bestOn);
	row.onclick = (() => {
		focusOnItem(element);
		document.getElementById("focus-container").scrollIntoView({ behavior: "smooth", block: "end" });
	});
	document.getElementById("grid-container").append(row);
}

function removeAllChildren(node) {
	while (node.firstChild) {
		node.removeChild(node.firstChild);
	}
}

function getFullDescription(itemDesc) {
	removeAllChildren(document.getElementById("item-text"));

	let description = create("p");
	description.textContent = itemDesc.desc.Description;
	document.getElementById("item-text").append(description);

	for (let i = 0; i < itemDesc.desc.Menuitems.length; i++) {
		let stats = create("p");
		stats.textContent = itemDesc.desc.Menuitems[i].Description + ": " + itemDesc.desc.Menuitems[i].Value;
		document.getElementById("item-text").append(stats);
	}

	let passive = create("p");
	passive.innerText = itemDesc.desc.SecondaryDescription;

	document.getElementById("item-text").append(passive);
}

function focusOnItem(clicked) {

	document.getElementById("big").setAttribute("src", clicked.icon);
	document.getElementById("item-name").textContent = clicked.name;

	getFullDescription(clicked);

}