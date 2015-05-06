<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/5
 * Time: 13:53
 */
$a = array(3,2,1,6,1,3);

function insert($arr){
    $b[] = $arr[0];
    for( $i = 1 ; $i < count($arr); $i++ ){
        $tmp = $arr[$i];
        $j = $i;
        while( $j > 0 &&  $b[$j-1] > $tmp ){
            $b[$j] = $b[$j - 1];
            $j--;
        }
        $b[$j]  = $tmp;
    }
    return $b;
}
var_dump(insert($a));