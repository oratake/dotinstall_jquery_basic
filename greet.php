<?php

$rs = array(
  "message" => htmlspecialchars("こんにちは, ".$_GET['name'], ENT_QUOTES, "utf-8"),
  "time" => date("H:i:s")
);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($rs);

?>
