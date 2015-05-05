<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/5
 * Time: 13:53
 */
$array = array(5,2,4,6,1,3);

function sertSort($arr){

    for($i=1;$i<count($arr);$i++){
        $tmp=$arr[$i];
        $key = $i-1;
        while( $key>=0 && $tmp<$arr[$key]){
            $arr[$key+1] = $arr[$key];
            $key--;
        }
        if(($key+1)!=$i)
            $arr[$key+1] = $tmp;
    }
    return $arr;
}
var_dump(sertSort($array));