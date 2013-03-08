<?php
/*$page['help']: Dynamic help text, mostly for admin pages.
$page['content']: The main content of the current page.
$page['sidebar_first']: Navigation Menu.
$page['sidebar_second']: Items for the second sidebar.
$page['header']: Logo and Language Switch
$page['footer']:*/
?>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://web17.borsch01.htmldesign.de/piwik/" : "http://web17.borsch01.htmldesign.de/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 12);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://web17.borsch01.htmldesign.de/piwik/piwik.php?idsite=12" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

<div class="container span3 clearfix">

  <div id="head">
    <div class="logo">
    <a href ="/"><img src="/sites/all/themes/mgros/img/logo.png"></a>
    </div>
    <?php print render($page['header']) ?>
    <?php print render($page['preface']) ?>
    <?php print($breadcrumb); ?>
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
