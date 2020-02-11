<br><br><br>
@if (getEshiftLatestArea3() == '[]')
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
            @foreach($eShiftdate = getEshiftLatestArea3(); as $shift)
             (Area 3 - E Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
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
                           <td><h4 style="font-size:200%"><b>SL-182</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(1)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl182_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl182_actual) >= intval($data->sl182_target))
                                 <b>
                                    {{$data->sl182_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl182_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl182_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-183</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(2)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl183_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl183_actual) >= intval($data->sl183_target))
                                 <b>
                                    {{$data->sl183_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl183_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl183_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-185</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(3)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl185_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl185_actual) >= intval($data->sl185_target))
                                 <b>
                                    {{$data->sl185_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl185_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl185_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-186</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(4)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl186_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl186_actual) >= intval($data->sl186_target))
                                 <b>
                                    {{$data->sl186_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl186_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl186_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>LAP-20</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(5)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap20_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->lap20_actual) >= intval($data->lap20_target))
                                 <b>
                                    {{$data->lap20_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->lap20_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap20_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>LAP-23</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(6)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap23_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->lap23_actual) >= intval($data->lap23_target))
                                 <b>
                                    {{$data->lap23_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->lap23_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap23_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>LAP-27</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(7)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap27_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->lap27_actual) >= intval($data->lap27_target))
                                 <b>
                                    {{$data->lap27_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->lap27_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->lap27_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>BC-8</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(8)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc8_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->bc8_actual) >= intval($data->bc8_target))
                                 <b>
                                    {{$data->bc8_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->bc8_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc8_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>BC-9</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(9)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc9_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->bc9_actual) >= intval($data->bc9_target))
                                 <b>
                                    {{$data->bc9_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->bc9_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc9_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>BC-12</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSlModelArea3(10)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc12_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->bc12_actual) >= intval($data->bc12_target))
                                 <b>
                                    {{$data->bc12_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->bc12_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->bc12_test_block}}
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
