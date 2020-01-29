@extends('layouts.slicing-common-layout')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
      <div class="col-xl-12">
         <div class="row">
            {{AsyncWidget::SlicingDataArea2E()}}
            {{AsyncWidget::SlicingDataArea2F()}}
         </div>
      </div>
   </div>
</div>
@endsection