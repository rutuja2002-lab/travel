let menu=document.querySelector('#menu-btn');
let navbar= document.querySelector('.header .navbnar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    
};
menu.onscroll= () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    
};

var swiper = new Swiper(".home-slider", {
    loop:true, 
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
let loadMoreBtn= document.querySelector('.package .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick=() =>{
    let boxes=[...document.querySelectorAll('.package .box-container .box')];
    for(var i=currentItem; i < currentItem + 4;i++){
        boxes[i].style.display='inline-block';
    };
    currentItem += 4;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display='none';
    }
}



