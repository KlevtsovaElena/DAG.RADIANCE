/* ****** Код для предпросмотра картинок на страницах редактирования ****** */

let file_input = document.querySelector('#new-img-title');
let image_preview = document.querySelector('.img-title-prew');

let files_input = document.querySelector('#new-img-carousel');
let image_carousel_preview = document.querySelector('.img-carousel-prew');

const handle_file_preview = (e) => {
  let files = e.target.files;

  image_preview.querySelector('img').remove();

  let image = document.createElement('img');
  image.src = window.URL.createObjectURL(files[0]);
  image_preview.appendChild(image);

}

file_input.addEventListener('change', handle_file_preview);

const handle_file_preview2 = (e) => {
    let files = e.target.files;
    let length = files.length;
    image_carousel_preview.innerHTML="";

      for(let i = 0; i < length; i++) {
        let image = document.createElement('img');
        image.src = window.URL.createObjectURL(files[i]);
        image_carousel_preview.appendChild(image);
    }
  
}

files_input.addEventListener('change', handle_file_preview2);

