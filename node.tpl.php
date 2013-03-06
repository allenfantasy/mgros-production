<?php
$tid = $content['field_sub_headline']['#object']->field_tags['und'][0]['tid'];
$node = $content['field_sub_headline']['#object'];
for($i=0;$i<count($node->field_sub_headline['und']); $i++) {
  $info[$i]['headline'] = $node->field_sub_headline['und'][$i]['value'];
  $info[$i]['text'] = $node->field_text['und'][$i]['value'];
}
?>

<?php // Get a single record out of the database
$tag = db_query("SELECT name FROM {taxonomy_term_data} where tid = :tid", array(':tid' => $tid))->fetchObject();
print $tag->name;
?>
  <?php foreach ($info as $item) { ?>
  <div class="sub-headline">
    <?php if($item['headline']) { print $item['headline']; } ?>
  </div>
  <div class="text">
    <?php if($item['text']) { print $item['text']; } ?>
  </div>
  <?php } ?>

<div style="color: #ff0000;"> <?php //print_r($content['field_sub_headline']['#object']); ?></div>
<div style="color: #ff0000;"> <?php //print_r($variables); ?></div>
