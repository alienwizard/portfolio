//init everything and get original values
jQuery(function ($) {

$(document).ready(function(){

var header = $('header');

var logoStartPos = $('header h3');

var navigation = $('li a');

var scrollYStart = window.scrollY;

var me = $('#me');

var prog = $('#page-prog ul')

//When logo clicked show meny

$(logoStartPos).click(function(){

console.log($(this).parent().parent());


$('a',$(this).parent().parent()).css({
	opacity:1,
})


});



//Keep track of page position on navbar pitchfork thing


//scroll function to make text on image move on scroll. Also show meny on scroll and hide when at the top
console.log(window);


$(window).scroll(function(){

	//console.log($('.prog-container')[0].offsetTop);
	console.log(window);

	var scrollYpos = window.scrollY;

	$('.prog-container').css({
			//top: scrollYpos,
	});

	//Get window scroll position
	

	$(header).css({
		//'margin-top':scrollYpos,
	});


	//console.log(window.scrollY);

	//console.log(me[0].offsetTop/2)

	//Check if scroll is past the header
	if (window.scrollY > 0) {

		$('article').css({
				'margin-top': header[0].clientHeight,
		});


		$(logoStartPos).css({

			'font-size': '40px',
		});

		$(header).css({
			'position': 'fixed',
		});

		$(navigation).css({
				'opacity':'1',
		});


	}else if(window.scrollY === 0){


					$('#me h1').css({
				top: 0 + 'px',
			});

				$('article').css({
				'margin-top': '0px',
		});

	


		$(header).css({
			'position': 'initial',
		});

		$(logoStartPos).css({

			'font-size': '50px',
		});

		$(navigation).css({
			opacity:'0'
		});
	}

	//Check if user is within the zone for animated text
	if(window.scrollY > me[0].offsetTop/2 && window.scrollY < me[0].clientHeight){
			//console.log('in the zone');

			$('#me h1').css({
				top: window.scrollY - me[0].offsetTop/2,
			});

			$('#me p').css({
					opacity: 0,
			})


	}else{

					$('#me p').css({
					opacity: 1,
			})

	}

	//check if scrolled to section 2 adn animate it in

	if(window.scrollY > $('#me')[0].offsetTop + $('#me')[0].clientHeight){

		//console.log('animate');

		$('#two .project-scroll').css({
			opacity: 1,
		})

		/*

		$('#two .project-scroll .text').css({
			left: $('#two .project-scroll')[0].clientWidth - 100 + 'px',
		})

		$('#two .project-scroll .text').addClass('rotateInUpRight');

		*/

		$('#two .project-scroll').addClass('slideInUp');

		//console.log($('#two .project-scroll'));

		


	}else{

		$('#two .project-scroll').css({
			opacity: 0,
		})

		$('#two .project-scroll').removeClass('slideInUp');
		/*
		$('#two .project-scroll .text').removeClass('rotateInUpRight');
		*/
	}

	


	//check if scrolled to section 3 adn animate it in

	//console.log(window.scrollY + window.innerHeight);
	//console.log($('#two')[0].offsetTop + $('#two')[0].clientHeight);


		if(window.scrollY + window.innerHeight > $('#two')[0].offsetTop + $('#two')[0].clientHeight){

			//console.log('bigger');

		//console.log('animate');
/*
		$('#three .project-scroll').css({
			opacity: 1,
		})

		$('#three .project-scroll .text').css({
			left: $('#three .project-scroll')[0].clientWidth - 100 + 'px',
		})

		$('#three .project-scroll').addClass('bounceInUp');

		//console.log($('#three .project-scroll'));

		$('#three .project-scroll .text').addClass('bounceInUp');
		*/


	}else{
		/*

		$('#three .project-scroll').css({
			opacity: 0,
		})

		$('#three .project-scroll').removeClass('bounceInUp');

		$('#three .project-scroll.text').removeClass('bounceInUp');
		*/

	}






});

$('.project-scroll')
	.mouseenter(function(){

		$('.overlay',this).css({
			opacity:0.8,
		});

						var topV  = $('.text',this).height()/2;

		$('.overlay',this).fadeIn('slow', function(){

			$('.bak-img',this).removeClass('pulse');

		})



				$('.text',this).fadeIn('fast',function(){

					console.log('faded');

					$(this).addClass('pulse');

				});



				

		


	})
	.mouseleave(function(){


		$('.overlay',this).fadeOut('fast', function(){

			$('.text',this).addClass('pulse');

		})

						$('.text',this).fadeOut('fast',function(){

					$(this).addClass('remove');

				});

		

	})

})

});