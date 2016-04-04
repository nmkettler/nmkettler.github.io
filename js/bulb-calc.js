(function(){ //Can exsist with other javascripts in the page - })();

	var app = angular.module('myCalculator',[]); //var app and app.controller are the 2 main elements to define angular application (model & controller)

	app.controller('CalculatorController',['$scope',function($scope){ //add a contorller onto app. $Scope allows to pass variables from html to javascript

		$scope.lumen_options = [375, 600, 900, 1125, 1600];
		$scope.current_lumens = 600; //Starting value of lumen dropdown
		$scope.current_cost = 12;
		$scope.current_hours = 3;
		$scope.total_days = 365;

		$scope.inc_conversion = .0625;
		$scope.hal_conversion = .0450;
		$scope.cfl_conversion = .0146;
		$scope.led_conversion = .0125;

		$scope.calculate = function(){
			//Wattage Conversion 
			$scope.inc_wattage =( $scope.current_lumens * $scope.inc_conversion).toFixed(1); //Create variable for wattage to change (wattage=lumens * conversion. toFixed rounds decimal to 1
			$scope.hal_wattage =( $scope.current_lumens * $scope.hal_conversion).toFixed(1);
			$scope.cfl_wattage =( $scope.current_lumens * $scope.cfl_conversion).toFixed(1);
			$scope.led_wattage =( $scope.current_lumens * $scope.led_conversion).toFixed(1);

			//Price per year ((wattage amounts * number of hours / 1000 for kWh) * hours)
			if($scope.current_hours > 24){
				$scope.current_hours = 24
			}

			var total_hours = $scope.total_days * $scope.current_hours;
			var cost = $scope.current_cost / 100; //Cost in pennies

			$scope.inc_cost = ((($scope.inc_wattage * total_hours) / 1000) * cost).toFixed(2);
			$scope.hal_cost = ((($scope.hal_wattage * total_hours) / 1000) * cost).toFixed(2);
			$scope.cfl_cost = ((($scope.cfl_wattage * total_hours) / 1000) * cost).toFixed(2);
			$scope.led_cost = ((($scope.led_wattage * total_hours) / 1000) * cost).toFixed(2);

		}

		$scope.calculate();

	}]);




})();



