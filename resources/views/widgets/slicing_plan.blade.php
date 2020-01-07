@foreach ($plan as $data)
 <div class="col-lg-2">
    <h2><b>Plan</b></h2>
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
       <h1><b>{{$data->sl3_target}}</b></h1>
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
       <h4><b>SL-170</b></h4>
    </center>
 </div> 
@endforeach