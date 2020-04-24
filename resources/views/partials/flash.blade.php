@if(session()->has('flash'))
	<div class="notification is-success">
		{{ session('flash') }}
	</div>
@endif
