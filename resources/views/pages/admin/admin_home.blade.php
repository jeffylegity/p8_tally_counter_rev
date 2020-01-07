@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            @if ($last_record == true)
            <div class="col-xl-12">
               <div class="card-box">
                  @foreach ($slicing_data as $data)
                  <div>
                     <a href="{{route('admin.save_record',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a>
                     <a href="{{route('cache.clear')}}" class="btn btn-primary"><i class="mdi mdi-broom"></i> Clear Cache</a>
                  </div>
                  <div class="form-group">
                     <hr style="border:1px solid black;">
                     <form action="{{route('admin.update_plan')}}" method="POST">
                        @csrf
                        <input type="hidden" name="data_id" value="{{$data->id}}">
                        <div class="row">
                           <div class="col-lg-2">
                              <h3><b>Plan</b></h3>
                           </div>
                           <div class="col-lg-2">
                              <center>
                                 <h4><b>{{getSL166ModelName()}}</b></h4>
                                 <input type="text" class="form-control" style="text-align:center;" name="sl1_target" value="{{$data->sl1_target}}">
                              </center>
                              <center>
                                 <h4><b>SL-166</b></h4>
                              </center>
                           </div>
                           <div class="col-lg-2">
                              <center>
                                 <h4><b>{{getSL166ModelName()}}</b></h4>
                                 <input type="text" class="form-control" style="text-align:center;" name="sl2_target" value="{{$data->sl2_target}}">
                              </center>
                              <center>
                                 <h4><b>SL-167</b></h4>
                              </center>
                           </div>
                           <div class="col-lg-2">
                              <center>
                                 <h4><b>{{getSL166ModelName()}}</b></h4>
                                 <input type="text" class="form-control" style="text-align:center;" name="sl3_target" value="{{$data->sl3_target}}">
                              </center>
                              <center>
                                 <h4><b>SL-168</b></h4>
                              </center>
                           </div>  
                           <div class="col-lg-2">
                              <center>
                                 <h4><b>{{getSL166ModelName()}}</b></h4>
                                 <input type="text" class="form-control" style="text-align:center;" name="sl4_target" value="{{$data->sl4_target}}">
                              </center>
                              <center>
                                 <h4><b>SL-169</b></h4>
                              </center>
                           </div> 
                           <div class="col-lg-2">
                              <center>
                                 <h4><b>{{getSL166ModelName()}}</b></h4>
                                 <input type="text" class="form-control" style="text-align:center;" name="sl5_target" value="{{$data->sl5_target}}">
                              </center>
                              <center>
                                 <h4><b>SL-170</b></h4>
                              </center>
                           </div> 
                           <div class="col-lg-12" style="display:flex;align-items: center;justify-content:center;">
                              <button type="submit" class="btn btn-success"><i class="mdi mdi-pencil"></i> Update</button>
                           </div>
                        </div>
                     </form><br>
                     <hr style="border:1px solid black;">
                        {{AsyncWidget::SlicingActual()}}
                     <br>
                     <hr style="border:1px solid black;">
                        {{AsyncWidget::SlicingTestBlock()}}
                     <br>
                  </div>
                  @endforeach

               </div>
            </div>
            @else
            <div class="col-xl-12">
               <div class="alert alert-danger" style="background-color:#dc3545;color:white;">
                  No data, please generate
               </div>
            </div>
            <div class="col-xl-12">
               <a href="{{route('admin.generate_record')}}" class="btn btn-primary">
                  <i class="mdi mdi-file-document-box"></i>
                  Generate Data
               </a>
            </div>
           @endif
          </div>
      </div>
   </div>
@endsection