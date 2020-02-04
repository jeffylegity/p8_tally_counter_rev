<br><br><br><br>
@if (getEshiftLatestArea1() == '[]')
    <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
       <h1>
         Data not yet generated
       </h1>
    </div>
@else
<div class="card-header" style="background-color:#034ea2;color:white;">
   <center>
      <h4 style="font-size:200%">
         <b>
            @foreach($eShiftdate = getEshiftLatestArea1(); as $shift)
             (Area 1 - {{$shift->shift}} Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
            @endforeach
         </b>
      </h4>
   </center>
</div>
   <div class="form-group">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="table-responsive">
                  <table class="table table-striped table-bordered" cellspacing="0" width="100%" border="3">
                    <thead>
                      <tr style="text-align:center;">
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>M/C#</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Model</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Plan</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Actual   </b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Testblock</b></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($record as $data)
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-166</b></h4></td>
                           <td><h4 style="font-size:200%"><b>{{getSL166ModelName()}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl166_target}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl166_actual}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl166_test_block}}</b></h4></td>
                        </tr>   
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-167</b></h4></td>
                           <td><h4 style="font-size:200%"><b>{{getSL167ModelName()}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl167_target}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl167_actual}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl167_test_block}}</b></h4></td>
                        </tr>   
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-168</b></h4></td>
                           <td><h4 style="font-size:200%"><b>{{getSL168ModelName()}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl168_target}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl168_actual}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl168_test_block}}</b></h4></td>
                        </tr>   
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-169</b></h4></td>
                           <td><h4 style="font-size:200%"><b>{{getSL169ModelName()}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl169_target}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl169_actual}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl169_test_block}}</b></h4></td>
                        </tr>   
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-170</b></h4></td>
                           <td><h4 style="font-size:200%"><b>{{getSL170ModelName()}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl170_target}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl170_actual}}</b></h4></td>
                           <td><h4 style="font-size:500%"><b>{{$data->sl170_test_block}}</b></h4></td>
                        </tr>    
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
         </div>
      </div>
   </div>
@endif