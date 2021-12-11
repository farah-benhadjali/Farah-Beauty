@extends('base')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<title>Compte</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/contact_responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{asset('assets/images/sliders_web7.jpg')}}" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_container">
						<div class="home_content">
							<div class="home_title">Votre Compte</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="{{route('intAdmin')}}"><button class="btn btn-primary" data-link-action="sign-in" type="submit" >Espace Admin</a></li>
									<li><a href="{{route('intUser')}}"><button class="btn btn-primary" data-link-action="sign-in" type="submit" >Espace User</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<br>
<form action="{{ route('home') }}" method="POST">
        <label for="mail">Entrez votre email : </label>
        <input type="text" name="mail" id="mail"><br>
        <label for="pass">Entrez votre email : </label>
        <input type="password" name="pass" id="pass"><br>
        <input type="submit" value="Envoyer !">
    </form>
	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url({{asset('assets/images/newsletter.jpg')}})"></div>
			<div class="container">
				<div class="row newsletter_row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">subscribe for a 20% discount</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-10 offset-lg-1">
						<div class="newsletter_form_container">
							<form action="#">
								<input type="email" class="newsletter_input" required="required" placeholder="E-mail here">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div>
						<div class="newsletter_text">Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestib ulum ultrices nulla. Aliquam egestas tempor leo.</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/css/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/css/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/contact_custom.js')}}"></script>
</body>
</html>

@endsection