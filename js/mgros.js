// Custom Javascript by Allen( dev.cna@borsch.net )
(function($){
  $(document).ready(function() {
    $('.view-header-topics .views-row img').hover(
      function(e){
      //$(e.target).css('visibility', 'hidden');
      $(e.target).hide();
	});
    $('.view-header-topics .views-row .image').mouseleave(function(e) {
      $(e.target).find('img').show();
    })
  });
})(jQuery);
