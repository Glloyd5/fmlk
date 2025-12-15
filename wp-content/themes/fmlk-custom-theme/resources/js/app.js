import 'flowbite';

import '../fonts/CandyRoundBTNRegular.woff2';


document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('mobileMenuButton');
  const menu = document.getElementById('mobileMenu');
  const hamburger = document.getElementById('hamburgerIcon');
  const closeIcon = document.getElementById('closeIcon');

  btn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
  });
});