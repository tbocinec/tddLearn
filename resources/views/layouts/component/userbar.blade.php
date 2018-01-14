<!-- User Info -->
<div class="user-info">
    <div class="admin-image"> <img src="assets/images/random-avatar7.jpg" alt=""> </div>
    <div class="admin-action-info"> <span>Welcome</span>
        <h3>  {{ Auth::user()->name }}</h3>
        <ul>
            <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
            <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
            <li><a data-placement="bottom" title="Full Screen" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="zmdi zmdi-sign-in"></i></a></li>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </div>
</div>
<!-- #User Info -->