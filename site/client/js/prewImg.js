/* ****** Код для предпросмотра картинок при выборе файла ****** */

let file_input = document.querySelector('#photo');
let image_preview = document.querySelector('.photo-prew');

const handle_file_preview = (e) => {
  let files = e.target.files;

  image_preview.querySelector('img').remove();

  let image = document.createElement('img');
  image.src = window.URL.createObjectURL(files[0]);
  image_preview.appendChild(image);

}

file_input.addEventListener('change', handle_file_preview);