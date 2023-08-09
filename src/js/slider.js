// Carousels

( function( $ ) {

  document.addEventListener( 'DOMContentLoaded', function() {

    if(document.querySelector('.reviews')){
      const reviews_carousel = new Splide( '.reviews .splide', {
          type   : 'loop',
          arrows: false,
          pagination: false,
          speed: 800,
          gap: '80px',
          perPage: 4,
          breakpoints: {
            1200: {
              perPage: 3,
              gap: '20px',
            },
            768: {
              perPage: 2,
            },
            600: {
              perPage: 1,
            }
          }
      } );
      reviews_carousel.mount();
    }

  } );

} )( jQuery );

