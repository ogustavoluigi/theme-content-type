const news = $("#news");
let objLikes = [];
let objLikesData = [];
$(window).on('load', function(){
    if(localStorage.getItem("likes") != null) objLikes = JSON.parse(localStorage.getItem("likes"));
    if(localStorage.getItem("likes_data") != null) objLikesData = JSON.parse(localStorage.getItem("likes_data"));
    listLikes();
});