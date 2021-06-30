burger = document.querySelector('.burger')
navbar = document.querySelector('.nav_bar')
rightnav = document.querySelector('.rightnav')
navList = document.querySelector('.nav-list')


burger.addEventListener('click', function () {
       
        navList.classList.toggle('v-class-resp')
        nav_bar.classList.toggle('h-nav-resp')
    })