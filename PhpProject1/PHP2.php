 <?php
$OndrejKubena1 = 1;
        $OndrejKubena2 = 1;
        if($OndrejKubena1 <=  $OndrejKubena2){
               echo "Ondra Kubena";
        }
        if($OndrejKubena1 > $OndrejKubena2){
               echo"Ondra";
        }
        else{
            echo"Kubena";
        }
        if ($OndrejKubena1 > $OndrejKubena2){
            echo"Ondra";
            if($OndrejKubena1 == $OndrejKubena2){
                echo"Kubena";    
           }
        }
        switch ($OndrejKubena1) {
           case 0:
               break;
           case 1:
               echo"ok zoomer";
           case 2:
               break;
           case 3:
               break;
           case 4:
               break;
           case 5:
               break;
           default:
               break;
        }                              
 $produkty =  array(1 =>"op",2 =>"op1", 3 => "op2",4 =>"op3",5 =>"op4",6 =>"op5",7 =>"op6",8 =>"op7",9 =>"op8",10 =>"op9");                  
 
 $produkty1["op"] = array( );
 $produkty1["up"] = array( );
 $produkty1["ip"] = array( 
    array('jméno' => 'Max', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'knírač', 'věk' => 3 ),
    array('jméno' => 'Honza', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'buldok', 'věk' => 6),
    array('jméno' => 'Tom', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'čivava', 'věk' => 4 ),
    array('jméno' => 'Láďa', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'německý ovčák', 'věk' => 2),
    array('jméno' => 'Ivan', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'labrador', 'věk' => 1 ),
    array('jméno' => 'Ondra', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'jezevčík', 'věk' => 7 ),
    array('jméno' => 'Kuba', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'bernardýn', 'věk' => 5),
    array('jméno' => 'Michal', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'kolie', 'věk' => 9),
    array('jméno' => 'Jarda', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'zlatý retrívr', 'věk' => 10),
    array('jméno' => 'Alex', 'pohlaví' => 'M', 'druh' => 'pes', 'rasa' => 'dalmatýn', 'věk' => 1,5),
      );
var_dump($produkty);     
 var_dump($produkty1); 
 ?>
 

