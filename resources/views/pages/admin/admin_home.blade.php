@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea1() == '[]')
               <div class="col-xl-12">
                  <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
                     No data, please generate
                  </div>
               </div>
               <div class="col-xl-12">
                  <a href="{{route('admin.generate_record.area1')}}" class="btn btn-primary">
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
                           <a href="{{route('admin.save_record.area1',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a>
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">
                           <hr style="border:1px solid black;">
                           <form action="{{route('admin.update_plan.area1')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl166_target" value="{{$data->sl166_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-166</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl167_target" value="{{$data->sl167_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-167</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl168_target" value="{{$data->sl168_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-168</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl169_target" value="{{$data->sl169_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-169</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl170_target" value="{{$data->sl170_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-170</b></h4>
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
                                                (Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
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
                                                (Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @endif
                                 {{AsyncWidget::SlicingAdminDataArea1()}}
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
                     <a href="{{route('admin.generate_record')}}" class="btn btn-primary">
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

