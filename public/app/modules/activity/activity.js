app.controller('ActivityController', ['$scope', 'ActivityService', function ($scope, ActivityService) {

    $scope.activities = [];
    $scope.page = 'activities';

    $scope.initialize = function () {
        $scope.getUserActivityLog();
    };

    $scope.getUserActivityLog = function () {
        ActivityService.getUserActivityLog(function (response) {
            $scope.activities = response.data;
        }, function (response) {
            console.log("error in fetching user activities");
            console.log(response.data);
        });
    };

    $scope.openDocument = function (activity) {
		$scope.page = "view";
        $scope.document = activity;
        $scope.document.name = activity.documentName;
		ActivityService.openDocument(activity.documentPath, function (response) {
			$scope.document.body = response.data.body.replace(/"/g, "");
		}, function (response) {
			console.log("error in opening document");
		});
    };
    
    $scope.deleteDialog = function (activity) {
        $scope.unwantedDocument = {
            "name": activity.documentName,
            "path": activity.documentPath
        };
		$('#deleteModal').modal('show');
	};

	$scope.deleteDocument = function () {
		$('#deleteModal').modal('hide');
		ActivityService.deleteDocument($scope.unwantedDocument, function (response) {
			$scope.getUserActivityLog();
			console.log("document was successfully deleted");
			console.log(response.data);
		}, function (response) {
			console.log("error in deleting document");
			console.log(response.data);
		});
	};

}]);

app.service('ActivityService', ['APIService', function (APIService) {

    this.getUserActivityLog = function (successHandler, errorHandler) {
        APIService.get('/api/activity', successHandler, errorHandler);
    };

    this.openDocument = function (path, successHandler, errorHandler) {
		APIService.get('/api/document/open?path=' + path, successHandler, errorHandler);
    };
    
    this.deleteDocument = function (document, successHandler, errorHandler) {
		APIService.post('/api/document/delete', document, successHandler, errorHandler);
	};
}]);