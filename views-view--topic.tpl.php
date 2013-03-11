<?php
// Variables
$tagname = $variables['view']->style_plugin->rendered_fields[0]['field_tags'];
$tagname = strtoupper($tagname);
$style = strtolower($tagname);
?>

<div class="topic-name <?php print $style; ?>">
<span><?php print $tagname; ?></span>
</div>
