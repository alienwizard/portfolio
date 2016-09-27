//init everything and get original values
jQuery(function ($) {

$(document).ready(function(){

var header = $('header');

var logoStartPos = $('header h3');

var navigation = $('li a');

var scrollYStart = window.scrollY;

var me = $('#me');

console.log(me);


//Keep track of page position on navbar pitchfork thing


//scroll function to make text on image move on scroll. Also show meny on scroll and hide when at the top
console.log(window.scrollY);


$(window).scroll(function(){

	//Get window scroll position
	var scrollYpos = window.scrollY;

	$(header).css({
		//'margin-top':scrollYpos,
	});


	console.log(window.scrollY);

	console.log(me[0].offsetTop/2)

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


	}

	//check if scrolled to section 2

	if(window.scrollY > $('#me')[0].offsetTop + $('#me')[0].clientHeight){

		console.log('animate');

		$('#2 .project-scroll').css({
			opacity: 1,
		})

		$('#2 .project-scroll').addClass('slideInUp');

		$('#2 .project-scroll h1').addClass('rotateInUpRight');

	}else{

		$('#2 .project-scroll').css({
			opacity: 0,
		})

		$('#2 .project-scroll').removeClass('slideInUp');

		$('#2 .project-scroll h1').removeClass('rotateInUpRight');

	}

	console.log($('#me')[0].offsetTop + $('#me')[0].clientHeight);









});

})

});