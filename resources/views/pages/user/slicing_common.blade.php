@extends('layouts.slicing-common-layout')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
      <div class="col-xl-12">
         <br>
         <center>
            <img src="{{URL::asset('assets/images/shinetsu.png.png')}}" alt="Shin-Etsu" style="width: 20%; height:10%;">
         </center>
         <br>
         <div class="alert alert-danger" style="background-color:#01939e;color:white;">
            <h3 style="text-align:center;"><b>1st Machining Slicing</b></h3>
         </div>
         <div class="card-box">
            <div class="form-group">
               <hr style="border:1px solid black;">
                  {{AsyncWidget::SlicingPlan()}}
               <br>
               <hr style="border:1px solid black;">
                  {{AsyncWidget::SlicingActual()}}
               <br>
               <hr style="border: 1px solid black;">
                  {{AsyncWidget::SlicingTestBlock()}}
               <br>
            </div>
         </div>
         {{-- <div class="alert alert-danger" style="background-color:#01939e;color:white;">
            <h3 style="text-align:center;"><b>1st Machining Slicing</b></h3>
         </div> --}}
      </div>
      </div>
   </div>
</div>
@endsection