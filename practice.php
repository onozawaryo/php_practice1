<?php
 function sum($A){
     $result = 0;
     $result =  $A * 2;
     return $result;
 }
 echo sum(100)."\n";
 
 
 function f($a, $b){
     $result = 0;
     $result = $a + $b;
     return $result;
 }
 echo f(10, 9)."\n";
 
 function g($arr){
     $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }return $result;
 }
  $arr = array(1, 3, 5, 7, 9);
  echo g($arr)."\n"; 
  
  function max_array($arr){
      $max_number = $arr[0];
    
   foreach($arr as $a){
       if($max_number < $a){
           $max_number = $a;
       }
   }
    return $max_number;
        
    }
   $array = [5, 11, 7, 9, 3, 8, 14];
   echo max_array($array)."\n";
   
   $html = '名前<br><p>名前</p><strong>名前</strong>';
   $html = strip_tags($html);
   echo $html."\n";
   
   $fruits = ['みかん', 'さくらんぼ', 'いちご'];
   array_push($fruits, 'りんご', 'めろん');
   print_r($fruits)."\n";
   
   $array1 = ['みかん', 'さくらんぼ'];
   $array2 = ['いちご', 'りんご', 'めろん'];
   $array = array_merge($array1, $array2);
   print_r($array)."\n";
   
   echo 'now time:' .time()."\n";
   
   $timestamp = mktime(22, 20, 0, 12, 1, 2019);
   echo $timestamp."\n";
   
   date_default_timezone_set('Asia/Tokyo');
   echo date("Y/m/d  H:i:s")."\n";
   
  $name = 'RYO';
  if($name == 'RYO'){
   echo '私はあなたの名前です'."\n";
  }else{
   echo '私はあなたの名前ではありません'."\n";
  }