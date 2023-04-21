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