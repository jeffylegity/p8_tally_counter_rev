@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
               <a href="{{route('admin.home')}}" class="btn" style="background-color:#034ea2;color:white;">
                  <i class="mdi mdi-arrow-left"></i>
                  prev
               </a><br><br>
               <div class="card-box">
                  <h4 class="header-title mt-0 m-b-30">
                     Area 1 - Models
                  </h4>
                  <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr style="text-align:center;">
                          <th>Machine no.</th>
                          <th>Model Name</th>
                          <th>Updated at</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($models as $model)
                             <tr style="text-align:center">
                                <td>{{$model->machine_no}}</td>
                                <td>{{$model->model_name}}</td>
                                <td>{{Carbon\Carbon::parse($model->updated_at)->format('M d Y - H:i:A')}}</td>
                                <td>
                                 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateForm{{$model->id}}">
                                    <i class="mdi mdi-pencil"></i> Edit
                                 </button>
                                </td>
                             </tr>    
                             <div class="modal fade" id="updateForm{{$model->id}}">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Edit <b>{{$model->machine_no}}</b> Model</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('admin.update_model_name.area1')}}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                       <div class="alert alert-danger">
                                          <p>Note: Input field cannot be empty, Type "NA" if model is not applicable.</p>
                                       </div>
                                       <label>Model Name</label>
                                      <input type="hidden" name="id" value="{{$model->id}}">
                                      <input type="text" class="form-control" name="model_name" value="{{$model->model_name}}">
                                    </div>
                                    <div class="modal-footer">
                                       <button type="submit" class="btn btn-success"><i class="mdi mdi-check"></i> Save</button>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>                        
                          @endforeach
                      </tbody>
                    </table>
                  </div>
               </div>
            </div>
          </div>
      </div>
   </div>
@endsection