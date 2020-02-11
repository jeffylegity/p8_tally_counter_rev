@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
               <div class="card-box">
                  <h4 class="header-title mt-0 m-b-30">Tally Input Record(s) - Area 4</h4>
                  <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr style="text-align:center;">
                          <th>Input ID</th>
                          <th>Date Generated</th>
                          <th>Shift</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($records as $data)
                             <tr style="text-align:center">
                                <td>000{{$data->id}}</td>
                                <td>{{Carbon\Carbon::parse($data->date_generated)->format('H:i:A - M d Y')}}</td>
                                <td>{{$data->shift}}</td>
                                <td>
                                  <a href="{{route('admin.logs.area4',$data->id)}}" class="btn btn-primary"><i class="mdi mdi-eye"></i> Logs</a>
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