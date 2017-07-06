<?php
/**
 * Created by PhpStorm.
 * User: YHx
 * Date: 2017/6/23
 * Time: 17:37
 */
namespace app\index\controller;
class Test{

    function daxie($num){
        $da_num = array('零','一','二','三','四','五','六','七','八','九');
        $return = '';
        $len_num = strlen($num);
        if(!is_numeric($num) || $len_num < 0){
            return '';
        }


        for($i=0;$i<$len_num;$i++){
            $return .= $da_num[ substr($num,$i,1)];
        }

        return $return;
    }

    function aaa(){
        dump($this->daxie('987654321'));

        $str1 = null;
        $str2 = false;
        echo $str1==$str2 ? '相等' : '不相等';  //相等
        // 5
        $str3 = '';
        $str4 = 0;
        echo $str3==$str4 ? '相等' : '不相等';  //相等
        $str5 = 0;
        $str6 = '0';
        echo $str5===$str6 ? '相等' : '不相等';  //不相等11
        dump($this->return_str('4598750'));
    }


    function return_str($sss){

        $bb=array('零','壹','贰','叁','肆','伍','陸','柒','捌','玖');
        $str=strlen($sss);
        $cc='';
        for($i=0;$i<$str;$i++){
            $cc.=$bb[substr($sss,$i,1)];
        }
        return $cc;

    }


    function testOne(){
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = array();
        $a8 = array(array());
        echo empty($a1) ? 'true' : 'false';  //true11
        echo empty($a2) ? 'true' : 'false';  //true12
        echo empty($a3) ? 'true' : 'false';  //true13
        echo empty($a4) ? 'true' : 'false';  //true14
        echo empty($a5) ? 'true' : 'false';  //true15
        echo empty($a6) ? 'true' : 'false';  //false16
        echo empty($a7) ? 'true' : 'false';  //true17
        echo empty($a8) ? 'true' : 'false';  //false18
    }

    function testTwo(){

    }
}
