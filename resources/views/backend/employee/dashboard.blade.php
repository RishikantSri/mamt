DashBoard of Employee.

Hi Employee!


<a class="nav-link" href="{{ route('employee.logout') }}"
onclick="event.preventDefault();
         document.getElementById('logout-form-ad').submit();">
&nbsp; <i class='fas fa-sign-out-alt' style='font-size:18px'></i> Log Out
 <form id="logout-form-ad" action="{{ route('employee.logout') }}" method="POST" class="d-none">
     @csrf
 </form>
</a>