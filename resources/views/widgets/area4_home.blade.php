@if (getLatestArea4() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P8 1st Machining - Area 4</h1>
   </div>
</div>
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
      Data not generated, Please contact your planner
   </div>
</div>
<div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
   <a class="btn btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-arrow-left-bold"></i> Logout</a>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
   </form>&ensp;&ensp;&ensp;
   <button class="btn btn-success" onClick="window.location.reload();">
   <i class="mdi mdi-refresh"></i>
      Refresh Page
   </button>
</div>
@else
   <div class="row">
      <div class="col-xl-12">
         @foreach ($slicing_data as $data)
            @if ($data->shift == 'F')
            <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;text-align:center;">
               <h1>(Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @endif
         <div class="card-box" style="margin-top:-20px;">
            <form>
               <div class="form-group">
                  <div class="row">
                     <div class="col-lg-1">
                        <h3><b>Plan</b></h3>
                     </div>
                     <div class="col-lg-1">
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(1)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl193_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-193</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(2)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl194_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-194</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(3)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl195_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-195</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(4)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl196_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-196</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(5)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl197_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-197</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(6)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl198_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-198</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(7)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl199_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-199</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(8)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl200_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-200</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(9)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->bc7_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>BC-7</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea4(10)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->csl1_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>CSL-1</b></h5>
                        </center>
                     </div>    
                  </div><br>
                  <hr style="border:1px solid black;">
                  <div class="row">
                     <div class="col-lg-1">  
                        <h3><b>Actual</b></h3>
                     </div>
                     <div class="col-lg-1">
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl193_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl193_actual','machine_no'=>'SL-193','type'=>'actual','area'=>'4','model'=>getSlModelArea4(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl193_actual','machine_no'=>'SL-193','type'=>'actual','area'=>'4','model'=>getSlModelArea4(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-193</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl194_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl194_actual','machine_no'=>'SL-194','type'=>'actual','area'=>'4','model'=>getSlModelArea4(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl194_actual','machine_no'=>'SL-194','type'=>'actual','area'=>'4','model'=>getSlModelArea4(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-194</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl195_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl195_actual','machine_no'=>'SL-195','type'=>'actual','area'=>'4','model'=>getSlModelArea4(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl195_actual','machine_no'=>'SL-195','type'=>'actual','area'=>'4','model'=>getSlModelArea4(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-195</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl196_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl196_actual','machine_no'=>'SL-196','type'=>'actual','area'=>'4','model'=>getSlModelArea4(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl196_actual','machine_no'=>'SL-196','type'=>'actual','area'=>'4','model'=>getSlModelArea4(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-196</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl197_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl197_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'4','model'=>getSlModelArea4(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl197_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'4','model'=>getSlModelArea4(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-164</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl198_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl198_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'4','model'=>getSlModelArea4(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl198_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'4','model'=>getSlModelArea4(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-171</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl199_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl199_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'4','model'=>getSlModelArea4(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl199_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'4','model'=>getSlModelArea4(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-172</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl200_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl200_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'4','model'=>getSlModelArea4(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl200_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'4','model'=>getSlModelArea4(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-179</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc7_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc7_actual','machine_no'=>'Sbc7','type'=>'actual','area'=>'4','model'=>getSlModelArea4(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc7_actual','machine_no'=>'Sbc7','type'=>'actual','area'=>'4','model'=>getSlModelArea4(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>Sbc7</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->csl1_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'csl1_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'4','model'=>getSlModelArea4(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'csl1_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'4','model'=>getSlModelArea4(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-181</b></h5>
                        </center>
                     </div> 
                  </div><br>
                  <hr style="border: 1px solid black;">
                  <div class="row">
                     <div class="col-lg-1">
                        <h3><b>Testblock</b></h3>
                     </div>
                     <div class="col-lg-1">
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl193_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl193_test_block','machine_no'=>'SL-193','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl193_test_block','machine_no'=>'SL-193','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-193</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl194_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl194_test_block','machine_no'=>'SL-194','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl194_test_block','machine_no'=>'SL-194','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-194</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl195_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl195_test_block','machine_no'=>'SL-195','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl195_test_block','machine_no'=>'SL-195','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-195</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl196_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl196_test_block','machine_no'=>'SL-196','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl196_test_block','machine_no'=>'SL-196','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-196</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl197_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl197_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl197_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-164</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl198_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl198_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl198_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-171</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl199_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl199_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl199_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-172</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl200_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl200_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl200_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-179</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc7_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc7_test_block','machine_no'=>'Sbc7','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc7_test_block','machine_no'=>'Sbc7','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>Sbc7</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->csl1_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'csl1_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'csl1_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'4','model'=>getSlModelArea4(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-181</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
                        <a class="btn btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-arrow-left-bold"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>&ensp;&ensp;&ensp;
                        <button class="btn btn-success" onClick="window.location.reload();">
                           <i class="mdi mdi-refresh"></i>
                           Refresh Page
                        </button>
                     </div>
                  </div><br><br>
               </div>
            </form>
         </div>
      </div>
      @endforeach
   </div>
@endif