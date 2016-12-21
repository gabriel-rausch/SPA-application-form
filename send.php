<?php

  $message = "";
  $subject = "Hochzeit - Zusage";

  foreach ($_POST as $key => $value) {
    if (strpos($key, 'bsage') !== false) {
        $subject = "Hochzeit - Absage";
    }
    $message .= htmlspecialchars($key).": ".htmlspecialchars($value)."\n\r";
  }
  //echo $subject."  ".$message;
  mail('misc@gabriel-rausch.de,vivien.lein@googlemail.com', $subject, $message);

?>