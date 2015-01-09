var base_url = '';

$(document).ready(function(){

    base_url = $('[name=base_ur]').prop('content');

    $("#featured-list").owlCarousel({

        autoPlay: 3000,
        items : 4

    });

    $(".list-5").owlCarousel({

        autoPlay: 3000,
        items : 5

    });


    $("#featured-list figure a").click(function(){

        var post_id = $(this).data('id');

        $(".pre-loader").fadeIn(500);

        $.post(base_url,{
            action: 'get_post_content',
            id: post_id
        }, function(response){

            $(".pre-loader").delay(100).fadeOut(400);
            $('#featured-list').parent().find('.ajax-content').html(response);

        });


    });
});