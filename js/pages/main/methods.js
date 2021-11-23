function capitalizeText(pString){
    let newString = "";// Nome <strong>Gustavo</strong> New
    if(pString[0] == "<") { pString = pString.replace("<strong>", "<strong> ") }
    let words = pString.replace(" <strong>", "<strong> ").replace(" </strong>", "</strong> ").split(" ");
    for(let i = 0; i < words.length; i++){ newString += " "+words[i].charAt(0).toUpperCase()+words[i].toLowerCase().slice(1) }
    newString = newString.replace("<strong> ", "&nbsp;<strong>").replace("</strong> ", "&nbsp;</strong>").trim();
    if(pString[0] == "<") newString = newString.replace("&nbsp;<strong>", "<strong>");
    return newString;
}

function autocomplete(inp, arr) {
    var currentFocus;
    inp.addEventListener("input", function(e) {
        let list, listItem;
        let inputValue = this.value.toUpperCase().trim();
        closeAllLists();
        if (!inputValue) { return false;}
        currentFocus = -1;
        list = document.createElement("DIV");
        list.setAttribute("id", this.id + "autocomplete-list");
        list.setAttribute("class", "autocomplete-items");
        this.parentNode.parentNode.appendChild(list);
        for (let i = 0; i < arr.length; i++) {
            let keywords = arr[i]["keywords"].replace(/\s/g, '').toUpperCase();
            let keywordsTogether = keywords.replace(/,/g, '');
            let wordMaxSize = 0;
            if(keywords.length > arr[i]["name"].length) wordMaxSize = keywordsTogether.length;
            else wordMaxSize = arr[i]["name"].length;
            for(let j = 0; j < wordMaxSize; j++){
                if (arr[i]["name"].substr(j, inputValue.length).toUpperCase() == inputValue) {
                    listItem = document.createElement("a");
                    listItem.setAttribute("class", "result-item");
                    listItem.setAttribute("href", arr[i]["url"]);
                    listItem.innerHTML = arr[i]["name"].toLowerCase().replace(inputValue.toLowerCase(), "<strong>"+inputValue.toLowerCase()+"</strong>");
                    listItem.innerHTML = capitalizeText(listItem.innerHTML);
                    list.appendChild(listItem);
                    break;
                }
                if(keywordsTogether.substr(j, inputValue.length).toUpperCase() == inputValue){
                    let textIndex = keywords.indexOf(inputValue);
                    let textStart = keywords.lastIndexOf(",", textIndex);
                    let textEnd = keywords.indexOf(",", textIndex);
                    if(textEnd == -1) textEnd = keywords.length;
                    let keyword = keywords.substring(textStart+1, textEnd);
                    listItem = document.createElement("a");
                    listItem.setAttribute("class", "result-item");
                    listItem.setAttribute("href", arr[i]["url"]);
                    listItem.innerHTML = capitalizeText(arr[i]["name"])+" <span>"+capitalizeText(keyword)+"</span>";
                    list.appendChild(listItem);
                    break;
                }
            }
        }
    });
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            currentFocus++;
            addActive(x);
        } else if (e.keyCode == 38) {
            currentFocus--;
            addActive(x);
        } else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) { if (x) x[currentFocus].click(); }
        }
    });
    function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }
    function closeAllLists(elmnt) {
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) { x[i].parentNode.removeChild(x[i]); }
        }
    }
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}