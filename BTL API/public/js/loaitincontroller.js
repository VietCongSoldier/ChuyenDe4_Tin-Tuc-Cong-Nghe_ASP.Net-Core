var app = angular.module('myapp',['angularUtils.directives.dirPagination']);
                app.controller('mycontroller',function($scope,$http)
                {
                $scope.q="";
                var api = 'https://localhost:44301/api/LoaiTinTuc/getall/';
                var loadData = function(){
                    $http({
                        method:'GET',
                        url:api
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
                        $scope.modaltitle = "Thêm mới";
                        if ($scope.cate) {
                            delete $scope.cate;
                        }
                    } else {
                        $scope.modaltitle = "Sửa thông tin";
                        $http({
                            method: "GET",
                            url: "https://localhost:44301/api/LoaiTinTuc/" + id
                        }).then(function(res) {
                            $scope.cate = res.data[0];
                        });
                    }
                    $('#modelId').modal('show');
                }

                $scope.saveData = function() {
                    var m = $scope.id == 0 ? "POST" : "POST";
                    var url = $scope.id == 0 ? "https://localhost:44301/api/LoaiTinTuc/add" : "https://localhost:44301/api/LoaiTinTuc/update";
                    $http({
                        method: m,
                        url: url,
                        data: $scope.cate,
                        'content-Type': 'application/json'

                    }).then(function(res) {
                        $scope.cate == res.data;
                    });
                    $('#modelId').modal('hide');
                    window.location.reload();
                }


                $scope.deleteClick = function(id) {
                    var hoi = confirm('Bạn có muốn xóa không?');
                    if (hoi) {
                        $http({
                            method: "DELETE",
                            url: "https://localhost:44301/api/LoaiTinTuc/delete?id=" + id
                        }).then(function(res) {
                            $scope.message = res.data;
                            $scope.reloadData();
                        });
                    }
                    window.location.reload();
                }

});