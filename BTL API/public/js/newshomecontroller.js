var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);
app.controller('mycontroller', function($scope, $http) {
    $http({
        Method: "GET",
        url: "https://localhost:44301/api/TinTuc/getall/"
    }).success(function(response) {
        $scope.news = response;
    });
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/phanhois/"
    }).success(function(response) {
        $scope.phanhoi = response;
    });
    $scope.currentPage = 1;
                $scope.pageChangeHandler = function(num) {
                        $scope.currentPage = num;
                    };
                $scope.pageSize = 15;
    $scope.NumreadUp = function(id) {
        $scope.id = id;
        var url ="https://localhost:44301/api/TinTuc/"+ $scope.id;
        $http({
            method: "PUT",
            url: url,
            data: $scope.tt,
            'content-Type': 'application/json'

        }).then(function(res) {
            tt.numread=tt.numread+1;
            $scope.tt == res.data;
        });
    }
});