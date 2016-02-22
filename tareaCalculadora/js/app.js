angular.module('calculator', [])
	.service('calculatorService', ['$http', function($http) {
		var give = function give(num1, num2, operation) {
                var url = 'js/controllers/controller.php';
                url += '?num1=' + num1;
                url += '&num2=' + num2;
                url += '&operation=' + operation;

                return $http({url: url});
            };

            return {
                give: give
            }

	}])

	.controller('calculatorController', ['$scope', 'calculatorService', function ($scope, calculatorService) {
		$scope.init = function() {
            $scope.print= null;
        };

        var val = 1;
        $scope.num1 = 0;
        $scope.num2 = 0;
        $scope.operation = "";

        $scope.giveVal = function giveVal(num) { 
        	if (val == 1) {
        		$scope.num1 = num;
        	} else if (val == 2) {
        		$scope.num2 = num;
        	}
        }

		 $scope.changeVal = function changeVal() {
        	if (val == 1) {
        		val = 2;
        	} else if (val == 2) {
        		val = 1;
        	}
        }        

      	$scope.opDivide = function opDivide () {
        	$scope.operation = "divi";
        	$scope.changeVal();
      	}

      	$scope.opMultply = function opMultply () {
        	$scope.operation = "mult";
        	$scope.changeVal();
      	}

      	$scope.opAdd = function opAdd () {
        	$scope.operation = 'sum';
        	$scope.changeVal();
      	}

      	$scope.opSubtract = function opSubtract () {
        	$scope.operation = "sub";
        	$scope.changeVal();
      	}
 
        $scope.equal = function equal() { //imprime result
            calculatorService
            .give($scope.num1, $scope.num2, $scope.operation)
            .then(function(response) {
                if (response.data) {
                    $scope.print = response.data;
                }
            }, function(response) {
                $scope.print = response;
            });
            
        }

        $scope.reset = function reset() {
        	$scope.value ="";
        };

        $scope.init();
	}]); 





