<div class="form-group">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="table-responsive">
               <table class="table table-striped table-bordered" cellspacing="0" width="100%" border="3">
                  <thead>
                     <tr style="text-align:center;">
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>M/C#</b></h4></th>
                     <th style="background-color:#00929e;color:white;">
                        <h4 style="font-size:200%;">
                           <a href="{{route('admin.models.area3')}}" class="btn btn-success">
                              <b>
                                 <i class="mdi mdi-pencil"></i>
                                 Model
                              </b>
                           </a>
                        </h4>
                     </th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Plan</b></h4></th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Actual   </b></h4></th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Testblock</b></h4></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($record as $data)
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-182</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(1) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(1)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-183</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(2) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(2)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-185</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(3) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(3)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-186</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(4) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(4)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>LAP-20</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(5) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(5)}}
                                    
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>LAP-23</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(6) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(6)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>LAP-27</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(7) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(7)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>BC-8</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(8) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(8)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>BC-9</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(9) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(9)}}
                                 @endif
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
                                 @if (getSlModelArea3(10) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(10)}}
                                    
                                 @endif
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
