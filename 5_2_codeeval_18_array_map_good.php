<?php

$arr=file($argv[1]); 
 
$string= implode(",", $arr);

$arr=(explode(',',$string)); 
 
$arrChunk=array_chunk($arr, 2);

$result=array_map(defining_multiplier, $arrChunk);
print (implode("",$result));

function defining_multiplier ($arrChunk) { 
	 $string=implode(",", $arrChunk);
	 list($a, $b) = array_map('intval', explode(',', $string));
	
	
	$rank = 1;
    $ranks = [$rank];

	 while($b * ($rank * 10) < $a) {
        $rank *= 10;
        $ranks[] = $rank;
    } $ranks = array_reverse($ranks);

	$multiplier = isset($result[$rank]) ? $result[$rank] : 1;
       
        while(($rank * ($multiplier + 1) * $b) < $a) {
          $multiplier++;
        }
        $result[$rank] = $multiplier;
        if($rank != 1) {
            $result[$rank * 0.1] = $multiplier * 10;
        } return $b * ($result[1]+1) . "\n";
}

