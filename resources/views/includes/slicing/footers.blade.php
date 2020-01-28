
 </div>
 <div class="side-bar right-bar">
 <a href="javascript:void(0);" class="right-bar-toggle">
   <i class="mdi mdi-close-circle-outline"></i>
 </a>
 <h4 class="">Settings</h4>
 <div class="notification-list nicescroll">
   <ul class="list-group list-no-border user-list">
     <li class="nav-item dropdown">
       <a class="form-control" style="display:flex;align-items:center;justify-content:center;" href="{{ route('logout') }}"
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
 </body>
 </html>