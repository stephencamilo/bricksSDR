<?php
function menu() {
  global $menu;
  echo "<ul>\n";
  foreach ($menu as $menu_item){
    $href = $menu_item['link'];
    $content = $menu_item['text'];
    menu_item($href,$content);
  }
  // echo "<\ul>\n";
}
