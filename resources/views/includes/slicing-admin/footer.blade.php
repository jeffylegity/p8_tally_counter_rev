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
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.core.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.app.js')}}"></script>
</body>
@toastr_js
@toastr_render
</html>