const database = $("#database");
const btnShare = document.querySelector('#btn-share');
const btnLike = $('#btn-like');
let objLikes = [];
let objLikesData = [];
btnShare.onclick = async () => {
    if(navigator.share) { try { await navigator.share(shareData); } catch(err) { } } 
    else { console.warn('Native Web Sharing not supported'); }
}
$(window).on('load', function(){
    if(localStorage.getItem("likes") != null) objLikes = JSON.parse(localStorage.getItem("likes"));
    if(localStorage.getItem("likes_data") != null) objLikesData = JSON.parse(localStorage.getItem("likes_data"));
    showMobileCalltoaction();
    newIsLike();
    $(window).scroll(windowScroll);
    btnLike.click(buttonClickLike);
});