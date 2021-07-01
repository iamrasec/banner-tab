jQuery.noConflict();
 
(function( $ ) {
  $(document).ready(function(){
    $(".column-slides").hover(function() {
      var hover_index = $(this).attr('data-index');
      console.log(hover_index);

      $(".hero-background-wrapper .hero-item-bg").addClass("hidebg").removeClass("showbg");
      $(".hero-background-wrapper").find("[data-index='"+ hover_index +"']").removeClass("hidebg").addClass("showbg");
    })
    .click(function() {
      window.location.href = $(this).find("a").attr("href");
    });
    
    $('.mobile-hero').slick();
    
  });
})( jQuery );