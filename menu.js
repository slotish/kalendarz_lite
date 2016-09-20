

$( document ).ready(function() {

    appendPreview(1)

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

function appendPreview(n){
    $('#lookUp').fadeIn("slow")
    $('#lookUp').append(' <div id="Carousel" class="carousel  sixth_carousel carousel-fade center-block" data-ride="carousel"><div class="carousel-inner center-block " role="listbox"><div class="item active"><img src="images/'+n+'_1.png" alt="..." class="img-responsive center-block active"></div><div class="item"><img src="images/'+n+'_2.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_3.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_4.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_5.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_6.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_7.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_8.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_9.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_10.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_11.png" alt="..." class="img-responsive center-block"></div><div class="item"><img src="images/'+n+'_12.png" alt="..." class="img-responsive center-block"></div>');
    $('#lookUp').append('</div>');
    $('#lookUp').append('<a class="left carousel-control" href="#Carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left">');
    $('#lookUp').append('</span></a>');
    $('#lookUp').append('<a class="right carousel-control" href="#Carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right">');
    $('#lookUp').append('</span></a>');
    $('#lookUp').append('</div>');

    $('.right').click(function(){
        $('#lookUp').fadeOut("slow")
    })

}