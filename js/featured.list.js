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

        $.post(base_url,{
            action: 'get_post_content',
            id: post_id
        }, function(response){

            $('#featured-list').parent().find('.list').html(response);

        });


    });
});