<?php
// Variables
$image = $variables['view']->style_plugin->rendered_fields[0]['field_image'];
$tagname = $variables['view']->style_plugin->rendered_fields[0]['field_tags'];
$tid = db_query("SELECT tid FROM {taxonomy_term_data} where name = :name", array(':name' => $tagname))->fetchField();
$tag_image_id = db_query("SELECT field_image_fid FROM {field_data_field_image} where entity_id = :tid
  AND entity_type = 'taxonomy_term'", array(':tid' => $tid))->fetchField();
$tag_image_url = db_query("SELECT uri FROM {file_managed} where fid = :fid", array(':fid' => $tag_image_id))->fetchField();

// Get the right path
$pattern = "/public:\/\//";
$replacement = "/sites/default/files/";
$tag_image_url = preg_replace($pattern, $replacement, $tag_image_url);
?>

<div class="image pull-right">
<?php
if ($image) { print $image; } else { ?>
  <img typeof="foaf:Image" src="<?php print $tag_image_url; ?>" width="640" height="400" >
<?php } ?>
</div>
