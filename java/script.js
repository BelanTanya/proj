new Swiper('.photo-slider', {
    navigation:{
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev'
    },
    
    
    

    breakpoints: {
        400: {
            slidesPerView: 1
        },
        992: {
            slidesPerView: 2,
        }
    },

    });

const iconMenu = document.querySelector('.burger');
if (iconMenu) {
    const menuBody = document.querySelector('.header-white');
    const pathName = document.querySelector('.name-g');
    iconMenu.addEventListener("click", function (e) {
        document.body.classList.toggle('_lock')
        iconMenu.classList.toggle('active');
        menuBody.classList.toggle('active');
        pathName.classList.toggle('active');
    });
}

const menuLinks = document.querySelectorAll('a[data-goto]');
if (menuLinks.length> 0) {
    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick);

    });

    function onMenuLinkClick(e) {
        const menuLink = e.target;
        if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)){
            const gotoBlock = document.querySelector(menuLink.dataset.goto);
            const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;
        
            window.scrollTo({
                top: gotoBlockValue,
                behavior: "smooth"
            });
            e.preventDefault();
        }
    }
}













