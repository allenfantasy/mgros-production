<?php
/*$page['help']: Dynamic help text, mostly for admin pages.
$page['content']: The main content of the current page.
$page['sidebar_first']: Navigation Menu.
$page['sidebar_second']: Items for the second sidebar.
$page['header']: Logo and Language Switch
$page['footer']:*/
?>

<script>
jQuery('.view-header-topics .views-row img').click(function(e){
  alert('test')
  //$(e.target).hide()
});
</script>

<div class="container span3 clearfix">

  <div id="head">
    <div class="logo">
    <a href ="/"><img src="/sites/all/themes/mgros/img/logo.png"></a>
    </div>
    <?php print render($page['header']) ?>
    <?php print render($page['preface']) ?>
    <?php if(!$is_front) { print($breadcrumb); } ?>
  </div>
  <!-- head -->

	<?php if($is_front) { ?>
	  <div id="middle" class="front-page clearfix">
	<?php } else { ?>
	  <div id="middle" class="notfront-page clearfix">
	<?php } ?>
  <div class="wrapper">
	   <div class="nav span1 pull-left">
			<?php print render($page['sidebar_first']); ?>
	    <?php print render($page['sidebar_second']); ?>
     </div>
     <div class="content span2 pull-right">
      <?php if($tabs) { ?>
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php } ?>
			<?php print render($page['content']); ?>
	   </div>
  </div><!-- wrapper -->
	</div>
  <!-- middle -->

	<div id="footer">
		<?php print render($page['footer']); ?>
		<div class="footer-right" style="float:right; clear: both;">
		<a href="http://www.borsch.net/" target="_blank" style="font-size: 12px;opacity:0.4;">by BORSCH.NET</a>
		</div>
	</div>
  <!-- footer -->

</div><!-- container clearfix -->
