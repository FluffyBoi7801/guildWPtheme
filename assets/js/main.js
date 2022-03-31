var popup = document.querySelector('.popup');
var menu = document.querySelector('.mobileMenu');

function openPopup() {
    popup.classList.add('popupExpanded');
}

function closePopup() {
    popup.classList.remove('popupExpanded')
}

function openMenu() {
    menu.classList.add('menuOpened');
}

function closeMenu() {
    menu.classList.remove('menuOpened');
}