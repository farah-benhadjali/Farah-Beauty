<div class="super_container">	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="{{route('home')}}">Beauty-Farah</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('makeup')}}">MakeUp</a></li>
					<li><a href="{{route('makeup')}}">Accessories</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button">
							<img src="{{asset('assets/images/magnifying-glass.svg')}}" alt=""></button>
					</form>
				</div>
				<div class="shopping">
					<!-- Cart -->
					<a href="#">
						<div class="cart">
							<img src="{{asset('assets/images/shopping-bag.svg')}}" alt="">
							<div class="cart_num_container">
								<div class="cart_num_inner">
									<div class="cart_num">1</div>
								</div>
							</div>
						</div>
					</a>
					<!-- Star
					<a href="#">
						<div class="star">
							<img src="{{asset('assets/images/star.svg')}}" alt="">
							<div class="star_num_container">
								<div class="star_num_inner">
									<div class="star_num">0</div>
								</div>
							</div>
						</div>
					</a> -->
					<!-- Avatar -->
					<a href="{{route('connexion')}}">
						<div class="avatar">
							<img src="{{asset('assets/images/avatar.svg')}}" alt="">
						</div>
					</a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="{{route('home')}}">Beauty-Farah</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="{{asset('assets/images/magnifying-glass.svg')}}" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
			        <li><a href="{{route('home')}}">Home</a></li>
					<li><a href="{{route('makeup')}}">MakeUp</a></li>
					<li><a href="{{route('makeup')}}">Accessories</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</nav>
	</div>




    @yield('content')



    
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="{{route('home')}}">Beauty-Farah</a></div>
					<nav class="footer_nav">
						<ul>
						   <li><a href="{{route('home')}}">Home</a></li>
					       <li><a href="{{route('makeup')}}">MakeUp</a></li>
					       <li><a href="{{route('makeup')}}">Accessories</a></li>
					       <li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>