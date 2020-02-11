@if (getLatestArea3() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P8 1st Machining - Area 3</h1>
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
               <h1>(Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
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
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(1)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl182_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-182</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(2)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl183_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-183</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(3)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl185_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-185</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(4)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl186_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-186</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(5)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->lap20_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>LAP-80</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(6)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->lap23_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>LAP-23</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(7)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->lap27_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>LAP-27</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(8)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->bc8_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>BC-8</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(9)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->bc9_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>BC-9</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap;"><b>{{getSlModelArea3(10)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->bc12_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>BC-12</b></h5>
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
                           <h2 style="font-size:400%"><b>{{$data->sl182_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl182_actual','machine_no'=>'SL-182','type'=>'actual','area'=>'3','model'=>getSlModelArea3(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl182_actual','machine_no'=>'SL-182','type'=>'actual','area'=>'3','model'=>getSlModelArea3(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-182</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl183_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl183_actual','machine_no'=>'SL-183','type'=>'actual','area'=>'3','model'=>getSlModelArea3(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl183_actual','machine_no'=>'SL-183','type'=>'actual','area'=>'3','model'=>getSlModelArea3(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-183</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl185_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl185_actual','machine_no'=>'SL-185','type'=>'actual','area'=>'3','model'=>getSlModelArea3(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl185_actual','machine_no'=>'SL-185','type'=>'actual','area'=>'3','model'=>getSlModelArea3(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-185</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl186_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl186_actual','machine_no'=>'SL-186','type'=>'actual','area'=>'3','model'=>getSlModelArea3(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl186_actual','machine_no'=>'SL-186','type'=>'actual','area'=>'3','model'=>getSlModelArea3(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-186</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap20_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap20_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'3','model'=>getSlModelArea3(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap20_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'3','model'=>getSlModelArea3(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-164</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap23_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap23_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'3','model'=>getSlModelArea3(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap23_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'3','model'=>getSlModelArea3(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-171</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap27_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap27_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'3','model'=>getSlModelArea3(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap27_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'3','model'=>getSlModelArea3(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-172</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc8_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc8_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'3','model'=>getSlModelArea3(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc8_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'3','model'=>getSlModelArea3(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-179</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc9_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc9_actual','machine_no'=>'BC-9','type'=>'actual','area'=>'3','model'=>getSlModelArea3(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc9_actual','machine_no'=>'BC-9','type'=>'actual','area'=>'3','model'=>getSlModelArea3(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>BC-9</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc12_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc12_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'3','model'=>getSlModelArea3(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc12_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'3','model'=>getSlModelArea3(10)])}}" class="btn btn-primary btn-sm">
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
                           <h2 style="font-size:400%"><b>{{$data->sl182_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl182_test_block','machine_no'=>'SL-182','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl182_test_block','machine_no'=>'SL-182','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-182</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl183_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl183_test_block','machine_no'=>'SL-183','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl183_test_block','machine_no'=>'SL-183','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-183</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl185_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl185_test_block','machine_no'=>'SL-185','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl185_test_block','machine_no'=>'SL-185','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-185</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl186_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'sl186_test_block','machine_no'=>'SL-186','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'sl186_test_block','machine_no'=>'SL-186','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-186</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap20_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap20_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap20_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-164</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap23_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap23_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap23_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-171</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->lap27_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'lap27_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'lap27_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-172</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc8_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc8_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc8_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-179</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc9_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc9_test_block','machine_no'=>'BC-9','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc9_test_block','machine_no'=>'BC-9','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>BC-9</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->bc12_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_data',['col_selector'=>'bc12_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_data',['col_selector'=>'bc12_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'3','model'=>getSlModelArea3(10)])}}" class="btn btn-primary btn-sm">
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