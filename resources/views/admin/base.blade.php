<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | KPC OURO</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="KPC OURO">
	<meta name="description" content="">

	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

	{{-- <!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"> --}}

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/apexcharts/css/apexcharts.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
<main>
	
<nav class="navbar sidebar navbar-expand-xl navbar-dark bg-dark">

	<div class="d-flex align-items-center">
		<a class="navbar-brand" href="{{ route('admin.dashboard') }}">
			<img class="navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}" alt="">
		</a>
	</div>
	
	<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
		<div class="offcanvas-body sidebar-content d-flex flex-column bg-dark">

			<ul class="navbar-nav flex-column" id="navbar-sidebar">
				
				<li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link @yield('isActive1')"><i class="bi bi-house fa-fw me-2"></i>Dashboard</a></li>
				
				<li class="nav-item"> <a class="nav-link @yield('isActive2')" href="{{ route('admin.cours') }}"><i class="bi bi-basket fa-fw me-2"></i>Courses</a></li>

				<li class="nav-item"> <a class="nav-link @yield('isActive3')" href="{{ route('admin.students') }}"><i class="fas fa-user-graduate fa-fw me-2"></i>Students</a></li>

				<li class="nav-item">
					<a class="nav-link @yield('isActive4')" data-bs-toggle="collapse" href="#collapseinstructors" role="button" aria-expanded="false" aria-controls="collapseinstructors">
						<i class="fas fa-user-tie fa-fw me-2"></i>Instructors
					</a>
					<ul class="nav collapse flex-column" id="collapseinstructors" data-bs-parent="#navbar-sidebar">
						<li class="nav-item"> <a class="nav-link @yield('isActive5')" href="{{ route('admin.instructors') }}">Instructors</a></li>
						<li class="nav-item"> 
							<a class="nav-link @yield('isActive6')" href="{{ route('admin.instructors_request') }}">Instructor requests
								<span class="badge text-bg-success rounded-circle ms-2">2</span>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="nav-item"> <a class="nav-link @yield('isActive7')" href="{{ route('admin.reviews') }}"><i class="far fa-comment-dots fa-fw me-2"></i>Reviews</a></li>

				<li class="nav-item"> <a class="nav-link @yield('isActive8')" href="{{ route('admin.articles') }}"><i class="far fa-chart-bar fa-fw me-2"></i>Articles</a></li>

				<li class="nav-item"> <a class="nav-link @yield('isActive9')" href="{{ route('admin.settings') }}"><i class="fas fa-user-cog fa-fw me-2"></i>Admin Settings</a></li>

				<li class="nav-item"> <a class="nav-link @yield('isActive10')" href="{{ route('admin.contacts') }}"><i class="far fa-clipboard fa-fw me-2"></i>Contacts</a></li>

			</ul>

		</div>
	</div>
</nav>

<div class="page-content">

	<nav class="navbar top-bar navbar-light border-bottom py-0 py-xl-3">
		<div class="container-fluid p-0">
			<div class="d-flex align-items-center w-100">

				<div class="d-flex align-items-center d-xl-none">
					<a class="navbar-brand" href="index.html">
						<img class="light-mode-item navbar-brand-item h-30px" src="{{ asset('assets/images/logo-mobile.svg') }}" alt="">
						<img class="dark-mode-item navbar-brand-item h-30px" src="{{ asset('assets/images/logo-mobile-light.svg') }}" alt="">
					</a>
				</div>

				<div class="navbar-expand-xl sidebar-offcanvas-menu">
					<button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
						<i class="bi bi-text-right fa-fw h2 lh-0 mb-0 rtl-flip" data-bs-target="#offcanvasMenu"> </i>
					</button>
				</div>
				
				<div class="navbar-expand-lg ms-auto ms-xl-0">
					
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-animation">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</button>

					<div class="collapse navbar-collapse w-100" id="navbarTopContent">
						<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
							<div class="nav-item w-100">
								<form class="position-relative">
									<input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
									<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ms-xl-auto">
					<ul class="navbar-nav flex-row align-items-center">

						<li class="nav-item ms-2 ms-md-3 dropdown">
							<a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell fa-fw"></i>
							</a>
							<span class="notif-badge animation-blink"></span>

							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
								<div class="card bg-transparent">
									<div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
										<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 new</span></h6>
										<a class="small" href="#">Clear all</a>
									</div>
									<div class="card-body p-0">
										<ul class="list-group list-unstyled list-group-flush">
											<li>
												<a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
													<div class="me-3">
														<div class="avatar avatar-md">
															<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/08.jpg') }}" alt="avatar">
														</div>
													</div>
													<div>
														<p class="text-body small m-0">Congratulate <b>Joan Wallace</b> for graduating from <b>Microverse university</b></p>
														<u class="small">Say congrats</u>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
										<a href="#" class="stretched-link">See all incoming activity</a>
									</div>
								</div>
							</div>
						</li>

						<li class="nav-item ms-2 ms-md-3 dropdown">
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
							</a>

							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<li class="px-3">
									<div class="d-flex align-items-center">
										<div class="avatar me-3 mb-3">
											<img class="avatar-img rounded-circle shadow" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
											<p class="small m-0">example@gmail.com</p>
										</div>
									</div>
								</li>
                                <li> <hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
								<li> <hr class="dropdown-divider"></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

    @yield('content')

</div>

</main>

<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js') }}"></script>

<script src="{{ asset('assets/js/functions.js') }}"></script>

</body>
</html>
