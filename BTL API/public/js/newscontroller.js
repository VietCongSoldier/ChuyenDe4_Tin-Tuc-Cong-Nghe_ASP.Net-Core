var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http)
                {
                $scope.q="";
                var api = 'https://localhost:44301/api/TinTuc/getall/';
                var api1 = 'https://localhost:44301/api/LoaiTinTuc/getall/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
                    }).then(function(res){
                        $scope.news = res.data;

                    });
                    $http({
                        method:'GET',
                        url:api1
                    }).then(function(res){
                        $scope.loaitin = res.data;
                    });
                }
                loadData();
  
                $scope.currentPage = 1;
                $scope.pageChangeHandler = function(num) {
                        $scope.currentPage = num;
                    };
                $scope.pageSize = 10;
                
                $scope.showModal = function(id) {
                    $scope.id = id;
                    if (id == 0) {
                        $scope.modaltitle = "Thêm news mới";
                        if ($scope.tt) {
                            delete $scope.tt;
                        }
                    } else {
                        $scope.modaltitle = "Sửa thông tin news";
                        $http({
                            method: "GET",
                            url: "https://localhost:44301/api/TinTuc/" + id
                        }).then(function(res) {
                            $scope.tt = res.data[0];
                        });
                    }
                    $('#modelId').modal('show');
                }

                $scope.saveData = function() {
                    var m = $scope.id == 0 ? "POST" : "POST";
                    var url = $scope.id == 0 ? "https://localhost:44301/api/TinTuc/add" : "https://localhost:44301/api/TinTuc/update";
                    $http({
                        method: m,
                        url: url,
                        data: $scope.tt,
                        'content-Type': 'application/json'
                    }).then(function(res) {
                        $scope.tt == res.data;
                    });
                    $('#modelId').modal('hide');
                }

                $scope.deleteClick = function(id) {
                    var hoi = confirm('Bạn có muốn xóa news này không?');
                    if (hoi) {
                        $http({
                            method: "DELETE",
                            url: "https://localhost:44301/api/TinTuc/delete?id=" + id
                        }).then(function(res) {
                            $scope.message = res.data;
                            $scope.reloadData();
                        });
                    }
                    window.location.reload();
                }
                      
});