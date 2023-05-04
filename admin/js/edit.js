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
function getLinkImgs() {
    const myImages = document.getElementById("anhSPs");
    const imageContainer = document.getElementById("imageContainer");
    imageContainer.innerHTML = ""; // xóa các thẻ <img> cũ
  
    for (let i = 0; i < myImages.files.length; i++) {
      const selectedImage = myImages.files[i];
      const reader = new FileReader();
      const newImg = document.createElement("img");
  
      reader.addEventListener("load", function(event) {
        newImg.src = event.target.result;
    });
    
    reader.readAsDataURL(selectedImage);
    imageContainer.appendChild(newImg);
  }
    const formData = new FormData();
  const fileInput = document.querySelector('#anhSPs');
  for (const file of fileInput.files) {
    formData.append('anhphu[]', file);
  }
}