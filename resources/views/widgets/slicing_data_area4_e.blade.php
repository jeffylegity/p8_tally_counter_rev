<br><br><br>
@if (getEshiftLatestArea4() == '[]')
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
<div class="card-header" style="background-color:#034ea2;color:white;">
   <center>
      <h4 style="font-size:200%">
         <b>
            @foreach($eShiftdate = getEshiftLatestArea4(); as $shift)
             (Area 4 - E Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
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
                  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr style="text-align:center;">
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>M/asdf#</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Model</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Plan</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Actual   </b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Testblock</b></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($record as $data)
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-193</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(1)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl193_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl193_actual) >= intval($data->sl193_target))
                                 <b>
                                    {{$data->sl193_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl193_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl193_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-194</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(2)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl194_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl194_actual) >= intval($data->sl194_target))
                                 <b>
                                    {{$data->sl194_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl194_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl194_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-195</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(3)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl195_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl195_actual) >= intval($data->sl195_target))
                                 <b>
                                    {{$data->sl195_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl195_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl195_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-196</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(4)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl196_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl196_actual) >= intval($data->sl196_target))
                                 <b>
                                    {{$data->sl196_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl196_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl196_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-197</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(5)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl197_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl197_actual) >= intval($data->sl197_target))
                                 <b>
                                    {{$data->sl197_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl197_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl197_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-198</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(6)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl198_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl198_actual) >= intval($data->sl198_target))
                                 <b>
                                    {{$data->sl198_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl198_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl198_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-199</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(7)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl199_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl199_actual) >= intval($data->sl199_target))
                                 <b>
                                    {{$data->sl199_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl199_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl199_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-200</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(8)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl200_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl200_actual) >= intval($data->sl200_target))
                                 <b>
                                    {{$data->sl200_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl200_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl200_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>BC-7</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(9)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc7_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->bc7_actual) >= intval($data->bc7_target))
                                 <b>
                                    {{$data->bc7_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->bc7_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc7_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>CSL-1</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea4(10)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->csl1_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->csl1_actual) >= intval($data->csl1_target))
                                 <b>
                                    {{$data->csl1_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->csl1_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->csl1_test_block}}
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
