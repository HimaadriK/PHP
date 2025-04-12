
<?php

        $marks = array( 
            "Himaadri" => array(
                "physics" => 35,
                "maths" => 30,	
                "chemistry" => 39
                ),
            
            "Vaibhav" => array(
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
                ),
            
            "Sehaj" => array(
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
                )
            );
         
         echo "Marks for Himaadri in physics : " ;
         echo $marks['Himaadri']['physics'] . "<br>"; 
         
         echo "Marks for Vaibhav in maths : ";
         echo $marks['Vaibhav']['maths'] . "<br>"; 
         
         echo "Marks for Sehaj in chemistry : " ;
         echo $marks['Sehaj']['chemistry'] . "<br>";
	 echo"This code is executed by Himaadri Kapoor,2220100224"; 
         
?>
