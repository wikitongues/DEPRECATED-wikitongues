function navScrollWatcher() {
  $(document).scroll(function() {
    var target = $(".page-banner").height()-50
    if($(document).scrollTop() >= target) {
      $("#header").addClass("scrolled")
    } else {
      $("#header").removeClass("scrolled")
    }
  })
}

function reponsiveIframe() {
   function setAspectRatio() {
      $('iframe').each(function() {
		$(this).attr('width','100%')
        $(this).css('height',$(this).width()*9/16)
      })
    }

    setAspectRatio()   
    $(window).resize(setAspectRatio)
}

function closeModule() {
	$('.close-button').on('click', function(){
		$(this).closest('.grouping.legal').find('.open-legal').show()
		$(this).closest('.module').hide()
	})
}

function openLegal() {
	$('.open-legal').on('click', function(){
		$(this).hide()
		$(this).parent().find('.module').show()
	})
}

function sectionTabs() {
	$('.section-tabs li:first-of-type button').addClass('active')

	$('.section-tabs li button').on('click', function(){
		var $targetId = $(this).attr('id')
		$('.section-tabs li button.active').removeClass('active')
		$(this).addClass('active')
		$('section').each(function(){
			if($(this).attr('id') === $targetId){
				$('section.active').removeClass('active')
				$(this).addClass('active')
			}
		})

	})
}

function carousel() {
	var $banner = $('.page-banner'),
		$carouselWidth = $($banner).width(),
		$carouselHeight = $($banner).height(),
		$scrollLength = $carouselHeight - 75,
		$firstSlide = $('.carousel-slide').first(),
		$slide = 0,
		$hasClickedOnCarousel

		function animateForward(){
			$firstSlide.animate({'margin-left': '-'+$carouselWidth+'px'}, 500 )
			$slide = $slide+1
		}

		function animateBack(){
			$firstSlide.animate({'margin-left': '0px'}, 500 )
			$slide = $slide-1
		}

		function animateDown(){
			$('html, body').animate({ scrollTop:  $($banner).offset().top + $scrollLength }, 500);
		}

		// fix: run only if more than one slide
		if($('.carousel-slide').length>1){
			$hasClickedOnCarousel = setTimeout(animateForward, 6500)
		}

		$('.slide-back').click(function(){
			animateBack()
		})

		$('.slide-forward').click(function(){
			animateForward()
			clearTimeout($hasClickedOnCarousel)
		})

		$('.slide-down').click(function(){
			animateDown()
		})

		// window resize function not working
		$(window).resize(function(){
			$carouselWidth = $($banner).width()
			// $firstSlide.css('margin-left','-'+$carouselWidth+'px')
			if($slide == 1) {
				$firstSlide.css('margin-left','-'+$carouselWidth+'px')
			}
		})

}