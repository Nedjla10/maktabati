let bopen = document.querySelector('#open');
let bclose = document.querySelector('#btnrest');
function afficher(){
    document.querySelector('#popup').style.display= "flex";
}
function masquer(){
    document.querySelector('#popup').style.display= "none";
}
bopen.addEventListener("click",afficher);
bclose.addEventListener("click",masquer);


let bbtn = document.querySelector('#btn');
let bfer = document.querySelector('#fer');
function aff(){
    document.querySelector('#search').style.display= "flex";
}
function mas(){
    document.querySelector('#search').style.display= "none";
}             
bbtn.addEventListener("click",aff);
bfer.addEventListener("click",mas);
