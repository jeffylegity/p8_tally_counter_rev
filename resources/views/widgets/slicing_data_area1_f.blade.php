<br><br><br><br>
@if (getFshiftLatestArea1() == '[]')
<div class="card-header" style="background-color:#ff5b5b;color:white;">
   <center>
      <h4 style="font-size:200%">
         <b>
            Data not yet generated
         </b>
      </h4>
   </center>
</div>
@else
<div class="card-header" style="background-color:#ff5b5b;color:white;">
   <center>
      <h4 style="font-size:200%">
         <b>
            @foreach($eShiftdate = getFshiftLatestArea1(); as $shift)
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
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-166</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea1(1)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl166_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl166_actual) >= intval($data->sl166_target))
                                 <b>
                                    {{$data->sl166_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl166_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl166_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-167</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea1(2)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl167_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl167_actual) >= intval($data->sl167_target))
                                 <b>
                                    {{$data->sl167_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl167_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl167_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-168</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea1(3)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl168_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl168_actual) >= intval($data->sl168_target))
                                 <b>
                                    {{$data->sl168_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl168_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl168_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-169</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea1(4)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl169_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl169_actual) >= intval($data->sl169_target))
                                 <b>
                                    {{$data->sl169_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl169_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl169_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-170</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea1(5)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl170_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl170_actual) >= intval($data->sl170_target))
                                 <b>
                                    {{$data->sl170_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl170_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl170_test_block}}
                                 </b>
                              </h4>
                           </td>
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