const userMenu = document.querySelector('.profile-dropdown');
userMenu.addEventListener('click', function (event) {
  const userDrop = document.querySelector('.user-drop');
  const isHidden = userDrop.classList.contains('hidden');

  if (isHidden) {
    userDrop.classList.remove('hidden');

  }
  else {
    userDrop.classList.add('hidden');
  }
});

const menu = document.querySelector('#mobile-button');
menu.addEventListener('click', function (event) {
  const menuMobile = document.querySelector('#mobile-menu');
  const isHiddenMenuMobile = menuMobile.classList.contains('hidden');

  if (isHiddenMenuMobile) {
    menuMobile.classList.remove('hidden');

  }
  else {
    menuMobile.classList.add('hidden');
  }
});

const menuUserMobile = document.querySelector('#mobile-profile-dropdown');
menuUserMobile.addEventListener('click', function (event) {
  const menuMobile = document.querySelector('#mobile-menu-user');
  const isHiddenMenuMobile = menuMobile.classList.contains('hidden');

  if (isHiddenMenuMobile) {
    menuMobile.classList.remove('hidden');

  }
  else {
    menuMobile.classList.add('hidden');
  }
});
