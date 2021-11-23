$.fn.isOnScreen = function () {
    var win = $(window);
    var viewport = {top: win.scrollTop(), left: win.scrollLeft() };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

function showMobileCalltoaction(){
    if ($('#footer').isOnScreen() == true) $('#mobile-calltoaction').addClass('hide');
    else $('#mobile-calltoaction').removeClass('hide');
}

function newIsLike(){
    let newData = {};
    newData["id"] = database.attr("data-new-id");
    let newIsLike = objLikes.includes(newData.id);
    if(newIsLike) btnLike.addClass("like");
}

function updateLikesInLocalStorage(){
    localStorage.setItem("likes", JSON.stringify(objLikes));
    localStorage.setItem("likes_data", JSON.stringify(objLikesData));
}

function removeItemOnce(array, value){
    let index = array.indexOf(value);
    if(index != -1) array.splice(index, 1);
    return index;
}