@include('layouts.adminheader')

@include('layouts.adminleftsidebar')

 <!--Start Main Section-->
 <main class="mains">

	<!--start topbar section -->
	@include('layouts.adminnav')
	<!-- end topbar section -->

	@yield('content')
 </main>
 <!--end main page-->



@include('layouts.adminfooter')