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
               <div class="card-box" style="margin-top:-10px;">
                  <div class="form-group">
                     <div id="plan" style="margin-top:-20px">
                        {{AsyncWidget::SlicingPlanE()}}
                     </div>
                     <hr style="border:1px solid black;margin-top:-8px">
                     <div id="actual" style="margin-top:-20px">
                        {{-- {{AsyncWidget::SlicingActualE()}} --}}
                        {{AsyncWidget::SlicingPlanE()}}
                     </div>
                     <hr style="border: 1px solid black;margin-top:-10px">
                     <div id="testblock" style="margin-top:-20px">
                        {{-- {{AsyncWidget::SlicingTestBlockE()}} --}}
                        {{AsyncWidget::SlicingPlanE()}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="card-box" style="margin-top:-10px;">
                  <div class="form-group">
                        {{AsyncWidget::SlicingPlanF()}}
                     <br>
                     <hr style="border:1px solid black;">
                        {{AsyncWidget::SlicingActualF()}}
                     <br>
                     <hr style="border: 1px solid black;">
                        {{AsyncWidget::SlicingTestBlockF()}}
                     <br>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection