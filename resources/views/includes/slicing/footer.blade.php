<footer class="footer" style="left:0;">
   <marquee behavior="scroll" direction="left">2019 © Management Information Systems. Shin-Etsu Magnetics Philippines          --          Contact us: Local 114 / 807 / 
     <a href="mailto:misd@smp.com.ph?subject=Concern title&body=Report a problem">misd@smp.com.ph</a>
   </marquee>
</footer>
</div>
<div class="side-bar right-bar">
 <a href="javascript:void(0);" class="right-bar-toggle">
   <i class="mdi mdi-close-circle-outline"></i>
 </a>
 <h4 class="">Settings</h4>
 <div class="notification-list nicescroll">
   <ul class="list-group list-no-border user-list">
     <li class="list-group-item">
       <a href="/profile" class="user-list-item">
         <div class="avatar">
           <img src="{{URL::asset('assets/images/users/default.png')}}" alt="">
         </div>
         <div class="user-desc">
           <span class="name">{{ Auth::user()->name }}</span>
           <span class="desc">{{ Auth::user()->department }}</span>
           <span class="time">Edit your profile</span>
         </div>
       </a>
     </li>
     <li class="nav-item dropdown">
       <a class="form-control" style="text-align:center;" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
     </li>
   </ul>
 </div>
</div>
</div>

<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/detect.js')}}"></script>
<script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{URL::asset('assets/js/waves.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<!-- Plugins Js -->
<script src="{{URL::asset('assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{URL::asset('assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

<!-- App js -->
<script src="{{URL::asset('assets/js/jquery.core.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.app.js')}}"></script>

<script>

    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }

    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        postfix: '%'
    });
    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary",
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='demo3']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo3_22']").TouchSpin({
        initval: 40,
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

    $("input[name='demo5']").TouchSpin({
        prefix: "pre",
        postfix: "post",
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });
    $("input[name='demo0']").TouchSpin({
        buttondown_class: "btn btn-primary",
        buttonup_class: "btn btn-primary"
    });

</script>
</body>
@toastr_js
@toastr_render
</html>