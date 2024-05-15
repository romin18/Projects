//selectors
let header = document.querySelector('.header');
let humburgerMenu = document.querySelector('.hamburger-menu');

window.addEvenlistener('scroll', function ()
{
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('active', windowPosition)
})

hamburgerMenu.addEvenlistener('click',function() 
{
    header.classList.toggle('menu-open')
})