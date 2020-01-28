@extends('layouts.slicing-common-layout')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
      <div class="col-xl-12">
         <div class="row">
            <div class="col-lg-6">
               <br>
               <div class="alert alert-danger" style="margin-top:-10px;background-color:#034ea2;color:white;text-align:center;">
                  <h4>
                     <b>
                        @foreach($eShiftdate = getEshiftLatest(); as $shift)
                           E-Shift ({{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
                        @endforeach
                     </b>
                  </h4>
               </div>
               <div class="card-box">
                  <div class="form-group">
                     <br>
                     <div id="plan">
                        {{AsyncWidget::SlicingPlanE()}}
                     </div>
                     <br>
                     <hr style="border:1px solid black;">
                     <br>
                     <div id="actual">
                        {{-- {{AsyncWidget::SlicingActualE()}} --}}
                        {{AsyncWidget::SlicingActualE()}}
                     </div>
                     <br>
                     <hr style="border: 1px solid black;">
                     <br>
                     <div id="testblock">
                        {{-- {{AsyncWidget::SlicingTestBlockE()}} --}}
                        {{AsyncWidget::SlicingTestBlockE()}}
                     </div>
                     <br>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <br>
               <div class="alert alert-danger" style="margin-top:-10px;background-color:#ff5b5b ;color:white;text-align:center;">
                  <h4>
                     <b>
                        @foreach($eShiftdate = getEshiftLatest(); as $shift)
                           F-Shift ({{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
                        @endforeach
                     </b>
                  </h4>
               </div>
               <div class="card-box">
                  <div class="form-group">
                     <br>
                     <div id="plan">
                        {{AsyncWidget::SlicingPlanF()}}
                     </div>
                     <br>
                     <hr style="border:1px solid black;">
                     <br>
                     <div id="actual">
                        {{-- {{AsyncWidget::SlicingActualE()}} --}}
                        {{AsyncWidget::SlicingActualF()}}
                     </div>
                     <br>
                     <hr style="border: 1px solid black;">
                     <br>
                     <div id="testblock">
                        {{-- {{AsyncWidget::SlicingTestBlockE()}} --}}
                        {{AsyncWidget::SlicingActualF()}}
                     </div>
                     <br>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection