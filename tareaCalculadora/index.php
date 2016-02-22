<?php
$scripts = ["js/angular.min.js", "js/app.js"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center>
	<div class="container" ng-app="calculator" ng-controller="calculatorController">
		<div class="row">
				<div>
					<div class="form-group">
						<input type="text" value="<?php echo $print; ?>">
					</div>
					<table>
						<tr>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(1)">1</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(2)">2</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(3)">3</button></td>
							<td><button class="btn btn-success" type="submit" ng-click="opDivide()">/</button></td>
							<td><button class="btn btn-success" type="submit" ng-click="opMultply()">*</button></td>
						</tr>
						<tr>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(4)">4</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(5)">5</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(6)">6</button></td>
							<td><button class="btn btn-success" type="submit" ng-click="opAdd()">+</button></td>
							<td><button class="btn btn-success" type="submit" ng-click="opSubtract()">-</button></td>
						</tr>
						<tr>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(7)">7</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(8)">8</button></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(9)">9</button></td>
							<td><button class="btn btn-warning" type="submit" ng-click="equal()">=</button></td>
							<td><button class="btn btn-danger" type="submit" ng-click="reset()">C</button></td>
						</tr>
						<tr>
							<td></td>
							<td><button class="btn btn-primary" type="submit" ng-click="giveVal(0)">0</button></td>
							
						</tr>
					</table>
				</div>
	  </div>  
	</div>
</center>
<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>
