const abrir = document.querySelector('#abrir');
const nav = document.querySelector('#nav');


abrir.addEventListener("click", () => {
    nav.classList.add("active");
});


nav.addEventListener("mouseleave", () => {
    nav.classList.remove("active");
});