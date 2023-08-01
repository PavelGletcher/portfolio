let popupitembox = document.querySelector ('.popup--itembox'); 
let popupid = document.querySelector ('#popup');
let popupclass = document.querySelector ('.popup');
let popupbackground = document.querySelector ('.popup--background');
let popupclose = document.querySelector ('.popup--close');
popupid.addEventListener ('click', function (){
  popupitembox.classList.add ('popup--itembox--active');
  popupclass.classList.add ('popup--active');
});
popupclose.addEventListener ('click', function (){
  popupitembox.classList.remove ('popup--itembox--active');
  popupclass.classList.remove ('popup--active');
});
popupbackground.addEventListener ('click', function (){
  popupitembox.classList.remove ('popup--itembox--active');
  popupclass.classList.remove ('popup--active');
});
