app.controller('DocumentController', ['$scope', 'DocumentService', function ($scope, DocumentService) {
    $scope.document = {};
    $scope.documentList = [];
    $scope.editedDocument = {};
    $scope.page = "dashboard";
    $scope.unwantedDocument = {};
    $scope.docInfo = {};
    $scope.formModel = {};
    $scope.authors = {};

    $scope.initialize = function () {
        $scope.getTags();
        $scope.getAuthors();
        $('.summernote').summernote();
        $('.note-editable').height(110);
    };

    $scope.saveDocument = function () {
        var body = $('.summernote').summernote('code');
        $scope.document.body = body;
        !$scope.document.tags ? $scope.document.tags = $('.chosen-select').val() : $scope.document.tags;
        DocumentService.saveDocument($scope.document, function (response) {
            $('#createModal').modal('show');
            console.log(response);
            // window.location.href = "/mydocuments";
        }, function (response, status) {
            console.log("error in saving document");
            console.log(response);
        });
    };

    $scope.getUserDocuments = function () {
        DocumentService.getUserDocuments(function (response) {
            $scope.documentList = response.data;
        }, function (response, status) {
            console.log("error in fetching user documents");
        });
    };

    $scope.getTags = function () {
        DocumentService.getTags(function (response) {
            $scope.tags = response.data;
        }, function (response) {
            console.log("error in fetching tags");
            console.log(response.data);
        });
    };

    $scope.getAuthors = function () {
        DocumentService.getAuthors(function (response) {
            $scope.authors = response.data;
            setTimeout(function () {
                $('.chosen-select').chosen({ width: "100%" });
            }, 100);
        }, function (response) {
            console.log("error in getting authors");
        });
    };

    $scope.openDocument = function (document) {
        $scope.page = "view";
        $scope.document = document;
        DocumentService.openDocument(document.path, function (response) {
            $scope.document.body = response.data.body.replace(/"/g, "");
        }, function (response) {
            console.log("error in opening document");
        });
    };

    $scope.updateDocument = function () {
        var body = $('.summernote2').summernote('code');
        $scope.editedDocument.body = body;
        DocumentService.updateDocument($scope.editedDocument, function (response) {
            $('#updateModal').modal('show');
            console.log(response.data);
            $scope.getUserDocuments();
            $scope.page = "dashboard";
            // window.location.href = "/mydocuments";
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
        DocumentService.deleteDocument($scope.unwantedDocument, function (response) {
            $scope.getUserDocuments();
            console.log("document was successfully deleted");
            console.log(response.data);
        }, function (response) {
            console.log("error in deleting document");
            console.log(response.data);
        });
    };

    $scope.setViewers = function () {
        // console.log($scope.formModel.viewers);
        DocumentService.setViewers($scope.docInfo, $scope.formModel.viewers, function (response) {
            $('#myModal4').modal('hide');
            console.log("viewers has successfully been set");
            $scope.getUserDocuments();
            $scope.page = "dashboard";
        }, function (response) {
            console.log("error in setting viewers");
        });
    };

    $scope.editPage = function (document) {
        $scope.page = "edit";
        $scope.editedDocument = document;
        DocumentService.openDocument(document.path, function (response) {
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

app.service('DocumentService', ['APIService', function (APIService) {
    this.saveDocument = function (document, successHandler, errorHandler) {
        APIService.post('/api/document/create', document, successHandler, errorHandler);
    };

    this.getUserDocuments = function (successHandler, errorHandler) {
        APIService.get('/api/documents/user', successHandler, errorHandler);
    };

    this.getTags = function (successHandler, errorHandler) {
        APIService.get('/api/document/tags', successHandler, errorHandler);
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

    this.getAuthors = function (successHandler, errorHandler) {
        APIService.get('/api/user/authors', successHandler, errorHandler);
    };
}]);