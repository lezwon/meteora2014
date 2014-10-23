

$(document).ready(function() {

    //Sidr
    $('#simple-menu').sidr();

    //NanoGallery
    if($().nanoGallery){
        $("#nanoGallery").nanoGallery({
            thumbnailWidth: 'auto',
            thumbnailHeight: 250,
            userID: '111186676244625461692', kind:'picasa',
            album: '5911347863561293937',
            colorScheme: 'none',
            thumbnailHoverEffect: [{ name: 'labelAppear75', duration: 300 }],
            //theme: 'clean',
            thumbnailGutterWidth : 0,
            thumbnailGutterHeight : 0,
            i18n: { thumbnailImageDescription: 'View Photo', thumbnailAlbumDescription: 'Open Album' },
            thumbnailLabel: { display: false, position: 'overImageOnMiddle', align: 'center' },
            colorSchemeViewer: 'dark',
            viewerDisplayLogo: true,
            thumbnailLazyLoad: true,
            photoSorting: 'random',
            touchAnimation: true
        });
    }



});

$(document).ready(function(){
    var tableLinks = $('#schedule td a, .event-grid a');
    tableLinks.click(function(e){
        e.preventDefault();
        $('#event-modal').modal();
    });

    $(function() {
        $('a[href*=#]:not([href=#])').click(function(e) {
            e.preventDefault();
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                    return false;
                }

            }
        });
    });

    $(".btn-delete").click(function(){
        var id = $(this).attr('data-id');
        console.log(id);
        $('#input-delete').attr('value',id);
    });

});
