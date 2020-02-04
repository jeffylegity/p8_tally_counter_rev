@extends('layouts.slicing-layout')
@section('content')
   <br>
   <div class="content">
      <div class="container-fluid">
         @if (getLatestArea2() == '[]')
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
                        <h1>(Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
                     </div>
                     @else
                     <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
                        <h1>(Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
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
                                    <h5 style="font-size:120%;"><b>{{getSL156ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl156_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-156</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL161ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl161_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-161</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL162ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl162_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-162</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL163ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl163_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-163</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL164ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl164_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-164</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL171ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl171_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-171</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL172ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl172_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-172</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL179ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl179_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-179</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL180ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl180_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-180</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h5 style="font-size:120%;"><b>{{getSL181ModelName()}}</b></h5>
                                    <hr style="border:1px solid black;">
                                    <h2 style="font-size:400%"><b>{{$data->sl181_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h5><b>SL-181</b></h5>
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
                                    <h2 style="font-size:400%"><b>{{$data->sl156_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl156_actual','machine_no'=>'SL-156','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl156_actual','machine_no'=>'SL-156','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-156</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl161_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl161_actual','machine_no'=>'SL-161','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl161_actual','machine_no'=>'SL-161','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-161</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl162_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl162_actual','machine_no'=>'SL-162','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl162_actual','machine_no'=>'SL-162','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-162</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl163_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl163_actual','machine_no'=>'SL-163','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl163_actual','machine_no'=>'SL-163','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-163</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl164_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl164_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl164_actual','machine_no'=>'SL-164','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-164</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl171_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl171_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl171_actual','machine_no'=>'SL-171','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-171</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl172_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl172_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl172_actual','machine_no'=>'SL-172','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-172</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl179_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl179_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl179_actual','machine_no'=>'SL-179','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-179</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl180_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl180_actual','machine_no'=>'SL-180','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl180_actual','machine_no'=>'SL-180','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-180</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl181_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl181_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl181_actual','machine_no'=>'SL-181','type'=>'actual','area'=>'1'])}}" class="btn btn-primary btn-sm">
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
                                    <h2 style="font-size:400%"><b>{{$data->sl156_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl156_test_block','machine_no'=>'SL-156','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl156_test_block','machine_no'=>'SL-156','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-156</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl161_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl161_test_block','machine_no'=>'SL-161','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl161_test_block','machine_no'=>'SL-161','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-161</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl162_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl162_test_block','machine_no'=>'SL-162','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl162_test_block','machine_no'=>'SL-162','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-162</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl163_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl163_test_block','machine_no'=>'SL-163','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl163_test_block','machine_no'=>'SL-163','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-163</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl164_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl164_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl164_test_block','machine_no'=>'SL-164','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-164</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl171_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl171_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl171_test_block','machine_no'=>'SL-171','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-171</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl172_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl172_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl172_test_block','machine_no'=>'SL-172','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-172</b></h5>
                                 </center>
                              </div>
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl179_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl179_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl179_test_block','machine_no'=>'SL-179','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-179</b></h5>
                                 </center>
                              </div>  
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl180_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl180_test_block','machine_no'=>'SL-180','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl180_test_block','machine_no'=>'SL-180','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h5><b>SL-180</b></h5>
                                 </center>
                              </div> 
                              <div class="col-lg-1">
                                 <center>
                                    <h2 style="font-size:400%"><b>{{$data->sl181_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl181_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'1'])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl181_test_block','machine_no'=>'SL-181','type'=>'test_block','area'=>'1'])}}" class="btn btn-primary btn-sm">
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
      </div>
   </div>
@endsection

