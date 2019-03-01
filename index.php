
<?php
header('Content-Type: text/html; charset=utf-8');
echo "<h2>  Написать  функции сортировки массивов, используя алгоритмы «Сортировка обменами», «Сортировка вставками»
 </h2><br>";
echo "<h2> сортировка обменами </h2><br>";
	
	function selectSort ($arr, $arrCount){
	$arr= [10,15,3,5,20,16,4,8]
    for($i=0; $i < $arrCount-1; $i++) {
           $small = $i;
           for($k=$i+1; $k < $arrCount; $k++){
        
            if($arr[$k] < $arr[$small])
            {
                $small = $k;
            }
        }
        
        $buf = $arr[$i];
        $arr[$i] = $arr[$small];
        $arr[$small] = $buf;
    }
    
    return $arr;
}
	print_r($arr);
	
	
?>
<br>
<br>
<?php
  echo "<h2> сортировка вставками </h2><br>";
	
	function insertSort($arr, $arrCount){
	$arr= [10,15,3,5,20,16,4,8]
    for($i = 1; $i < $arrCount; $i++){
    
        $rightVal = $arr[$i];
        $leftVal = $i - 1;
        
        while($leftVal >= 0 && $arr[$leftVal] > $rightVal)
        {
            $arr[$leftVal+1] = $arr[$leftVal];
            $leftValue--;
        }
        
        $arr[++$leftVal] = $rightVal;
    }
    
    return $arr;
}
	print_r($arr);
  
<?
<br>
<br>

<?php

echo "<h2> ханойские башни</h2><br>";

$i = 1;                                              
function hanoi($plates, $from, $to) {            
    global $i;                                             
        while($plates > 0) {
        $i++;
        $using = 6 - ($from + $to);     
        hanoi(--$plates, $from, $using);          
        print "Move plate from $from to $to; ";
        $from = $using;
     }
}
 
hanoi(64, 1, 3); 
print " Number of moves: $i";
	
?>
