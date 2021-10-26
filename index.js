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