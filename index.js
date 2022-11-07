let boton = document.querySelector(".boton")
let menu = document.querySelector(".menu")

boton.addEventListener("click", () => {
    menu.classList.toggle("active")
})