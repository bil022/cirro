<?php
$ds="pbmc3k";
$content=file_get_contents("index.html");
if (isset($_REQUEST["ds"])) {
  $ds=$_REQUEST["ds"];
  echo str_replace("pbmc3k", $ds, $content);
} else {
  echo $content;
}
?>
