<?php
require_once('../classes/autoload.php');
$_GET['id'] = 10;
// получим данные именно по этой карточке
$data = Tour::getLinesApiId($_GET['id']);

// var_dump($data);
// echo "Получили данные по карточке" . $data[0]['id'];
?>


<!DOCTYPE html>
<!-- Design by foolishdeveloper.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">


.lightbox {
    position: fixed;
    display: none;
    background-color: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    overflow: auto;
    top: 0;
    left: 0;
}
.lightbox-content {
    position: relative;
    width: 65%;
    height: 58%;

    margin: 5% auto;
    margin-top: 100px;
}
.lightbox-content img {
    border-radius: 3px;
    border: 6px solid white;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.lightbox-prev,
.lightbox-next {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 9px;
    top: 45%;
    cursor: pointer;
}
.lightbox-prev {
    left: 0;
}
.lightbox-next {
    right: -12px;
}
.lightbox-prev:hover,
.lightbox-next:hover {
    opacity: .8;
}

  </style>
</head>
<body>


<?php $imgCarousel = json_decode($data[0]['img-carousel'], true); ?>
<div class="gallery-container">
    <?php for ($i = 0; $i < count($imgCarousel); $i++) { ?>
    <div class="gallery-item" data-index="<?= $i+1 ?>)">
        <img src="<?= $imgCarousel[$i]; ?>">
    </div>
    <?php }; ?>
    
</div>


<script type="text/javascript">
const galleryItem = document.getElementsByClassName("gallery-item");
const lightBoxContainer = document.createElement("div");
const lightBoxContent = document.createElement("div");
const lightBoxImg = document.createElement("img");
const lightBoxPrev = document.createElement("div");
const lightBoxNext = document.createElement("div");

lightBoxContainer.classList.add("lightbox");
lightBoxContent.classList.add("lightbox-content");
lightBoxPrev.classList.add("lightbox-prev");
lightBoxPrev.innerHTML = "&#10094";
lightBoxNext.classList.add("lightbox-next");
lightBoxNext.innerHTML = "&#10095";

lightBoxContainer.appendChild(lightBoxContent);
lightBoxContent.appendChild(lightBoxImg);
lightBoxContent.appendChild(lightBoxPrev);
lightBoxContent.appendChild(lightBoxNext);
document.body.appendChild(lightBoxContainer);

let index = 1;

function showLightBox(n) {
    if (n > galleryItem.length) {
        index = 1;
    } else if (n < 1) {
        index = galleryItem.length;
    }
    let imageLocation = galleryItem[index-1].querySelector('img').getAttribute("src");
    console.log(imageLocation);
    lightBoxImg.setAttribute("src", imageLocation);
}

function currentImage() {
    lightBoxContainer.style.display = "block";

    let imageIndex = parseInt(this.getAttribute("data-index"));
    showLightBox(index = imageIndex);
}
for (let i = 0; i < galleryItem.length; i++) {
    galleryItem[i].addEventListener("click", currentImage);
}

function slideImage(n) {
    showLightBox(index += n);
}
function prevImage() {
    slideImage(-1);
}
function nextImage() {
    slideImage(1);
}
lightBoxPrev.addEventListener("click", prevImage);
lightBoxNext.addEventListener("click", nextImage);

function closeLightBox() {
    if (this === event.target) {
        lightBoxContainer.style.display = "none";
    }
}
lightBoxContainer.addEventListener("click", closeLightBox);
</script>
</body>
</html>