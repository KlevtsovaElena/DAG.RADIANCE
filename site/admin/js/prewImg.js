
let file_input = document.querySelector('#new-img-title');
console.log(file_input);
let image_preview = document.querySelector('.img-title-prew');
console.log(image_preview);

let files_input = document.querySelector('#new-img-carousel');
console.log(files_input);
let image_carousel_preview = document.querySelector('.img-carousel-prew');
console.log(image_carousel_preview);


const handle_file_preview = (e) => {
  let files = e.target.files;

  image_preview.querySelector('img').remove();

      let image = document.createElement('img');
      // use the DOMstring for source
      image.src = window.URL.createObjectURL(files[0]);
      image_preview.appendChild(image);


}

file_input.addEventListener('change', handle_file_preview);



const handle_file_preview2 = (e) => {
    let files = e.target.files;
    let length = files.length;
  

  
    for(let i = 0; i < length; i++) {
        let image = document.createElement('img');
        // use the DOMstring for source
        image.src = window.URL.createObjectURL(files[i]);
        image_carousel_preview.appendChild(image);
    }
  
  }
  files_input.addEventListener('change', handle_file_preview2);




// <div class="img-carousel-item">
// <img style="width: 100px" src="<?= '../client/' . $imgCarousel[$i]; ?>">
// <input type=hidden name="img-carousel[<?= $i; ?>]" value="<?= $imgCarousel[$i]; ?>">
// <div class="d-inline-block" onclick="hiddenDeleteImgCarousel()">X удалить</div>
// <div class="d-none delete-img-carousel">
// <h6>Удалить это изображение?<h6>
//     <div class="d-inline-block delete-true" onclick="deleteImgCarousel()">ДА</div>
//     <div class="d-inline-block delete-false" onclick="notDeleteImgCarousel()">ОТМЕНА</div>
// </div>

// </div> 