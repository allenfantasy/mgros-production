<?php
if($content['field_sub_headline']) {
$tid = $content['field_sub_headline']['#object']->field_tags['und'][0]['tid'];
$node = $content['field_sub_headline']['#object'];
for($i=0;$i<count($node->field_sub_headline['und']); $i++) {
  $info[$i]['headline'] = $node->field_sub_headline['und'][$i]['value'];
  $info[$i]['text'] = $node->field_text['und'][$i]['value'];
  }
}
?>

<?php // Get a single record out of the database
//$tag = db_query("SELECT name FROM {taxonomy_term_data} where tid = :tid", array(':tid' => $tid))->fetchObject();
?>
  <?php foreach ($info as $item) { ?>
  <h2 class="sub-headline">
    <?php if($item['headline']) { print $item['headline']; } ?>
  </h2>
  <div class="text">
    <?php if($item['text']) { print $item['text']; } ?>
  </div>
  <?php } ?>

