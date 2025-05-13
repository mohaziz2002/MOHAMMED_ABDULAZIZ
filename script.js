
document.querySelectorAll('h2, p, ul, form, img').forEach(el => {
  el.style.opacity = 0;
  setTimeout(() => el.style.transition = 'opacity 0.6s', 100);
  setTimeout(() => el.style.opacity = 1, 100);
});


const btn = document.getElementById('themeToggle');
btn.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  btn.textContent = document.body.classList.contains('dark-mode')
    ? 'Toggle Light Mode'
    : 'Toggle Dark Mode';
});
