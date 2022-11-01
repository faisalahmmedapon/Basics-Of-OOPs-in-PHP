<?php 


// class addNumber {

//     function addToNumber($num1,$num2){
        
//         $result = $num1*$num2;
//         return $result;

//     }
// }


// $object = new addNumber();
// echo $object->addToNumber(10,5);








class addNumber {

    var $num1;
    var $num2;

    function addToNumber(){
        
        $result = $this->num1*$this->num2;
        return $result;

    }
}


$object = new addNumber();
$object->num1 = 5;
$object->num2 = 5;
echo $object->addToNumber();







?>