@extends('layouts.content')
@section('page_content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Créer compte</h2>
						<form action="{{route('create_user')}}" method="post">
                            @csrf
							<input type="text" name="name"  placeholder="Name"/>
							<input type="email" name="email"  placeholder="Email Address"/>
							<input type="password" name="password"  placeholder="Password"/>
							<button type="submit" class="btn btn-default">S'inscrire</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection