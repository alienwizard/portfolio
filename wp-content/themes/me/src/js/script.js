



//init everything and get original values
jQuery(function ($) {

$(document).ready(function(){

var windowW = window.innerWidth;

var header = $('header');

var logoStartPos = $('header h3');

var navigation = $('li a');

var scrollYStart = window.scrollY;

var me = $('#me');

var meStartPos = $('#me h1').css('top')

var pos = parseInt(meStartPos, 10)

var prog = $('#page-prog ul')

console.log($('.full-page').height());

console.log($('.full-page').width());


//Constructor for the animated pixels
function Pixel(speed, locationx, locationy, color){

	//pixel bör ha en unik färg 

	this.speed = speed;
	this.locationx = locationx;
	this.locationy = locationy
	this.color = color;

	var sizex = Math.floor(Math.random() * 3) + 1;

	this.html = '<div class="pixel" style="background-color:'+ color +'; left:'+locationx+'px; top:'+ locationy+ 'px;height:'+sizex+'px;width:'+sizex+'px;"></div>'; 

	//

}

var documentW = $('.full-page').width();
var documentH = $('.full-page').height();

var canvas = $('#canvas')

var pixelArray = [];

pixelcount = 150;


for (var i = pixelcount - 1; i >= 0; i--) {

	var locationtX =  Math.floor(Math.random() * documentW) + 1;
	var locationY = Math.floor(Math.random() * documentH) + 1;



	pixelArray.push(new Pixel(2, locationtX, locationY, '#ca8300'));
	//console.log(pixelArray[i]);
	//console.log();

	//canvas[0].innerHTML += pixelArray[i];

}

pixelArray.forEach(function(e){

	canvas[0].innerHTML += e.html;
})

var testpixel = new Pixel(3, locationtX, locationY, '#ca8300');

//console.log(testpixel)

//console.log(testpixel.speed);




//When logo clicked show meny

$(logoStartPos).click(function(){



if($('a',$(this).parent().parent()).css('opacity') == '0.5' || $('a',$(this).parent().parent()).css('opacity') == '1'){
$('a',$(this).parent().parent()).css({
	opacity:0,
})
}else{
	$('a',$(this).parent().parent()).css({
	opacity:1,
})
}


});



//Keep track of page position on navbar pitchfork thing


//scroll function to make text on image move on scroll. Also show meny on scroll and hide when at the top

var lastScrollTop = 0;

$(window).scroll(function(){


	var scrollYpos = window.scrollY;

		var st = $(this).scrollTop();

	console.log('window: '+ st);

   if (st > lastScrollTop){
   	console.log('down');
       console.log(Math.random() * 3 -2);
       var dir = 'down'
       
   } else {
   	console.log('up');
      console.log(Math.random() * 3 + 1);
      var dir = 'up'
      
   }
   
   lastScrollTop = st;





for (var i = $('.pixel').length - 1; i >= 0; i--) {
	//console.log($('.pixel')[i].style.top);

	var currentPixel = $('.pixel')[i];

	var currentPixelPos = $(currentPixel).css('top')

	

switch(dir){
		case 'up':
		var pixelChange = Math.random() * 3 + 1
		break;
		case 'down':
		var pixelChange = Math.random() * 3 + -2
		break;
		default:
		var pixelChange = Math.random() * 3 + -2
		break

		}

	var lastpixelpos = parseInt(currentPixelPos, 10);

	$(currentPixel).css({
		top: lastpixelpos + pixelChange * 2
	})
}

	$('.prog-container').css({
			//top: scrollYpos,
	});

	//Get window scroll position
	

	$(header).css({
		//'margin-top':scrollYpos,
	});



	//Check if scroll is past the header
	if (window.scrollY > 0) {

		$('article').css({
				'margin-top': header[0].clientHeight,
		});

		if(windowW > 400){

		$(logoStartPos).css({

			'font-size': '40px',
		});

	}

		$(header).css({
			'position': 'fixed',
		});

		if(windowW > 400){

		$(navigation).css({
				'opacity':'1',
		});
	}


	}else if(window.scrollY === 0){

						if(windowW > 800){


					$('#me h1').css({
				top: 0 + 'px',
			});

				}else{

										$('#me h1').css({
				top: '-75px',
			});

				}

				$('article').css({
				'margin-top': '0px',
		});

	


		$(header).css({
			'position': 'initial',
		});

		if(windowW > 400){

		$(logoStartPos).css({

			'font-size': '50px',
		});



		$(navigation).css({
			opacity:'0.5'
		});
	}

		}


	var scrollLimitTop = 0;


	if (window.innerWidth < 800) {

		var scrollLimitTop = me[0].getBoundingClientRect().top - 75 - $('header').height();
	}else{

		var scrollLimitTop = me[0].getBoundingClientRect().top - $('header').height();

	}

		var scrollimg = $('#me');


		console.log(scrollimg.offset().top + scrollimg.height());
		//console.log(scrollimg[0].getBoundingClientRect().top + scrollimg[0].clientHeight) - $('header').height();



	//Check if user is within the zone for animated text
	if(window.scrollY < scrollimg.offset().top + scrollimg.height()  && scrollLimitTop < window.scrollY){



		var val = scrollLimitTop + meStartPos;

			$('#me h1').css({
				top: pos - scrollLimitTop,
			});

				if(windowW > 800){

			$('#me p').css({
					opacity: 0,
			})

		}


	}else{

					$('#me p').css({
					opacity: 1,
			})

	}


	//check if scrolled to section 2 adn animate it in

	function isScrolledIntoView(elem){

		var page = window.scrollY + window.innerHeight;

		for (var i = $(elem).length - 1; i >= 0; i--) {

			var elementTop = $(elem)[i].getBoundingClientRect().top;



			if (elementTop <= window.innerHeight) {


				var eInView = $(elem)[i]


				$(eInView).css({
					opacity: 1,
				});

				$(eInView).addClass('slideInUp');


				
			}else{

				var eInView = $(elem)[i]


				$(eInView).css({
					opacity: 0,
				});

				$(eInView).removeClass('slideInUp');



			}
		}

	}

	var isInView = isScrolledIntoView('#two .project-scroll');


	if(window.scrollY + window.innerHeight  >= $('#two')[0].offsetTop + 50){


	

		$('#two h1').css({
			opacity: 1,
		})

		$('#two h1').addClass('slideInUp');


	


	}else{

				$('#two h1').css({
			opacity: 0,
		})

		$('#two h1').removeClass('slideInUp');

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

	/*EVENTS FOR THE RESPONSIVE MENU*/

	$('.bars').click(function(){
		console.log($('.responsivemenu'));
		$('.responsivemenu').addClass('popupactive');
	});

	$('.popclose').click(function(){
		$('.responsivemenu').removeClass('popupactive');
	})

	document.addEventListener('click', function(e){

		var e = e || window.event;

		var target = e.target || e.srcElement;

		console.log(target);

	}, false);



})

});