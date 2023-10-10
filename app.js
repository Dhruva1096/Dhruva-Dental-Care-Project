const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobail_menu = document.querySelector('.header .nav-bar .nav-list ul');
const header = document.querySelector('.header.cotainer');
 
hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    mobail_menu.classList.toggle('active');
});

document.addEventListener('scroll',()=>{
    var scroll_position = window.scrollY;
    if(scroll_position > 250){
        header.style.backgroundColor = '#29323c';
    }else{
        header.style.backgroundcolor = 'transparent';
    }
});