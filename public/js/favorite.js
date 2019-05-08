function clickFav(x){
    var puppy_id = $(x).attr('id');
    $.ajax({
        url: '/wishlist/' + puppy_id + '/store',
        data: {
            _method: 'GET',
        },
        type: "POST",
        success: function () {
            if(x.classList.contains("liked")) {
                x.classList.add("like");
                x.classList.remove("liked");
            }else{
                x.classList.add("liked");
                x.classList.remove("like");
            }
        }
    });

}