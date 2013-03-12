// Custom Javascript by Allen( dev.cna@borsch.net )
(function($){
  $(document).ready(function() {
    $('.view-header-topics .views-row .image').hover(
      function(e){
        $(this).find('img').toggle();
	    }
    );
  });
})(jQuery);
