function $(id){
    return document.getElementById(id);
}

function dropdown(id){
    //document.getElementById(id).style.transition = "all 2s";
    let x = $(id);
    if(x.style.display === "block"){x.style.display = "none";}
    else{x.style.display = "block";}
}

function validateComment(){
    let x = document.forms["commentSection"]["username"].value;
    let y = document.forms["commentSection"]["comment"].value;
    if(x=="" || y==""){
        alert("Must fill both the username and comment fields to leave a comment.");
        return false;
    }
}


{//Image scope
var enlarged = false;
//intended to ensure that enlarged image is always on top
var currentIndex;

function enlargeImage(id){
    let img = $(id);
    img.style.transform = "scale(1.4)";
    img.style.transition = "transform 0.3s ease";
    enlarged = true;
    currentIndex = img.style.zIndex;
    img.style.zIndex = "998";
}

function shrinkImage(id){
    let img = $(id);
    img.style.transform = "scale(1)";
    img.style.transition = "transform 0.3s ease";
    enlarged = false;
    img.style.zIndex = currentIndex;
    currentIndex = img.style.zIndex;
}
//if clicking a different image, first click won't do anything
//because enlarged was set to true elsewhere
function toggleImageSize(id){
    if (enlarged){
        shrinkImage(id);
    }else{
        enlargeImage(id);
    }
}
}