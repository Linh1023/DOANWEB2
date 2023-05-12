function getValueColor() {
    // var form = document.getElementById("js-color");
    var radios = document.getElementsByName('color');
    var elemClicked = document.getElementsByClassName("color")

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked)
            elemClicked[i].classList.add("clicked");
        else
            elemClicked[i].classList.remove("clicked");

    }
}
function getValueSize() {
    // var form = document.getElementById("js-color");
    var radios = document.getElementsByName('Size');
    var elemClicked = document.getElementsByClassName("size")

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked)
            elemClicked[i].classList.add("clicked");
        else
            elemClicked[i].classList.remove("clicked");
    }
}
function getValueImgQuickview() {
    // var form = document.getElementById("js-color");
    var radios = document.getElementsByName('img-quickview');
    var elemClicked = document.getElementsByClassName("item")
    var largeImage = document.querySelector(".img-main img");
    var smallImage = document.querySelectorAll(".item label img");

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            elemClicked[i].classList.add("clicked");
            largeImage.src = smallImage[i].getAttribute("data-image");
        }
        else
            elemClicked[i].classList.remove("clicked");
    }
}
function hideQuickview() {
    // var iconclose = document.querySelector(".icon-close-quickview i");
    var parentElement = document.getElementById("wrapper-quickview");
    var elementToHide = document.getElementById("quickview");
    elementToHide.addEventListener("click", function (event) {
        event.stopPropagation(); // Ngăn chặn sự kiện click lan ra các phần tử khác
    });
    parentElement.addEventListener("click", function (event) {
        if (!elementToHide.contains(event.target)) {
            elementToHide.style.display = "none";
            parentElement.style.display = "none";
        }
    });
    // iconclose.addEventListener("click", function (event) {
    //     if (!elementToHide.contains(event.target)) {
    //         elementToHide.style.display = "none";
    //         parentElement.style.display = "none";
    //     }
    // });
}
function showQuickview(){
    var elementToShow = document.getElementById("quickview");
    var content = document.querySelectorAll(".quickview-box");
    var parentElement = document.getElementById("wrapper-quickview");
    
    
    content.forEach(function(content) {
        content.addEventListener("click", function(event) {
          event.preventDefault(); // Ngăn chặn hành động mặc định của sự kiện click
          elementToShow.style.display = "flex";
          parentElement.style.display = "block";
        });
    });

}

// function changeSlider(){
// let arr_hinh=[
//     "/img/img-slider/slide_index_1.png",
//     "/img/img-slider/slide_index_2.png",
//     "/img/img-slider/slide_index_3.png",
//     "/img/img-slider/slide_index_4.png",
//     "/img/img-slider/slide_index_5.png"
// ]

// var index = 0;

// setInterval(next, 5000);//set thoi gian chay lai ham
// }
// function prev(){
//     index --;
//     if(index < 0) index = arr_hinh.length

//     var show = document.getElementById("slide_img");
//     show.src = arr_hinh[index];
// }

// function next(){
//     index ++;
//     if(index >= arr_hinh.length) index = 0;

//     var show = document.getElementById("slide_img");
//     show.src = arr_hinh[index];
// }