

$(document).ready(function() {

    //$(document).foundation();

    //Sidr
    $('#simple-menu').sidr();

    //NanoGallery
    if($().nanoGallery){
        $("#nanoGallery").nanoGallery({
            thumbnailWidth: 'auto',
            thumbnailHeight: 250,

            'kind': 'picasa',
            'userID': '107414295894871440057',
            'album': '6084413493052201185',

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
            //photoSorting: 'random',
            touchAnimation: true,
            touchAutoOpenDelay: 0

        });
    }




});

$(document).ready(function(){
    //Event Modal
    var eventLink = $('.event-grid a');

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
        $('a[href*=#]:not([href=#],[class*="no-scroll"])').click(function(e) {
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

    //schedule tabs

    $(".tab-link").click(function(e){

        e.preventDefault();
        $(".tab-link").removeClass('active');
        $('#schedule').find('.table-responsive').hide();
        $(this).addClass('active');
        var showTable = $(this).attr('href');
        $(showTable).parent().show();
    })

});
