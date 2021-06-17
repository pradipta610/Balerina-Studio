const navSlide = ()=>{
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-link');
    const navlink = document.querySelectorAll('.nav-link li');


    burger.addEventListener('click', ()=>{
        //toggle nav
        nav.classList.toggle('nav-active');
        //animated link
        navlink.forEach((link,index)=>{
            if(link.style.animation){
                link.style.animation='';
            }else{ 
                link.style.animation = `navlinkfade 0.5s ease forwards ${index/7+0.3}s `;
            }
        });
        //burger
        burger.classList.toggle('toggle');

});


}

navSlide();