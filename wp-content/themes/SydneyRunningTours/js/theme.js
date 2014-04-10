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

});
