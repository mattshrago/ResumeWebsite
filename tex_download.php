<?php
$filename = 'files/matthew_shrago_resume.tex';
  header("Pragma: public");
  header("Expires: 0"); 
  header("Pragma: no-cache"); 
  header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");  
  header("Content-Type: application/force-download"); 
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");
  header('Content-disposition: attachment; filename=' . basename($filename));
  header("Content-Type: application/tex");
  header("Content-Transfer-Encoding: binary");
  header('Content-Length: ' . filesize($filename));
  @readfile($filename);
  exit(0);
?>[/blockquote>