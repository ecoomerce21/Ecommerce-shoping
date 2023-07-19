let bar=document.getElementById('bar');
let close=document.getElementById('close');
let nav=document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', ()=>{
        nav.classList.add('active');
    })
}
if(close){
    close.addEventListener('click', ()=>{
        nav.classList.remove('active');
    })
}
/*
else{
document.querySelector('#close').onclick = () =>{
    nav.classList.remove('active');
}
}*/



 
window.onscroll = () =>{

    navbar.classList.remove('active');

    if(window.scrollY > 100){
        document.querySelector('header').classList.add('active');
    }else{
        document.querySelector('header').classList.remove('active');
    }

}

