<?php
use App\User;
?>

<div class="card mb-3">
	<div class="card-header">Goodbye, @foreach(App\User::where('id', session::get('logout'))->get() as $user){{$user->name}}@endforeach</div>
	<div class="card-body" style="font-size: 20px">
		You logged on at: @foreach(App\User::where('id', session::get('logout'))->get() as $user){{$user->session_start}}@endforeach
		<br>
		You logged off at: @foreach(App\User::where('id', session::get('logout'))->get() as $user){{$user->session_end}}@endforeach
	</div>
</div>