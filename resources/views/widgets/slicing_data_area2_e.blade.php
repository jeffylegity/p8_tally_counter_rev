<br><br><br>
@if (getEshiftLatestArea2() == '[]')
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
            @foreach($eShiftdate = getEshiftLatestArea2(); as $shift)
             (Area 2 - E Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
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
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>SLMC#</b></h4></th>
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
                                    {{getSL156ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl156_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl156_actual) >= intval($data->sl156_target))
                                 <b>
                                    {{$data->sl156_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl156_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl156_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-161</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL161ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl161_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl161_actual) >= intval($data->sl161_target))
                                 <b>
                                    {{$data->sl161_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl161_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl161_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-162</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL162ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl162_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl162_actual) >= intval($data->sl162_target))
                                 <b>
                                    {{$data->sl162_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl162_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl162_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-163</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL163ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl163_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl163_actual) >= intval($data->sl163_target))
                                 <b>
                                    {{$data->sl163_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl163_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl163_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-164</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL164ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl164_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl164_actual) >= intval($data->sl164_target))
                                 <b>
                                    {{$data->sl164_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl164_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl164_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-171</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL171ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl171_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl171_actual) >= intval($data->sl171_target))
                                 <b>
                                    {{$data->sl171_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl171_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl171_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-172</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL172ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl172_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl172_actual) >= intval($data->sl172_target))
                                 <b>
                                    {{$data->sl172_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl172_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl172_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-179</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL179ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl179_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl179_actual) >= intval($data->sl179_target))
                                 <b>
                                    {{$data->sl179_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl179_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl179_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;border-bottom:2px solid black;">
                           <td><h4 style="font-size:200%"><b>SL-180</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL180ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl180_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl180_actual) >= intval($data->sl180_target))
                                 <b>
                                    {{$data->sl180_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl180_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl180_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%"><b>SL-181</b></h4></td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{getSL181ModelName()}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl181_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 @if (intval($data->sl181_actual) >= intval($data->sl181_target))
                                 <b>
                                    {{$data->sl181_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl181_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:500%">
                                 <b>
                                    {{$data->sl181_test_block}}
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
