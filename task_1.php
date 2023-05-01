<?php

 $numbersArray = [1,4,5,8,9,2,0];
 $elementsNumber = count($numbersArray);

 function truncArray(&$numbersArray, $elementsNumber)
 {
      for ($i=0; $i < $elementsNumber; $i++) {
          if ($i % 2 !==0) {
              unset($numbersArray[$i]);
          }
          $aa = 2;
      }
 }

 truncArray($numbersArray, $elementsNumber);
 print_r($numbersArray);
 var_dump($numbersArray);