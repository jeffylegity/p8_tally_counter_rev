@extends('layouts.slicing-layout')
@section('content')
   <br>
   <div class="content">
      <div class="container-fluid">
         @if (getLatestArea1() == '[]')
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
                        <h1>(Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
                     </div>
                     @else
                     <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
                        <h1>(Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
                     </div>
                     @endif
                  <div class="card-box" style="margin-top:-20px;">
                     <form>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-lg-2">
                                 <h3><b>Plan</b></h3>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL166ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl166_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h4><b>SL-166</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL167ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl167_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h4><b>SL-167</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL168ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl168_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h4><b>SL-168</b></h4>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL169ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl169_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h4><b>SL-169</b></h4>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL170ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl170_target}}</b></h2>
                                 </center>
                                 <center>
                                    <h4><b>SL-170</b></h4>
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
                                    <h2 style="font-size:400%"><b>{{$data->sl166_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl166_actual','machine_no'=>'SL-166','type'=>'actual','area'=>'1','model'=>getSL166ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl166_actual','machine_no'=>'SL-166','type'=>'actual','area'=>'1','model'=>getSL166ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-166</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL167ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl167_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl167_actual','machine_no'=>'SL-167','type'=>'actual','area'=>'1','model'=>getSL167ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl167_actual','machine_no'=>'SL-167','type'=>'actual','area'=>'1','model'=>getSL167ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-167</b></h4>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL168ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl168_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl168_actual','machine_no'=>'SL-168','type'=>'actual','area'=>'1','model'=>getSL168ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl168_actual','machine_no'=>'SL-168','type'=>'actual','area'=>'1','model'=>getSL168ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-168</b></h4>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL169ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl169_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl169_actual','machine_no'=>'SL-169','type'=>'actual','area'=>'1','model'=>getSL169ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl169_actual','machine_no'=>'SL-169','type'=>'actual','area'=>'1','model'=>getSL169ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                    <h4><b>SL-169</b></h4>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>{{getSL170ModelName()}}</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl170_actual}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl170_actual','machine_no'=>'SL-170','type'=>'actual','area'=>'1','model'=>getSL170ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl170_actual','machine_no'=>'SL-170','type'=>'actual','area'=>'1','model'=>getSL170ModelName()])}}" class="btn btn-primary btn-sm">
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
                                    <h2 style="font-size:400%"><b>{{$data->sl166_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl166_test_block','machine_no'=>'SL-166','type'=>'test block','area'=>'1','model'=>getSL166ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl166_test_block','machine_no'=>'SL-166','type'=>'test block','area'=>'1','model'=>getSL166ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-167</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl167_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl167_test_block','machine_no'=>'SL-167','type'=>'test block','area'=>'1','model'=>getSL167ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl167_test_block','machine_no'=>'SL-167','type'=>'test block','area'=>'1','model'=>getSL167ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-168</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl168_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl168_test_block','machine_no'=>'SL-168','type'=>'test block','area'=>'1','model'=>getSL168ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl168_test_block','machine_no'=>'SL-168','type'=>'test block','area'=>'1','model'=>getSL168ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div>  
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-169</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl169_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl169_test_block','machine_no'=>'SL-169','type'=>'test block','area'=>'1','model'=>getSL169ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl169_test_block','machine_no'=>'SL-169','type'=>'test block','area'=>'1','model'=>getSL169ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                              </div> 
                              <div class="col-lg-2">
                                 <center>
                                    <h4><b>SL-170</b></h4>
                                    <h2 style="font-size:400%"><b>{{$data->sl170_test_block}}</b></h2>
                                 </center>
                                 <center>
                                    <a href="{{route('dec_data',['col_selector'=>'sl170_test_block','machine_no'=>'SL-170','type'=>'test block','area'=>'1','model'=>getSL170ModelName()])}}" class="btn btn-danger btn-sm">
                                       <i class="mdi mdi-minus"></i>
                                    </a>
                                    <a href="{{route('inc_data',['col_selector'=>'sl170_test_block','machine_no'=>'SL-170','type'=>'test block','area'=>'1','model'=>getSL170ModelName()])}}" class="btn btn-primary btn-sm">
                                       <i class="mdi mdi-plus"></i>
                                    </a>
                                 </center>
                                 <br><br>
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
                           </div><br>
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

