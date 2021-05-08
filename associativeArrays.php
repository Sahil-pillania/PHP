<?php
$student= array("Maths"=>56, "Physics"=>70,  
"Chemistry"=>94, "English"=>83,  
"Computer"=>58);

/* Loop through array using foreach */

echo "Looping using foreach: <br>"; 
foreach ($student as $subject => $marks){ 
echo "Student got ".$marks." in ".$subject."<br>"; 
}

?>