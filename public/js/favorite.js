function clickFav(x){
    if(x.classList.contains("like")){
        // $puppy_id = $(this).val();
        // $.ajax({
        //     url: '/wishlist/' + brand_id + '/store',
        //     data: {
        //         _method: 'GET',
        //     },
        //     type: "POST",
        // });
        x.classList.add("liked");
        x.classList.remove("like");
    }else{
        x.classList.add("like");
        x.classList.remove("liked");
    }
}