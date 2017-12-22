app.controller('MainController', ['$scope', 'MainService', function ($scope, MainService) {
	$scope.document = {};
	$scope.documentList = [];
	$scope.editedDocument = {};
	$scope.page = "dashboard";
	$scope.unwantedDocument = {};
	$scope.docInfo = {};
	$scope.formModel = {};
	$scope.user = "";

	$scope.initialize = function () {
		$scope.getUserDashboard();
		$scope.getUser();
	};

	$scope.getUserDashboard = function () {
		MainService.getUserDocuments(function (response) {
			$scope.documentList = response.data;
		}, function (response, status) {
			console.log("error in fetching user documents");
		});
	};

	$scope.getUser = function () {
		MainService.getUser(function (response) {
			$scope.user = response.data;
		}, function (response) {

		});
	};

	$scope.openDocument = function (document) {
		$scope.page = "view";
		$scope.document = document;
		MainService.openDocument(document.path, function (response) {
			$scope.document.body = response.data.body.replace(/"/g, "");
		}, function (response) {
			console.log("error in opening document");
		});
	};

	$scope.updateDocument = function () {
		var body = $('.summernote2').summernote('code');
		$scope.editedDocument.body = body;
		MainService.updateDocument($scope.editedDocument, function (response) {
			$('#updateModal').modal('show');
			console.log(response.data);
			$scope.getUserDashboard();
			$scope.page = "dashboard";
			// window.location.href = "/";
		}, function (response) {
			console.log("error in updating document");
			console.log(response.data);
		});
	};

	$scope.deleteDialog = function (document) {
		$scope.unwantedDocument = document;
		$('#deleteModal').modal('show');
	};

	$scope.deleteDocument = function () {
		$('#deleteModal').modal('hide');
		MainService.deleteDocument($scope.unwantedDocument, function (response) {
			$scope.getUserDashboard();
			$scope.page = "dashboard";
			console.log("document was successfully deleted");
			console.log(response.data);
		}, function (response) {
			console.log("error in deleting document");
			console.log(response.data);
		});
	};

	$scope.setViewers = function () {
		// console.log($scope.formModel.viewers);
		MainService.setViewers($scope.docInfo, $scope.formModel.viewers, function (response) {
			$('#myModal4').modal('hide');
			console.log("viewers has successfully been set");
			$scope.getUserDashboard();
            $scope.page = "dashboard";
		}, function (response) {
			console.log("error in setting viewers");
		});
	};

	$scope.editPage = function (document) {
		$scope.page = "edit";
		$scope.editedDocument = document;
		MainService.openDocument(document.path, function (response) {
			$scope.editedDocument.body = response.data.body.replace(/"/g, "");
			$scope.document.body = response.data.body.replace(/"/g, "");
			setTimeout(function () {
				initSummernote();
			}, 200);

		}, function (response) {
			console.log("error in opening document");
		});
	};

	$scope.documentsPage = function () {
		$scope.page = "dashboard";
	};

	$scope.showDocInfo = function (document) {
		$scope.page = "docinfo";
		$scope.docInfo = document;
		$scope.formModel.viewers = document.viewers;
	};

	$scope.discardEdit = function () {
		$('#discardModal').modal('hide');
		$scope.page = "view";
		$scope.editedDocument = {};
	};

	var initSummernote = function () {
		$('.summernote2').summernote();
		$('.note-editable').height(100);
	};
}]);

app.service('MainService', ['APIService', function (APIService) {

	this.getUser = function (successHandler, errorHandler) {
		APIService.get('/api/user', successHandler, errorHandler);
	};

	this.getUserDocuments = function (successHandler, errorHandler) {
		APIService.get('/api/documents', successHandler, errorHandler);
	};

	this.openDocument = function (path, successHandler, errorHandler) {
		APIService.get('/api/document/open?path=' + path, successHandler, errorHandler);
	};

	this.updateDocument = function (document, successHandler, errorHandler) {
		APIService.post('/api/document/update', document, successHandler, errorHandler);
	};

	this.deleteDocument = function (document, successHandler, errorHandler) {
		APIService.post('/api/document/delete', document, successHandler, errorHandler);
	};

	this.setViewers = function (doc, viewers, successHandler, errorHandler) {
		APIService.post('/api/document/set?updatedViewers=' + viewers, doc, successHandler, errorHandler);
	};
}]);