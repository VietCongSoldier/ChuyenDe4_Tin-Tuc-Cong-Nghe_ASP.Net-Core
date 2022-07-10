@extends('_admin_layout')
@section('content')
<style>
    #abuttonv a {
            background-color: #fff;
            border: 1px solid #ddd;
            box-sizing: border-box;
            color: FFC800;
            cursor: pointer;
            display: inline-block;
            font-family: din-round,sans-serif;
            font-size: 15px;
            font-weight: 700;
            padding: 10px 12px;
            text-align: center;
            width: 100%;
            }
</style>
<p style="padding: 5px; font-size:30px;"> <i class="fa fa-table" style="margin:0 10px;"></i>  Quản lý Account</p>
<div style="display:flex; justify-content: space-between;">
    <p><button class="btn btn-success" ng-click="showModal(0)" style="width: 120px; margin-left:50px;"> Thêm</button></p>  
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                    <th>TT</th>
                    <th>username</th>
                    <th>password </th>
                    <th>memberID</th>
                    <th>decentralization</th>
                    <th>registrationDate</th>
                    <th>statusMem</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate = "dt in account |filter: q| itemsPerPage: pageSize" current-page="currentPage">
                        <td>@{{$index+1+(currentPage-1)*pageSize}}</td>
                        <td>@{{dt.username}}</td>
                        <td>@{{dt.password}}</td>
                        <td>@{{dt.memberID}}</td>
                        <td>@{{dt.decentralization}}</td>
                        <td>@{{dt.registrationDate}}</td>
                        <td>@{{dt.statusMem}}</td>                 
                        <td><button class="btn btn-info" ng-click="showModal(dt.username)"><i class="fas fa-edit"></i></button></td>
                        <td><button class="btn btn-danger" ng-click="deleteClick(dt.username)"><i class="fas fa-trash-alt"></i></button></td>
                    </tr> 
                </tbody>
            </table>
            <dir-pagination-controls max-size='5' id='abuttonv' on-page-change="pageChangeHandler(newPageNumber)"></dir-pagination-controls>
        </div>
    </div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title">@{{modalTitle}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="">id: </label>
                                    <div><input type="text" ng-model="dt.id" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">ten dt: </label>
                                    <div><input type="text" ng-model="dt.ten_dt" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">diachi_dt: </label>
                                    <div><input type="text" ng-model="dt.diachi_dt" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">email: </label>
                                    <div><input type="text" ng-model="dt.email" class="form-control"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">sdt: </label>
                                    <div><input type="text" ng-model="dt.sdt" class="form-control"></div>
                                </div>
                            </div>
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" ng-click="saveData()">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
        });
    </script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/accountcontroller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
    </body>
</html>
@stop