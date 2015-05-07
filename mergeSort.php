<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/7
 * Time: 11:10
 */

ini_set("display_error", 1);
error_reporting(E_ALL);

$arr = array(3,1,1,8,4,8,6);

//$arr = array(3,7,1,8,4,9,6);
function mergesort($data) {
    // Only process if we're not down to one piece of data
    if( count($data) > 1 ){
        $mid = round( count($data) /2, 0 , PHP_ROUND_HALF_DOWN );
        $arr1 = mergesort(array_slice($data , 0, $mid));
        $arr2 = mergesort(array_slice($data, $mid, count($data) ));

        $f1 = $f2 = 0;

        for( $i = 0 ; $i < count($data); $i++ ){
            if( $f1 == count($arr1)) {
                $data[$i] = $arr2[$f2];
                $f2++;
            }elseif( ($f2 == count($arr2)) || ($arr1[$f1] < $arr2[$f2])){
                $data[$i] = $arr1[$f1];
                $f1++;
            }else{
                $data[$i] = $arr2[$f2];
                $f2++;
            }
        }
    }
    return $data;
}

$data = mergesort($arr);
print_r($data);