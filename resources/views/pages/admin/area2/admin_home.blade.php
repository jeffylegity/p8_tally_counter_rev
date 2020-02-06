@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea2() == '[]')
               <div class="col-xl-12">
                  <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
                     No data, please generate
                  </div>
               </div>
               <div class="col-xl-12">
                  <a href="{{route('admin.generate_record.area2')}}" class="btn btn-primary">
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
                           <a href="{{route('admin.save_record.area2',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a>
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">

                           <form action="{{route('admin.update_plan.area2')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL156ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl156_target" value="{{$data->sl156_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-156</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL161ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl161_target" value="{{$data->sl161_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-161</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL162ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl162_target" value="{{$data->sl162_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-162</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL163ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl163_target" value="{{$data->sl163_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-163</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL164ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl164_target" value="{{$data->sl164_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-164</b></h4>
                                    </center>
                                 </div> 
                              </div>
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2"></div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL171ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl171_target" value="{{$data->sl171_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-171</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL172ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl172_target" value="{{$data->sl172_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-172</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL179ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl179_target" value="{{$data->sl179_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-179</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL180ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl180_target" value="{{$data->sl180_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-180</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSL181ModelName()}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl181_target" value="{{$data->sl181_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-181</b></h4>
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
                                 {{AsyncWidget::SlicingAdminDataArea2()}}
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
                     <a href="{{route('admin.generate_record.area2')}}" class="btn btn-primary">
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

