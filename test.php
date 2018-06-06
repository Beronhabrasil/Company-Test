<?php
class Test{
    //no direct access
    private function getString(){
     $string = "BCBBAABABAAACBCC"; 
     return $string;
    }
    public function stringReplacemment(){
        $string = $this->getString();
        $sub = substr($string, 4,2);
        $result1 = str_replace("AB","AA",$sub);
        $sub2 = substr($string, 3,2);
        $result2 = str_replace("BA","AA",$sub2);
        $sub3 = substr($string, 12,2);
        $result3 = str_replace("CB","CC",$sub3);
        $sub4 = substr($string, 13,2);
        $result4 = str_replace("BC","CC",$sub4);
        $sub5 = substr($string, 4,2);
        $result5 = str_replace("AA","A",$sub5);
        $sub6 = substr($string, 14,2);
        $result6 = str_replace("CC","C",$sub6);
        $finalResult =  array('AB'=>$result1,
                              'BA'=>$result2,
                              'CB'=>$result3,
                              'BC'=>$result4,
                              'AA'=>$result5,
                              'CC'=>$result6
                        );
                        return $finalResult;
    }
}
$replacemment = new Test();
$version1 = $replacemment->stringReplacemment();
echo "<h4>Rules</h4> <hr><br>";
foreach ($version1 as $key => $value) :
 echo $key."&nbsp-->&nbsp". $value."<br>";
endforeach;
    








