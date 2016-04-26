<?php
function menu_item($href,$content) {
  echo "<li>";
  echo "<a href=\"".$href."\">".$content."</a>";
  echo "</li>";
  echo "\n";
}
