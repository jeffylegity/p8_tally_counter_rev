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
                           <a href="{{route('admin.models.area2')}}" class="btn btn-success">
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
                        <td><h4 style="font-size:200%"><b>SL-156</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(1) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(1)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-161</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(2) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(2)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-162</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(3) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(3)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-163</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(4) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(4)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-164</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(5) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(5)}}
                                    
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-171</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(6) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(6)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-172</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(7) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(7)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-179</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(8) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(8)}}
                                 @endif
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
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-180</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea2(9) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(9)}}
                                 @endif
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
                                 @if (getSlModelArea2(10) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea2(10)}}
                                    
                                 @endif
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
