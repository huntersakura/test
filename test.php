<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>


<body>
 	
 	<?php
		$x = "<b>Huntersakura55</b>";
 		echo $x;
		$a = 123; 
		$b = 456;
		$y = "44444<br>";
        $name = "John";
        $surname = "Well";
    $login = "admins";
    $pass = "123456";
	echo "<br><br>";
    	//$c = $a + $b;
		echo $y;
        echo "<br><br>GRADE<br><br>**************<br><br>";
           $point = 56;
       if($point >= 90){$grade = "A";}
        else if($point >= 80){$grade = "B";}
        else if($point >= 70){$grade = "C";}
        else if($point >= 60){$grade = "D";}
        else if($point < 60){$grade = "F";}
        else {$grade = "ERROR";}
        echo $grade;
    if(($login == "admin") && ($pass == "123456"))
        { echo"<br> ท่านได้เข้าสู่ระบบแล้ว <br>";
        }
    else {
        echo "<br> ล็อกอินหรือรหัสผ่านไม่ถูกต้อง";
    }
    echo "<br><br><br>";
    echo "finish";
    echo "<br>$name$surname";
    echo "tong";
    
    
 	?>
</body>
</html>