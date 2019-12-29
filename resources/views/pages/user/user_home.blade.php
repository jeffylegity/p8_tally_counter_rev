@extends('layouts.slicing-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
               <div class="alert alert-danger" style="background-color:#01939e;color:white;">
                  <h5 style="text-align:center;"><b>1st Machining Slicing</b></h5>
               </div>
               <div class="card-box">
                  @if ($last_record == true)
                     <form>
                        @foreach ($slicing_data as $data)
                        <div class="form-group">
                           <hr style="border:1px solid black;">
                           <div class="row">
                              <div class="col-lg-2">
                                 <h3><b>Plan</b></h3>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL166ModelName()}}</b></h4>
                                    <h1><b>{{$data->sl1_target}}</b></h1>
                                    <h4><b>SL-166</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL167ModelName()}}</b></h4>
                                    <h1><b>{{$data->sl2_target}}</b></h1>
                                    <h4><b>SL-167</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL168ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl3_target}}</b></h2>
                                    <h4><b>SL-168</b></h4>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL169ModelName()}}</b></h4>
                                    <h1><b>{{$data->sl4_target}}</b></h1>
                                    <h4><b>SL-169</b></h4>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL170ModelName()}}</b></h4>
                                    <h1><b>{{$data->sl5_target}}</b></h1>
                                    <h4><b>SL-169</b></h4>
                                 </center>
                              </div> 
                           </div><br>
                           <hr style="border:1px solid black;">
                           <div class="row">
                              <div class="col-lg-2">
                                 <h3><b>Actual</b></h3>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL166ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl1_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl1_actual')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl1_actual')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-166</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL167ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl2_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl2_actual')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl2_actual')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-167</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL168ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl3_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl3_actual')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl3_actual')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-168</b></h4>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL169ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl4_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl4_actual')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl4_actual')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-169</b></h4>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL170ModelName()}}</b></h4>
                                    <h2><b>{{$data->sl5_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl5_actual')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl5_actual')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-170</b></h4>
                                 </center>
                              </div> 
                           </div><br>
                           <hr style="border: 1px solid black;">
                           <div class="row">
                              <div class="col-lg-2">
                                 <h3><b>Test Block</b></h3>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-166</b></h4>
                                    <h2><b>{{$data->sl1_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl1_test_block')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl1_test_block')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-167</b></h4>
                                    <h2><b>{{$data->sl2_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl2_test_block')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl2_test_block')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-168</b></h4>
                                    <h2><b>{{$data->sl3_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl3_test_block')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl3_test_block')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-169</b></h4>
                                    <h2><b>{{$data->sl4_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl4_test_block')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl4_test_block')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-170</b></h4>
                                    <h2><b>{{$data->sl5_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('user.dec_data','sl5_test_block')}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('user.inc_data','sl5_test_block')}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div> 
                           </div><br>
                        </div>
                        @endforeach
                     </form>
                     @else
                        <a href="{{route('user.generate_record')}}" class="btn btn-danger">Generate Record</a>
                     @endif
               </div>
            </div>
          </div>
      </div>
   </div>
@endsection