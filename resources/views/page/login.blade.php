@extends('layouts.content')
@section('page_content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Connectez-vous à votre compte</h2>
						<form action="{{route('ckeck_login')}}" method="post">
							@csrf
							<input type="text" name="user" placeholder="Utilisateur ou email" />
							<input type="password" name="password" placeholder="mot de passe" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Gardez-moi connecté
							</span>
							<button type="submit" class="btn btn-default">Se connecter</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	@endsection