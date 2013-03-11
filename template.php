<?php
function mgros_preprocess_page($variables) {
  drupal_add_js(drupal_get_path('theme', 'mgros') . "/js/mgros.js", "file");
}
?>

