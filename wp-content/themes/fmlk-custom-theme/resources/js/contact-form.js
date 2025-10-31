document.addEventListener('DOMContentLoaded', () => {
  const reason = document.querySelector('#reason');
  const sections = {
    'general': document.querySelector('#general-fields'),
    'catering': document.querySelector('#catering-fields'),
    'gift-box': document.querySelector('#gift-fields'),
    'white-label': document.querySelector('#white-label-fields'),
  };

  if (!reason) return;

  reason.addEventListener('change', (e) => {
    Object.values(sections).forEach(s => s.style.display = 'none');

    const selected = e.target.value;
    if (sections[selected]) sections[selected].style.display = 'block';
  });

  // Optional: simple validation
  const form = document.querySelector('#contact-form');
  form.addEventListener('submit', (e) => {
    let valid = true;

    form.querySelectorAll('[required]').forEach(input => {
      if (!input.value) {
        valid = false;
        input.classList.add('border-red-500');
      } else {
        input.classList.remove('border-red-500');
      }
    });

    if (!valid) e.preventDefault();
  });
});