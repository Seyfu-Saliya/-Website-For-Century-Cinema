
  // Get all images with class "shake-image"
  var shakeImages = document.querySelectorAll(".shake-image");

  // Loop through each image with class "shake-image"
  shakeImages.forEach(function (img) {
    img.addEventListener("mouseover", function () {
      // Add class "shake" to image on mouseover
      img.classList.add("shake");
    });

    img.addEventListener("animationend", function () {
      // Remove class "shake" from image after animation ends
      img.classList.remove("shake");
    });
  });
