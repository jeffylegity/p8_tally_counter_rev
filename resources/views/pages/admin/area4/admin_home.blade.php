@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea4() == '[]')
               <div class="col-xl-12">
                  <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
                     No data, please generate
                  </div>
               </div>
               <div class="col-xl-12">
                  <a href="{{route('admin.generate_record.area4')}}" class="btn btn-primary">
                     <i class="mdi mdi-file-document-box"></i>
                     Generate Data
                  </a>
               </div>
            @else
               @foreach ($slicing_data as $data)
                  <div class="row">
                  @if ($data->data_stored == 0)
                  <div class="col-xl-12">
                     <div class="card-box">
                        <div>
                           <a href="{{route('admin.save_record.area4',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a>
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">

                           <form action="{{route('admin.update_plan.area4')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl193_target" value="{{$data->sl193_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-193</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl194_target" value="{{$data->sl194_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-194</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl195_target" value="{{$data->sl195_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-195</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl196_target" value="{{$data->sl196_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-196</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl197_target" value="{{$data->sl197_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-197</b></h4>
                                    </center>
                                 </div> 
                              </div>
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2"></div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(6)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl198_target" value="{{$data->sl198_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-198</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(7)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl199_target" value="{{$data->sl199_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-199</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(8)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl200_target" value="{{$data->sl200_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-200</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(9)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="bc7_target" value="{{$data->bc7_target}}">
                                    </center>
                                    <center>
                                       <h4><b>BC-7</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(10)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="csl1_target" value="{{$data->csl1_target}}">
                                    </center>
                                    <center>
                                       <h4><b>CSL-1</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-pencil"></i> Update</button>
                                 </div>
                              </div>
                           </form><br>
                           <div class="row">
                              @if ($data->shift == 'F')
                                 <div class="col-lg-12">
                                    <div class="card-header" style="background-color:#ff5b5b;color:white;">
                                       <center>
                                          <h4 style="font-size:200%">
                                             <b>
                                                (Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @else
                                 <div class="col-lg-12">
                                    <div class="card-header" style="background-color:#034ea2;color:white;">
                                       <center>
                                          <h4 style="font-size:200%">
                                             <b>
                                                (Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @endif
                                 {{AsyncWidget::SlicingAdminDataArea4()}}
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
                  @else
                  <div class="col-xl-12">
                     <div class="alert alert-danger" style="background-color:#dc3545;color:white;">
                        No data, please generate
                     </div>
                  </div>
                  <div class="col-xl-12">
                     <a href="{{route('admin.generate_record.area4')}}" class="btn btn-primary">
                        <i class="mdi mdi-file-document-box"></i>
                        Generate Data
                     </a>
                  </div>
                  @endif
                  </div>
               @endforeach
            @endif
      </div>
   </div>
@endsection

