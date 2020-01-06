@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
               <div class="card-box">
                  <h4 class="header-title mt-0 m-b-30">Models</h4>
                  <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr style="text-align:center;">
                          <th>Model ID</th>
                          <th>Model Name</th>
                          <th>Assigned to</th>
                          <th>Updated at</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($models as $model)
                             <tr style="text-align:center">
                                <td>000{{$model->id}}</td>
                                <td>{{$model->model_name}}</td>
                                <td>{{Carbon\Carbon::parse($model->updated_at)->format('M d Y - H:i:A')}}</td>
                                <td>
                                  <a href="" class="btn btn-success"><i class="mdi mdi-pencil"></i> Edit</a>
                                </td>
                             </tr>                            
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