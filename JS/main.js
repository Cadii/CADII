const totop = () => window.scrollTo({top: 0, behavior: 'smooth'});
const isDarkMode = () => {
  window.matchMedia('(prefers-color-scheme: dark)').matches;
}

const search = document.querySelector('.search');
const input = document.querySelector('.input');
const btn = document.querySelector('.btn');
btn.addEventListener('click' , () => {
    search.classList.toggle('active');
    input.focus()
});
