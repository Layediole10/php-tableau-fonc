<?php
/* LOOPS
        EXO3
*/
// function create_model_1(int $n){

//     $model = '*';
    
    
//     for ($i=1; $i < $n; $i++) {
        
//         for ($j=1; $j <= $i; $j++) { 
//             echo $model."&nbsp";
            
//         }
//         echo "<br/>";
//     }
// }
// create_model_1(5);

// ----------------EXO4-------------
// function create_model_2(int $n){

//     $model = '*';
    
    
//     for ($i=1; $i <= $n; $i++) {
        
//         for ($j=1; $j <= $i; $j++) { 
//             echo $model."&nbsp";
            
//         }
        
        
//         echo "<br/>";
//     }
//     for ($i=$n; $i >= 1; $i--) {
        
//         for ($j=1; $j <= $i; $j++) { 
//             echo $model."&nbsp";
            
//         }
        
        
//         echo "<br/>";
//     }
   
// }
// create_model_2(5);

// ----------------------------
$n = 1;
while ($n <= 12) {
    if ($n <= 6) {

        for ($i=1; $i <= $n; $i++) { 
            echo ' * ';
        }
       echo "<br/>";
    }elseif ($n > 6) {
        for ($j=13-$n; $j >= 1; $j--) { 
            echo ' * ';
        }
       echo "<br/>";
    }
    $n++;
  
}

// --------------EXO5---------------

    // $n = 4;
    // $fac = 1;
    // for ($i=$n; $i >= 1; $i--) { 
    //     $fac = $fac * $i; 
        
    // }
    
    // echo "factoriel de " .$n. " est: " .$fac;

// --------------FUNC-EXO1---------------
//  function factoriel($n){
//     $fac = 1;
//     for ($i=$n; $i >= 1; $i--) {
//         if($n > 0) {
//             $fac = $fac * $i;
//         } 
        
//     }
//     return $fac;
    
// }
//  echo factoriel(4);

// -------------------EXO2----------------
// function prime_number($n){
//     if($n <2){
//         echo $n. " n'est pas premier";
//     }
//         elseif ($n === 2) {
//         echo $n. " est premier";
//     }
//         else{
//             for ($i=2; $i < $n ; $i++) { 

//                 if($n % $i === 0){
//                     return 0; 
//                 }
                
//             }
//         echo $n. " est premier";
//     }
       
        
// }
// prime_number(14);





?>

