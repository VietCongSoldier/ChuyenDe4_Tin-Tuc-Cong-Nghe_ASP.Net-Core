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
<p style="padding: 5px; font-size:30px;"> <i class="fa fa-table" style="margin:0 10px;"></i>  Quản lý phản hồi</p>
<div style="display:flex; justify-content: space-between;">
    <p><button class="btn btn-success" ng-click="showModal(0)" style="width: 120px;  margin-left:50px;"> Thêm</button></p>  
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                    <th>TT</th>
                <th>FeedbackID</th>
                <th>NewsID</th>
                <th>Email</th>
                <th>NameReader</th>
                <th>Contents</th>
                <th>Status</th>
                <th>DateComment</th>
                <th>IsDeleted</th>
                <th>Edit</th>
                <th>Xoa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate = "ph in phanhois |filter: q| itemsPerPage: pageSize" current-page="currentPage">
                    <td>@{{ $index+1 }}</td>
                <td>@{{ ph.FeedbackID }}</td>
                <td>@{{ ph.NewsID }}</td>
                <td>@{{ ph.Email }}</td>
                <td>@{{ ph.NameReader }}</td>
                <td>@{{ ph.Contents }}</td>
                <td>@{{ ph.Status }}</td>
                <td>@{{ ph.DateComment }}</td>
                <td>@{{ ph.IsDeleted }}</td>

                        <td><button class="btn btn-info" ng-click="showModal(ph.NewsID)"><i class="fas fa-edit"></i></button></td>
                        <td><button class="btn btn-danger" ng-click="deleteClick(ph.NewsID)"><i class="fas fa-trash-alt"></i></button></td>
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
                                <div class="form-group row">

                                <label for="name" class="col-sm-3 col-form-label">FeedbackID</label>
                            <div class="col-sm-9">

                              <input type="text" class="form-control" id="name" ng-model="ph.FeedbackID">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">NewsID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ph.NewsID">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">id_tk</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ph.id_tk">
                            </div>
                          </div><div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">id_sp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ph.id_sp">
                            </div>
                          </div><div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">note</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" ng-model="ph.note">
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
    <script src="/js/phanhoicontroller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
@stop