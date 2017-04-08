<?php function isPalindroma($frase){
		$i=0;
		$non_spazi="";
		while ( $i< strlen($frase)) {
			if($frase[$i]!=" "){
				$non_spazi= $non_spazi.$frase[$i];
			}
			$i++;
		}
		$inverso=strrev($non_spazi);

		if(strcmp($non_spazi,$inverso)==0 ){
			return true;
		}
		else {return false;}

}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<div class="row">
  		<form class="form-inline" method="POST" action="index.php" >
			<label for="prima">Prima Frase</label>
   			<input  type="name" class="form-control" id="prima" name="prima">
  			<button type="submit" class="btn btn-default">Controlla</button>
  		</form>
	</div>
</div>
<?php
if (isset($_POST["prima"])&&isPalindroma($_POST["prima"])){
		echo "palindroma";}
		
?>
</body>
</html>
