function windowScroll() {
    showMobileCalltoaction();
}

function buttonClickLike(){
    let newData = {};
    newData["id"] = database.attr("data-new-id");
    newData["url"] = database.attr("data-new-url");
    newData["title"] = database.attr("data-new-title");
    newData["date"] = database.attr("data-new-date");
    newData["author_url"] = database.attr("data-author-url");
    newData["author_name"] = database.attr("data-author-name");
    newData["author_image"] = database.attr("data-author-image");

    if(!$(this).hasClass("like")) {
        objLikes.push(newData.id);
        objLikesData.push(newData);
    }
    else {
        let index = removeItemOnce(objLikes, newData.id);
        objLikesData.splice(index, 1);
    }
    $(this).toggleClass("like");
    updateLikesInLocalStorage();
}