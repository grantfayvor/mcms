app.controller("UserController", ['$scope', '$rootScope', 'UserService', function($scope, $rootScope, UserService){

	$scope.new_user = {};
	$scope.passwordMatch = true;

	$scope.confirmPassword = function () {
		if ($scope.new_user.password != $scope.new_user.confirmPassword) {
			$scope.passwordMatch = false;
		} else {
			$scope.passwordMatch = true;
		}
	};

	$scope.registerAdmin = function(){
		UserService.registerUser($scope.new_user, function (response) {
			if (response.data.result === true) {
				console.log("the user has successfully been registered " + response.data);
				$scope.registered = 1;
				setTimeout(function () {
					$("#fade1").fadeOut(5000);
					$scope.registered = 2;
				}, 1000);
			} else {
				$scope.registered = 0;
				setTimeout(function () {
					$("#fade2").fadeOut(5000);
					$scope.registered = 2;
				}, 1000);
			}	
		}, function(response, status){
			console.log(response.data);
		});
	};

}]);

app.service("UserService", ['APIService', function(APIService){

	
}]);