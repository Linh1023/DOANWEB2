function addFieldOtherBrand(){
    var selectElement = document.getElementById("brand");
    var otherBrandField = document.getElementById("other-brand-field");
    if (selectElement.value == "Khác") {
        otherBrandField.style.display = "block";
    } else {
        otherBrandField.style.display = "none";
    }
}
function addFieldOtherCategory(){
    var selectElement = document.getElementById("category");
    var otherBrandField = document.getElementById("other-category-field");
    if (selectElement.value == "Khác") {
        otherBrandField.style.display = "block";
    } else {
        otherBrandField.style.display = "none";
    }
}
function getLinkImg(){
    const myImage = document.getElementById("anhSP");
    const imagePreview = document.getElementById("imagePreview");
    const selectedImage = myImage.files[0];
    const reader = new FileReader();

    reader.addEventListener("load", function(event) {
        imagePreview.src = event.target.result;
    });

    reader.readAsDataURL(selectedImage);
};