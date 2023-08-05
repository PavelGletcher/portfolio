let numproduct1 = document.getElementById ('numproduct1');
let numproduct2 = document.getElementById ('numproduct2');
let numproduct3 = document.getElementById ('numproduct3');
let numproduct4 = document.getElementById ('numproduct4');
//----------------------------------------------------//
numproduct1.addEventListener ('click', function(){
    numproduct1.classList.toggle ('activeproduct');
});
numproduct2.addEventListener ('click', function(){
    numproduct2.classList.toggle ('activeproduct');
});
numproduct3.addEventListener ('click', function(){
    numproduct3.classList.toggle ('activeproduct');
});
numproduct4.addEventListener ('click', function(){
    numproduct4.classList.toggle ('activeproduct');
});