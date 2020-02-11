@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea3() == '[]')
               <div class="col-xl-12">
                  <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
                     No data, please generate
                  </div>
               </div>
               <div class="col-xl-12">
                  <a href="{{route('admin.generate_record.area3')}}" class="btn btn-primary">
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
                           <a href="{{route('admin.save_record.area3',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a>
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">

                           <form action="{{route('admin.update_plan.area3')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl182_target" value="{{$data->sl182_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-182</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl183_target" value="{{$data->sl183_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-183</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl185_target" value="{{$data->sl185_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-185</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl186_target" value="{{$data->sl186_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-186</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="lap20_target" value="{{$data->lap20_target}}">
                                    </center>
                                    <center>
                                       <h4><b>LAP-20</b></h4>
                                    </center>
                                 </div> 
                              </div>
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2"></div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(6)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="lap23_target" value="{{$data->lap23_target}}">
                                    </center>
                                    <center>
                                       <h4><b>LAP-23</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(7)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="lap27_target" value="{{$data->lap27_target}}">
                                    </center>
                                    <center>
                                       <h4><b>LAP-27</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(8)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="bc8_target" value="{{$data->bc8_target}}">
                                    </center>
                                    <center>
                                       <h4><b>BC-8</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(9)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="bc9_target" value="{{$data->bc9_target}}">
                                    </center>
                                    <center>
                                       <h4><b>BC-9</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(10)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="bc12_target" value="{{$data->bc12_target}}">
                                    </center>
                                    <center>
                                       <h4><b>BC-12</b></h4>
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
                                 {{AsyncWidget::SlicingAdminDataArea3()}}
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
                     <a href="{{route('admin.generate_record.area3')}}" class="btn btn-primary">
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

