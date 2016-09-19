

$( document ).ready(function() {
	setTimeout(function(){
    $('.first_carousel').carousel({
    	interval: 3000,
    	pause: null
    });}, 1500);

    $('.second_carousel').carousel({
    	interval: 3000,
    	pause: null
    });

    $('.third_carousel').carousel({
        interval: 4000,
        pause: null
    });

    $('.fourth_carousel').carousel({
        interval: 3000,
        pause: null
    });
    smoothScroll(1000);

    $('.firstCalendar').mouseover(function(){
    	$('.firstCalendar').css('border' , 'solid 2px red');
    })

    $('.firstCalendar').mouseout(function(){
    	$('.firstCalendar').css('border' , 'none');
    })


    $('.secondCalendar').mouseover(function(){
    	$('.secondCalendar').css('border' , 'solid 2px red');
    })

    $('.secondCalendar').mouseout(function(){
    	$('.secondCalendar').css('border' , 'none');
    })

    $('.thirdCalendar').mouseover(function(){
        $('.thirdCalendar').css('border' , 'solid 2px red');
    })

    $('.thirdCalendar').mouseout(function(){
        $('.thirdCalendar').css('border' , 'none');
    })

    $('.fourthCalendar').mouseover(function(){
        $('.fourthCalendar').css('border' , 'solid 2px red');
    })

    $('.fourthCalendar').mouseout(function(){
        $('.fourthCalendar').css('border' , 'none');
    })
    
});

function smoothScroll(speed) {
    $('#back_to_top').click(function() {
        $('html, body').animate({
            scrollTop:$('#top_Anchor').offset().top
        }, speed);
        event.preventDefault();
    });
}

