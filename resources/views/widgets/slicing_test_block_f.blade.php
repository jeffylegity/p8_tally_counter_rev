
@foreach ($test_block as $data)
<div class="col-lg-2" style="margin-left:8%;">
   <center>
      <h4 style="font-size:130%;"><b>{{getSL166ModelName()}}</b></h4>
      <h1 style="font-size:500%"><b>{{$data->sl166_test_block}}</b></h1>
      <h4><b>SL-166</b></h4>
   </center>
</div>
<div class="col-lg-2">
   <center>
      <h4 style="font-size:130%;"><b>{{getSL167ModelName()}}</b></h4>
      <h1 style="font-size:500%"><b>{{$data->sl167_test_block}}</b></h1>
      <h4><b>SL-167</b></h4>
   </center>
</div>
<div class="col-lg-2">
   <center>
      <h4 style="font-size:130%;"><b>{{getSL168ModelName()}}</b></h4>
      <h1 style="font-size:500%"><b>{{$data->sl168_test_block}}</b></h1>
      <h4><b>SL-168</b></h4>
   </center>
</div>  
<div class="col-lg-2">
   <center>
      <h4 style="font-size:130%;"><b>{{getSL169ModelName()}}</b></h4>
      <h1 style="font-size:500%"><b>{{$data->sl169_test_block}}</b></h1>
      <h4><b>SL-169</b></h4>
   </center>
</div> 
<div class="col-lg-2">
   <center>
      <h4 style="font-size:130%;"><b>{{getSL170ModelName()}}</b></h4>
      <h1 style="font-size:500%"><b>{{$data->sl170_test_block}}</b></h1>
      <h4><b>SL-170</b></h4>
   </center>
</div> 
@endforeach
