

$(document).ready(function() {

    //$(document).foundation();

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
            touchAnimation: true,
            touchAutoOpenDelay: 0

        });
    }



});

$(document).ready(function(){
    //Event Modal
    var eventLink = $('#schedule td a, .event-grid a');

    eventLink.click(function(e){
        e.preventDefault();

        var id = $(this).attr('data-id');
        var name = $("#event-name");
        var description = $("#event-description");
        var type = $("#event-type");

        var imageDefault = $("#event-image-default");
        var imageMobile = $("#event-image-mobile");
        var imageLarge = $("#event-image-large");

        console.log(id);

        $.post('getEvent.php',{   id:id   },function(data){
            data = jQuery.parseJSON(data);
            console.log(data);

            name.text(data.name);
            description.text(data.description);
            type.text(data.type);
            /** @namespace data.image_large */
            //image.attr('src',data.image_large);
            /** @namespace data.image_mobile */
            imageDefault.attr('src', data.image_large);
            imageLarge.attr('srcset', data.image_large);
            imageMobile.attr('srcset', data.image_mobile);

            $('#event-modal').modal();
        });
    });


    //Scroll to
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

    //delete id
    $(".btn-delete").click(function(){
        var id = $(this).attr('data-id');
        console.log(id);
        $('#input-delete').attr('value',id);
    });

});
