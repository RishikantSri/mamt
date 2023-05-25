DashBoard of Company.

Hi Company!


<a class="nav-link" href="{{ route('company.logout') }}"
onclick="event.preventDefault();
         document.getElementById('logout-form-ad').submit();">
&nbsp; <i class='fas fa-sign-out-alt' style='font-size:18px'></i> Log Out
 <form id="logout-form-ad" action="{{ route('company.logout') }}" method="POST" class="d-none">
     @csrf
 </form>
</a>