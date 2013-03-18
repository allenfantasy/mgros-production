<?php
for($i=0;$i<count($variables['view']->style_plugin->rendered_fields);$i++) {
  $info[$i]['title'] = $variables['view']->style_plugin->rendered_fields[$i]['title'];
  $info[$i]['image'] = $variables['view']->style_plugin->rendered_fields[$i]['field_image'];
  $info[$i]['url'] = $variables['view']->style_plugin->rendered_fields[$i]['field_url'];
  //$info[$i]['photo'] = ($variables['view']->style_plugin->rendered_fields[$i]['field_switch'] == 'photo') ;
  $info[$i]['photo'] = $variables['view']->style_plugin->rendered_fields[$i]['field_switch'] == "Photo" ;
}
?>
<div class="view-header-topics">
  <div class="view-content">
    <?php $i=0; // Counter ?>
    <?php foreach ($info as $item) { ?>
    <div class="views-row span1">
        <?php $url = base_path() . $item['url']; ?>
        <a class="title" href="<?php print $url; ?>">
          <?php if($item['image'] && $item['photo']) { ?>
            <div class="title color-<?php print $i ?>">
          <?php } else { ?>
            <div class="title ">
          <?php } ?>
              <span class="inner"><?php print $item['title']; ?></span>
        </div></a>
      <a href="<?php print $url; ?>">
      <?php if($item['image'] && $item['photo']) { ?>
      <div class="image color-<?php print $i ?>">
      <?php } else { ?>
      <div class="image color-<?php print $i ?> hide">
      <?php } ?>
        <?php
          print $item['image'];
        ?>
      </div></a>
    </div>
    <?php $i++; } ?>
  </div>
</div>


