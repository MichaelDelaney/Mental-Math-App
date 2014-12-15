<html>
<body>
	
		<?php

if (isset($_POST['useranswer1'])){

			$useranswer1=$_POST['useranswer1'];
				if (136==$useranswer1) {
				$q1=1;
				} else {
				$q1=0;
				}
				
			$useranswer2=$_POST['useranswer2'];
				if (228==$useranswer2) {
				$q2=1;
				} else {
				$q2=0;
				}

			$useranswer3=$_POST['useranswer3'];
				if (492==$useranswer3) {
				$q3=1;
				} else {
				$q3=0;
				}
				
			$useranswer4=$_POST['useranswer4'];
				if (90==$useranswer4) {
				$q4=1;
				} else {
				$q4=0;
				}
			$useranswer5=$_POST['useranswer5'];
				if (56==$useranswer5) {
				$q5=1;
				} else {
				$q5=0;
				}
			echo "<b>Score: </b>";
			echo $q1+$q2+$q3+$q4+$q5;
	}else{
			
	}
?>

	
		<form method='post' action='lesson2quiz.php'><br />
		34 x 4 = ?? <br />
		<input type="text" name="useranswer1"><br /><br />
		57 x 4 = ?? <br />
		<input type="text" name="useranswer2"><br /><br />
		123 x 4 = ?? <br />
		<input type="text" name="useranswer3"><br /><br />
		22.5 x 4 = ?? <br />
		<input type="text" name="useranswer4"><br /><br />
		14 x 4 = ?? <br />
		<input type="text" name="useranswer5"><br /><br />
	
		<input type="submit" value='Submit Quiz'> <br /><br />
		</form>
	
</body>
</html>