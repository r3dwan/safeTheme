// Footer accordion

( function( $ ) {

  $(document).on('click', '.accordion', function(){

    let panels = document.querySelectorAll('.panel');
    panels.forEach(element => {
      element.style.maxHeight = null;
    });

    setTimeout(() => {

      if(!$(this).hasClass('active')){
        this.nextElementSibling.style.maxHeight = null;
      }
      
      $('.accordion').not(this).removeClass('active');
      
    }, 100);

    
      this.classList.toggle('active');
      let panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
  })


  // $(document).ready(function(){
  //   AOS.init({
  //       once: true
  //   })
  // }) 



  var wpcf7Elm = document.querySelector( '.wpcf7' );
          
  ( function( $ ) {

  if(wpcf7Elm){

      $('.wpcf7-submit').on('click', function(){

          if($('#hear-about').val() == ''){
            $('#hear-about').addClass('wpcf7-not-valid');
          }
          else{
            $('#hear-about').removeClass('wpcf7-not-valid');
          }

          if($('#contact-reason').val() == ''){
            $('#contact-reason').addClass('wpcf7-not-valid');
          }
          else{
            $('#contact-reason').removeClass('wpcf7-not-valid');
          }

          $('.wpcf7-submit').val('Submitting...');
      });
      wpcf7Elm.addEventListener( 'wpcf7mailfailed', function( event ) {
          $('.wpcf7-submit').val('Submit');
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
          $('.wpcf7-submit').val('Submit');
      }, false );
      wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
          $('.wpcf7-submit').val('Submit');
          $('#contact-page-form-container').remove();
          $('.remove-on-sent').remove();
          $('#contact-page-success-container').css('display', 'flex');
          setTimeout(() => {
              $('#contact-page-success-container').css('opacity', '1');
          }, 200);
      }, false );

  }


  } )( jQuery );



  $('.custom_dropdown').on('click', function(){
    $(this).toggleClass('active');
    $(this).next().toggleClass('active');
  })

  let all_links = document.querySelectorAll('a');
  if(all_links){
    all_links.forEach(elem => {
      if( 
          !elem.getAttribute('href').includes('safetrafikskola') && 
          !elem.getAttribute('href').includes('wordpress-957741-3340829.cloudwaysapps.com') && 
          !elem.getAttribute('href').includes('tel:') && 
          !elem.getAttribute('href').includes('mailto:')
        ){
        elem.setAttribute('target', '_blank');
      }
    });
  }


  $('a').on('click', function(e){
    var scroll = new SmoothScroll();
    
    if($(this).prop('href').includes('#go-to-services')){
      e.preventDefault();
      let offset_top = $('.product-cards').offset().top;
      scroll.animateScroll(offset_top - 60);
    }

    if($(this).prop('href').includes('#to-fifty-fifty')){
      e.preventDefault();
      let offset_top = $('.fifty-fifty').offset().top;
      scroll.animateScroll(offset_top - 60);
    }

  })


  let all_head_links = document.querySelectorAll('header a[href="#"]');

  all_head_links.forEach(elem => {
    elem.setAttribute('href', 'javascript:void(0)');
    elem.setAttribute('target', '');
  });



  if(document.querySelector('.woocommerce-form-login') || document.querySelector('.woocommerce-ResetPassword')){
    $('.woocommerce').addClass('direction_column');
    $('.woocommerce').addClass('login_page');
  }


} )( jQuery );




function generatePassword() {
  var length = 12,
      charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
      retVal = "";
  for (var i = 0, n = charset.length; i < length; ++i) {
      retVal += charset.charAt(Math.floor(Math.random() * n));
  }
  return retVal;
}

if(document.querySelector('#account_password')){
  document.querySelector('#account_password').value = generatePassword();
}


( function( $ ) {

  document.addEventListener('wpcf7submit', function(event) {
    if ('727' == event.detail.contactFormId || '668' == event.detail.contactFormId) {

      $('button[type="submit"]').html('Submitting...');

      var number = event.detail.inputs[0].value;

      var formData = {
        action: 'handle_api', // AJAX action name
        number: number // Get the phone number from the form
      };

      $.ajax({
          type: 'POST',
          url: myAjax.ajaxurl,
          data: formData,
          success: function(response) {
              console.log(response);
              $('button[type="submit"]').html('Bli uppringd');
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.error(textStatus, errorThrown);
              $('button[type="submit"]').html('Bli uppringd');
          }
      });
    
    }
  }, false);

} )( jQuery );