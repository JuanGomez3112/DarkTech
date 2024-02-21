// Acordeón para Preguntas:
document.addEventListener('DOMContentLoaded', function () {
    const preguntaTitles = document.querySelectorAll('.title-pregunta');
    let preguntaAbierta = null;

    preguntaTitles.forEach((title) => {
        title.addEventListener('click', function () {
            const contenidoPregunta = this.nextElementSibling;
            if (preguntaAbierta && preguntaAbierta !== contenidoPregunta) {
                preguntaAbierta.classList.remove('activo');
                preguntaAbierta.previousElementSibling.querySelector('i.fa-caret-right').style.transform = 'rotate(0deg)';
            }
            contenidoPregunta.classList.toggle('activo');
            const icon = this.querySelector('i.fa-caret-right');
            icon.style.transform = contenidoPregunta.classList.contains('activo') ? 'rotate(90deg)' : 'rotate(0deg)';
            preguntaAbierta = contenidoPregunta.classList.contains('activo') ? contenidoPregunta : null;
        });
    });
});




document.addEventListener('DOMContentLoaded', function () {
    const toggleMenu = () => {
        const menuMovil = document.querySelector('.menu-movil');
        const menuHeader = document.querySelector('.menu--header');
        if (menuMovil && menuHeader) {
            if (menuMovil.style.display === 'none' || menuMovil.style.display === '') {
                menuMovil.style.display = 'flex';
            } else {
                menuMovil.style.display = 'none';
            }
        }
    };

    const barButton = document.querySelector('#bar-button');

    if (barButton) {
        barButton.addEventListener('click', toggleMenu);
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const iconOptions = document.querySelectorAll(".icon-option");

    iconOptions.forEach(option => {
        option.addEventListener("click", function () {
            iconOptions.forEach(opt => {
                option.classList.add("active");
            });
            opt.classList.remove("active");

        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    function handleIconOptionClick(event) {
        // Evita que el enlace o formulario realice su acción predeterminada
        // event.preventDefault();

        // Oculta el contenedor de redes sociales
        var redesSocialesContainer = document.querySelector('.redes-sociales');
        redesSocialesContainer.classList.add('hidden');
    }

    function checkWindowSize() {
        if (window.innerWidth < 509) {
            // Asigna el controlador de eventos clic solo si el ancho de la ventana es menor a 509px
            document.querySelectorAll('.icon-option').forEach(function (iconOption) {
                iconOption.addEventListener('click', handleIconOptionClick);
            });

            // Muestra el contenedor de redes sociales al hacer clic fuera de las opciones
            document.addEventListener('click', showRedesSocialesOutsideClick);
        } else {
            // Desasigna el controlador de eventos clic si el ancho de la ventana es 509px o mayor
            document.querySelectorAll('.icon-option').forEach(function (iconOption) {
                iconOption.removeEventListener('click', handleIconOptionClick);
            });

            // Desasigna el controlador de eventos clic en el documento
            document.removeEventListener('click', showRedesSocialesOutsideClick);

            // Muestra el contenedor de redes sociales por defecto
            var redesSocialesContainer = document.querySelector('.redes-sociales');
            redesSocialesContainer.classList.remove('hidden');
        }
    }

    function showRedesSocialesOutsideClick(event) {
        // Verifica si el clic ocurrió fuera de las opciones y del contenedor de redes sociales
        var isOutsideOptionsBar = !event.target.closest('.options-bar');
        var isOutsideRedesSociales = !event.target.closest('.redes-sociales');

        if (isOutsideOptionsBar && isOutsideRedesSociales) {
            // Muestra el contenedor de redes sociales
            var redesSocialesContainer = document.querySelector('.redes-sociales');
            redesSocialesContainer.classList.remove('hidden');
        }
    }

    // Verifica el tamaño de la pantalla al cargar la página
    checkWindowSize();

    // Verifica el tamaño de la pantalla al cambiar su tamaño
    window.addEventListener('resize', checkWindowSize);
});



jQuery(document).ready(function ($) {
    var $slickCarousel = $('.slick-carousel');
    var $mainImage = $('.main-image');
    var $prevImage1 = $('.prev-image-1');
    var $prevImage2 = $('.prev-image-2');
    var $nextImage1 = $('.next-image-1');
    var $nextImage2 = $('.next-image-2');

    $slickCarousel.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<i class="fa-solid fa-circle-chevron-left"></i>',
        nextArrow: '<i class="fa-solid fa-circle-chevron-right"></i>',
        infinite: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    function preloadImages(urls, callback) {
        var loadedImages = 0;
        urls.forEach(function (url) {
            var img = new Image();
            img.onload = function () {
                loadedImages++;
                if (loadedImages === urls.length) {
                    callback();
                }
            };
            img.src = url;
        });
    }

    function updateTestimonialInfo(currentSlide) {
        var prevImage2 = $slickCarousel.find('.slick-slide[data-slick-index="' + (currentSlide - 2) + '"] .img-user-testimonio img').attr('src');
        var prevImage1 = $slickCarousel.find('.slick-slide[data-slick-index="' + (currentSlide - 1) + '"] .img-user-testimonio img').attr('src');
        var nextImage1 = $slickCarousel.find('.slick-slide[data-slick-index="' + (currentSlide + 1) + '"] .img-user-testimonio img').attr('src');
        var nextImage2 = $slickCarousel.find('.slick-slide[data-slick-index="' + (currentSlide + 2) + '"] .img-user-testimonio img').attr('src');

        preloadImages([prevImage1, prevImage2, nextImage1, nextImage2], function () {
            $mainImage.attr('src', $slickCarousel.find('.slick-slide[data-slick-index="' + currentSlide + '"] .img-user-testimonio img').attr('src'));
            $prevImage1.attr('src', prevImage1);
            $prevImage2.attr('src', prevImage2);
            $nextImage1.attr('src', nextImage1);
            $nextImage2.attr('src', nextImage2);
        });
    }

    $slickCarousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        updateTestimonialInfo(nextSlide);
    });
});

jQuery(document).ready(function ($) {
    // Función para verificar si todos los campos están llenos y habilitar el botón
    function verificarCamposLlenos() {
        var testimonio = $('#testimonio').val();
        var nombre = $('#nombre').val();
        var profesion = $('#profesion').val();
        var empresa = $('#empresa').val();
        var valoracion = $('input[name="valoracion"]:checked').val();
        var condicionesPrivacidad = $('#condiciones_privacidad').prop('checked');

        var camposLlenos = testimonio && nombre && profesion && empresa && valoracion && condicionesPrivacidad;

        $('#enviar-testimonio-btn').prop('disabled', !camposLlenos);
        $('#enviar-testimonio-btn').css('opacity', camposLlenos ? 1 : 0.4);
    }

    // Verificar campos llenos al cargar la página
    verificarCamposLlenos();

    // Manejar cambios en los campos y la valoración
    $('#form-testimonio input, #form-testimonio textarea, #form-testimonio select').on('change', verificarCamposLlenos);

    // Manejar el envío del formulario
    $('#form-testimonio').on('submit', function (e) {
        // Verificar si se ha seleccionado una valoración
        if (!$('input[name="valoracion"]:checked').length) {
            alert('Por favor, selecciona una valoración antes de enviar el testimonio.');
            e.preventDefault(); // Evitar que se envíe el formulario
        }
    });
});
