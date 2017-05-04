$(document).ready(function() {
    $('#carrousel1').owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
        items: 1
    });

    $('.carrousel2').owlCarousel({
        loop: true,
        margin: 10,
        center: true,
        dots: true,

        navText: ["<i class='fa fa-arrow-left' aria-hidden='true'></i>", "<i class='fa fa-arrow-right' aria-hidden='true'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            480: {
                items: 1,
                nav: false,
            },
            768: {
                items: 3,
                nav: true,
            }
        }

    });

    $('.navs').onePageNav({
        currentClass: 'active',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

    $('#menu_show').click(function() {
        $('.descollaspes').show()
    });
    $('#menu_hide, .goto').click(function() {
        $('.descollaspes').hide()
    });

    $('#myform').validator().on('submit', function(e) {
        if (e.isDefaultPrevented()) {
            console.log("Faltan datos por enviar");
        } else {
            console.log("los datos colocados en el formulario son correctos.")
        }
    })




});


function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: {
            lat: 20.6574683,
            lng: -103.3980911
        },
        disableDefaultUI: true
    });

    var image = 'images/map.png';
    var beachMarker = new google.maps.Marker({
        position: {
            lat: 20.6574683,
            lng: -103.3980911
        },
        map: map,
        icon: image
    });
}