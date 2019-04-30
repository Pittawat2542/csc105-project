function clickFav(x){
    if(x.classList.contains("like")){
        x.classList.add("liked");
        x.classList.remove("like");
    }else{
        x.classList.add("like");
        x.classList.remove("liked");
    }
}