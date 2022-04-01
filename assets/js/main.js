var popup = document.querySelector('.popup');
var menu = document.querySelector('.mobileMenu');
var popupBG = document.querySelector('.popupBackground');

function openPopup() {
    popup.classList.add('popupExpanded');
    popupBG.classList.add('show');
}

function closePopup() {
    popup.classList.remove('popupExpanded')
    popupBG.classList.remove('show');
}

function openMenu() {
    menu.classList.add('menuOpened');
}

function closeMenu() {
    menu.classList.remove('menuOpened');
}