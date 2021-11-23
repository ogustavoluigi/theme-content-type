function listLikes(){
    for(let i = 0; i < objLikes.length; i++){
        if(objLikesData[i] == undefined){
            objLikes.splice(i, 1);
            updateLikesInLocalStorage();
        }else{
            let elementBoxLike = templateBoxLike
            .replaceAll("$newUrl", objLikesData[i].url)
            .replaceAll("$newTitle", objLikesData[i].title)
            .replaceAll("$dateInGermanFormat", new Date(objLikesData[i].date).toLocaleDateString("de-DE"))
            .replaceAll("$dateDiffForHumans", prettyDate(objLikesData[i].date))
            .replaceAll("$authorUrl", objLikesData[i].author_url)
            .replaceAll("$authorName", objLikesData[i].author_name)
            .replaceAll("$authorImage", objLikesData[i].author_image);
            news.append(elementBoxLike);
        }
    }
}

function updateLikesInLocalStorage(){
    localStorage.setItem("likes", JSON.stringify(objLikes));
    localStorage.setItem("likes_data", JSON.stringify(objLikesData));
}