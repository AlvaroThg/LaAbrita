window.addEventListener("scroll", function() {
    let hojas = document.querySelectorAll(".hoja-esquina");
    let screenHeight = window.innerHeight;

    hojas.forEach(function(hoja) {
        let position = hoja.getBoundingClientRect().top;
        if (position < screenHeight - 100) {
            hoja.classList.add("visible");
        }
    });
});
