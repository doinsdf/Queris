function upvote() {
    
}

var toggleElements = document.getElementsByClassName('toggle');

for (var i = 0; i <= toggleElements.length-1; i++) {
    toggleElements[i].addEventListener('click', function () {
        if (event.target.classList.contains('unfilled')) {
            event.target.classList.replace('unfilled', 'filled');
        } else {
            event.target.classList.replace('filled', 'unfilled');
        }
    })
}


function tostage2() {

    var stage1Elements = document.getElementsByClassName('stage1');
    for (var i = 0; i <= stage1Elements.length-1; i++) {
        stage1Elements[i].style.display = "none";
    }
    var stage2Elements = document.getElementsByClassName('stage2');
    for (var i = 0; i <= stage2Elements.length-1; i++) {
        stage2Elements[i].style.display = "block";
    }

}

var radioElements = document.getElementsByClassName('radio');

for (var i = 0; i <= radioElements.length-1; i++) {
    radioElements[i].addEventListener('click', function () {
        console.log(event.target.parentElement.childNodes);
        var siblings = event.target.parentElement.children;
        for (var ii = 0; ii <= siblings.length-1; ii++) {
            if (siblings[ii].classList.contains("filled")){
                siblings[ii].classList.replace("filled", "unfilled");
            }
        }
        if (event.target.classList.contains("unfilled")){
            event.target.classList.replace("unfilled", "filled");
        }
    })
}

var languageList = document.getElementsByClassName("language");
var languageContainer = document.getElementsByClassName("languages")[0];


const urlParams = new URLSearchParams(window.location.search);
const scrollLength = urlParams.get("scroll");
const browseLanguage = urlParams.get("language");
if(scrollLength !== undefined){
    languageContainer.scrollLeft = scrollLength;
}
if(browseLanguage !== undefined){
    setLanguage = document.getElementById(browseLanguage);
    setLanguage.classList.replace("unfilled", "filled");
}


function updateLanguages() {
    for(var i=0; i< languageList.length-1; i++){
        var language = languageList[i].innerHTML.toLowerCase().replace(" ", "-")
        languageList[i].href = "http://localhost/browse?language=" + language + "&scroll=" + languageContainer.scrollLeft;
    }
}
