#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    strpos($line,"xy"!==false){  //関数を使って、文字列 "xy" が含まれる単語を echo "$line"; で表示しなさい。
    echo "$line";
  } 
?>
