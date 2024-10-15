<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>
    
<?php


    // function divideThisNumberByZero($a, $b){

    //     if($b==0){
    //         throw new Exception("Division by zero ");
    //     }

    //     return $a/$b;
    // }


    // try{

    //     divideThisNumberByZero(5,0);

    //     // other code....
    //     // nothing executed...

    // } catch (Exception $e){
    //     echo "There is a problem <br>". $e->getMessage();
    // }
 

    class CustomException extends Exception {
        public function errorMessage(){
            return "Error : ". $this->getMessage();
        }
    }

    try{
        $number = 0;
        if($number==0){
           throw new CustomException("Cannot divide by zero.");
        }
        
    }catch (CustomException $e){
        echo $e->errorMessage();
    }
    finally{
        echo "<br>This process is complete";
    }



?>
</body>
</html>