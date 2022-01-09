jQuery('.about-nav a').on('click', function(e){
    e.preventDefault();
    var get_section = jQuery(this).attr('href'),
      section_offset = jQuery(get_section).offset().top;
    jQuery('body,html').animate({
      scrollTop: section_offset
    }, 1000);
  });