var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http)
                {
                $scope.q="";
                var api = 'https://localhost:44301/api/Feedback/getall/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
                    }).then(function(res){
                        $scope.phanhois = res.data;
                        
                    });
                }
                loadData();

                $scope.currentPage = 1;
                $scope.pageChangeHaphler = function(num) {
                        $scope.currentPage = num;
                    };
                $scope.pageSize = 10;
                
                $scope.showModal = function(id) {
                    $scope.id = id;
                    if (id == 0) {
                        $scope.modaltitle = "Thêm mới";
                        if ($scope.ph) {
                            delete $scope.ph;
                        }
                    } else {
                        $scope.modaltitle = "Sửa thông tin";
                        $http({
                            method: "GET",
                            url: api + id
                        }).then(function(res) {
                            $scope.ph = res.data;
                        });
                    }
                    $('#modelId').modal('show');
                }

                $scope.saveData = function() {
                    var m = $scope.id == 0 ? "POST" : "PUT";
                    var url = $scope.id == 0 ? api : api + $scope.id;
                    $http({
                        method: m,
                        url: url,
                        data: $scope.ph,
                        'content-Type': 'application/json'

                    }).then(function(res) {
                        $scope.ph == res.data;
                    });
                    $('#modelId').modal('hide');
                    wiphow.location.reload();
                }


                $scope.deleteClick = function(id) {
                    var hoi = confirm('Bạn có muốn xóa không?');
                    if (hoi) {
                        $http({
                            method: "DELETE",
                            url: api + id
                        }).then(function(res) {
                            $scope.message = res.data;
                            $scope.reloadData();
                        });
                    }
                    wiphow.location.reload();
                }

});