var options = {
    accessibility: true,
    prevNextButtons: true,
    pageDots: true,
    setGallerySize: false,
    arrowShape: {
        x0: 10,
        x1: 60,
        y1: 50,
        x2: 60,
        y2: 45,
        x3: 15
    }
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);

flkty.on('scroll', function () {
    flkty.slides.forEach(function (slide, i) {
        var image = slides[i];
        var x = (slide.target + flkty.x) * -1 / 3;
        image.style.backgroundPosition = x + 'px';
    });
});

// Ventana Emergente

// Obtener la ventana modal
var modal = document.getElementById("myModal");

// Obtener el botón que abre la ventana modal
var btn = document.getElementById("myBtn");



// Obtener el botón de cierre
var span = document.getElementsByClassName("close")[0];

// Cuando el usuario haga clic en el botón, abrir la ventana modal
window.onload = function () {
    modal.style.display = "block";
}

// Cuando el usuario haga clic en el botón de cierre, cerrar la ventana modal
span.onclick = function () {
    modal.style.display = "none";
}

document.getElementById("continue-btn").onclick = function () {
    modal.style.display = "none";
}

// Cuando el usuario haga clic en el botón "Continuar", cerrar la ventana modal
var continueBtn = document.getElementById