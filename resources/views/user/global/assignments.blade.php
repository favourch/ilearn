@extends('user.app')

@section('content')	
	<div class="container libraries">
		<div class="row">
			<div class="col-md-3">
				<div class="profile-menu panel panel-default">
					<header class="panel-heading">
						<h2 class="panel-title">Perpustakaan</h2>
					</header>
					<div class="panel-body">
						<ul class="nav nav-pills nav-stacked">
							<li class="{{ set_active('home.assignments') }}"><a href="{{ route('home.assignments') }}">Tugas</a></li>
							<li class="{{ set_active('home.quizes') }}"><a href="{{ route('home.quizes') }}">Quiz</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9">			
				<div class="profile-form panel panel-default">
					<header class="panel-heading">
						<h2 class="panel-title">Tugas</h2>
					</header>
					<div class="panel-body">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection