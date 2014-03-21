jQuery(document).ready(function($){
  //mobile menu click handler
	$('.menu-icon').click(function(){
		$('.menu-icon').toggleClass('active');
		$('.full-menu').toggleClass('open');
	});
  //Accordion effect on faqs
  var allPanels = $('dl.accordion > dd').hide();

  $('dl.accordion > dt').click(function() {
    $this = $(this);
    $target =  $this.next();

    if(!$target.hasClass('active')){
      allPanels.removeClass('active').slideUp();
      $target.addClass('active').slideDown();
    }
    return false;
  });

  //Scrolling function
  $("li.scroll > a").click(function(event){
    event.preventDefault();
    var id = $(this).attr("href");
    var divPosition = $(id).offset().top;
    $("html, body").animate({scrollTop: divPosition}, 800);
  });

    // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 400) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });
  // photo slider on front page
  if($('.flexslider').length > 0){
    $('.flexslider').flexslider({
        controlNav: false,
        directionNav: false,
      });
  }

	//Parallax effect
	// Cache the Window object
  $window = $(window);
  // Cache the Y offset and the speed of each sprite
  $('[data-type]').each(function() {  
    $(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
    $(this).data('Xposition', $(this).attr('data-Xposition'));
    $(this).data('speed', $(this).attr('data-speed'));
  });
  // For each element that has a data-type attribute
  $('section[data-type="background"]').each(function(){
    // Store some variables based on where we are
    var $self = $(this),
      offsetCoords = $self.offset(),
      topOffset = offsetCoords.top;
    // When the window is scrolled...
      $(window).scroll(function() {
      // If this section is in view
      if ( ($window.scrollTop() + $window.height()) > (topOffset) &&
         ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
        // Scroll the background at var speed
        // the yPos is a negative value because we're scrolling it UP!                
        var yPos = -($window.scrollTop() / $self.data('speed')); 

        // If this element has a Y offset then add it on
        if ($self.data('offsetY')) {
          yPos += $self.data('offsetY');
        }

        // Put together our final background position
        var coords = '50% '+ yPos + 'px';

        // Move the background
        $self.css({ backgroundPosition: coords });
 

      }; // in view

    }); // window scroll

  }); // each data-type

});
