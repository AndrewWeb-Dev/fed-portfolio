$(function(){
	console.log("It's working");
	var mn = $('.fixedNav');
	var scrolled = false


	$(window).scroll(function(){
		if ($(this).scrollTop() > 1080 && $(window).width() > 760){
			mn.addClass('nav-scrolled');
			var attr = $(mn).attr('style');
			// For some browsers, `attr` is undefined; for others, `attr` is false. Check for both.
			if (scrolled === false) {
				// if scrolled is equal to false we want to remove the styles
				if (typeof attr !==  undefined && attr !== false) {
					// if attr is not equal to false , remove style
				  mn.removeAttr('style');
				}
				//adds slide down
				mn.slideDown();
				scrolled = true
			}
		}else {
			mn.removeClass('nav-scrolled');
			scrolled = false
			mn.hide();
		}
	});



	$('.skillIconFlexer').on('mousemove', function(e){
		$('.diamond').css({
			left: e.pageX - $('.skillIconFlexer').offset().left,
		});
	});

	var skills = {
		html: {
			title:"HTML5",
			text:"I write clean markup with HTML5"
		},
		css: {
			title:"CSS3",
			text:"I do it in style with CSS3"
		},
		javascript: {
			title:"JavaScript",
			text:"I put the 'fun' in 'function' with JavaScript"
		},
		jquery: {
			title:"JQuery",
			text:"I interact with JQuery"
		},
		sass: {
			title:"SASS",
			text:"I stay organized with SASS"
		},
		git: {
			title:"Git",
			text:"I keep my versions controlled with Git"
		},
		github: {
			title:"Github",
			text:"I believe sharing is caring with Github"
		},
		gulp: {
			title:"Gulp",
			text:"I automate it with Gulp"
		},
		wp: {
			title:"WordPress",
			text:"I make it dynamic with WordPress"
		}
	}

	$(".devIcon").mouseenter(function(e){
		var skill = this.id
		$(".hoverResult")
		.empty()
		.hide()
		.html("<p>" + skills[skill].text + "<span class='orangeDot'>.</span></p>")
		.fadeIn();
	});

	if ($(window).width() <= 760){
		$(".devicon-html5-plain").trigger("mouseover");
	}


		$(".fa-bars").click(function() {
			$(".nav").slideDown();
			$(".fa-bars").hide();
			$(".fa-times-circle").slideDown();
		});

		$(".fa-times-circle").click(function(){
			$(".nav").slideUp();
			$(".fa-times-circle").slideUp();
			$(".fa-bars").slideDown();
		});

});



