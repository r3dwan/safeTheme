( function( $ ) {
        
    $('[data-target-url]').on('click', function(){
        let target_url = $(this).data('target-url');
        $('.video-modal video').attr('src', target_url);
        $('.video-modal').addClass('active');
        $('.video-modal video').get(0).play();
    })

    $('.modal-close').on('click', function(){
        $('.video-modal').removeClass('active');
        var video = $('.video-modal video').get(0);
        video.currentTime = 0;
        video.pause();
    })
    $(document).on('click', function(e){
        if(e.target.classList.contains('video-modal')){
            $('.video-modal').removeClass('active');
            var video = $('.video-modal video').get(0);
            video.currentTime = 0;
            video.pause();
        }
    })

} )( jQuery );