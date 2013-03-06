<?php
for($i=0;$i<count($variables['view']->style_plugin->rendered_fields);$i++) {
  $info[$i]['title'] = $variables['view']->style_plugin->rendered_fields[$i]['title'];
  $info[$i]['image'] = $variables['view']->style_plugin->rendered_fields[$i]['field_image'];
  $info[$i]['url'] = $variables['view']->style_plugin->rendered_fields[$i]['field_url'];
}
?>
<div class="view-header-topics">
  <div class="view-content">
    <?php $i=0; // Counter ?>
    <?php foreach ($info as $item) { ?>
    <div class="views-row span1">
        <a href="<?php print $item['url']; ?>">
          <?php if($item['image']) { ?>
            <div class="title color-<?php print $i ?>">
          <?php } else { ?>
            <div class="title">
          <?php } ?>
              <span class="inner"><?php print $item['title']; ?></span>
        </div></a>
      <div class="image color-<?php print $i ?>">
        <?php print $item['image']; ?>
      </div>
    </div>
    <?php $i++; } ?>
  </div>
</div>


