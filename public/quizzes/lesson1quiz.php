<html>
<body>
	
		<?php

if (isset($_POST['useranswer1'])){

			$useranswer1=$_POST['useranswer1'];
				if (225==$useranswer1) {
				$q1=1;
				} else {
				$q1=0;
				}
				
			$useranswer2=$_POST['useranswer2'];
				if (625==$useranswer2) {
				$q2=1;
				} else {
				$q2=0;
				}

			$useranswer3=$_POST['useranswer3'];
				if (1225==$useranswer3) {
				$q3=1;
				} else {
				$q3=0;
				}
				
			$useranswer4=$_POST['useranswer4'];
				if (2025==$useranswer4) {
				$q4=1;
				} else {
				$q4=0;
				}
			$useranswer5=$_POST['useranswer5'];
				if (3025==$useranswer5) {
				$q5=1;
				} else {
				$q5=0;
				}
			echo "<b>Score: </b>";
			echo $q1+$q2+$q3+$q4+$q5;
	}else{
			
	}
?>

	
		<form method='post' action='lesson1quiz.php'><br />
		15^2 = ?? <br />
		<input type="text" name="useranswer1"><br /><br />
		25^2 = ?? <br />
		<input type="text" name="useranswer2"><br /><br />
		35^2 = ?? <br />
		<input type="text" name="useranswer3"><br /><br />
		45^2 = ?? <br />
		<input type="text" name="useranswer4"><br /><br />
		55^2 = ?? <br />
		<input type="text" name="useranswer5"><br /><br />
	
		<input type="submit" value='Submit Quiz'> <br /><br />
		</form>
	
</body>
</html>