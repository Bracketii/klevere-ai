<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Sign in - Klevere AI</title>
		<meta charset="utf-8" />
		<meta name="description" content="Klevere AI is an advanced AI writing tool that utilizes Natural Language Processing (NLP) and Machine Learning (ML) technologies to assist users in creating high-quality content. The tool offers a variety of features such as text generation, language modeling, content creation, text summarization, and text classification. With Klevere AI, users can easily generate unique and engaging content for their website, blog, or social media platforms.Klevere AI also offers advanced text analytics and content optimization features, which help users to identify trends and patterns in their writing. Additionally, the tool has a built-in text-to-speech (TTS) feature that can be used to convert written text into speech, making it perfect for creating podcasts or videos." />
		<meta name="keywords" content="Natural Language Processing (NLP),
		Machine Learning (ML), Text Generation, Language Modeling,Content Creation,Text Summarization,Text Classification,Text-to-Speech (TTS),Sentiment Analysis,Content Optimization,Automated Writing, AI Writing Assistant,Text Analytics,Content Generation,Language Translation, Speech Recognition,Text-to-Text Generation,Content Management,Text Simplification,Content Generation Platforms" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Klevere AI" />
		<meta property="og:url" content="https://klevere.ai" />
		<meta property="og:site_name" content="Klevere AI" />
		<link rel="canonical" href="https://klevere.ai" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Logo-->
				<a href="#" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="{{ asset('assets/media/logos/klevere-logo-full-black.svg') }}" class="theme-light-show h-25px" />
					<img alt="Logo" src="{{ asset('assets/media/logos/klevere-logo-full-black.svg') }}" class="theme-dark-show h-25px" />
				</a>
				<!--end::Logo-->
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
					<!--begin::Wrapper-->
					<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							@if (\Session::has('success'))                         
							<div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row w-100 p-5 mb-10" role="alert">
								<div class="d-flex flex-column text-light pe-0 pe-sm-10">{!! \Session::get('success') !!}</div>
								<button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
							  </div>
                              @endif
							@if (\Session::has('danger'))                         
							  <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10" role="alert">
								<div class="d-flex flex-column text-light pe-0 pe-sm-10">{!! \Session::get('danger') !!}</div>
								<button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif
                            @if (\Session::has('error'))                         
							  <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row w-100 p-5 mb-10" role="alert">
								<div class="d-flex flex-column text-light pe-0 pe-sm-10">{!! \Session::get('error') !!}</div>
								<button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif
                            @include('errors')
							<form class="form w-100" method="POST" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="{{ route('login')}}">
								<!--begin::Body-->
                                {{ csrf_field()}}
								<div class="card-body">
									<!--begin::Heading-->
									<div class="text-start mb-10">
										<!--begin::Title-->
										<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Welcome back!</h1>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Login to continue writing</div>
										<!--end::Link-->
									</div>
									<!--begin::Heading-->
									<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<input type="text" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" />
										<!--end::Email-->
									</div>
									<!--end::Input group=-->
									<div class="fv-row mb-7">
										<!--begin::Password-->
										<input type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
										
										<!--end::Password-->
									</div>
									<!--end::Input group=-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
										<div></div>
										<!--begin::Link-->
										<a href="{{ route('show.forgot.password') }}" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									
									<!--begin::Socialite Actions-->
									<div class="d-flex flex-stack">
										
                                        <button type="submit" class="btn btn-primary me-10" id="kt_button_1">
											<span class="indicator-label">
												Log in
											</span>
											<span class="indicator-progress">
												Logging in... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
											</span>
											<script>
												// Element to indecate
												var button = document.querySelector("#kt_button_1");

												// Handle button click event
												button.addEventListener("click", function() {
													// Activate indicator
													button.setAttribute("data-kt-indicator", "on");

													// Disable indicator after 3 seconds
													setTimeout(function() {
														button.removeAttribute("data-kt-indicator");
													}, 3000);
												});
											</script>
										</button>
										<!--end::Submit-->
										<!--begin::Social-->
										<div class="d-flex align-items-center">
											<div class="text-gray-400 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
											<!--begin::Symbol-->
											<a href="{{ route('google') }}" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
												<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
											</a>
											<!--end::Symbol-->
											<!--begin::Symbol-->
											<a href="{{ route('facebook') }}" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
												<img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
											</a>
											<!--end::Symbol-->
											<!--begin::Symbol-->
											<a href="{{ route('linkedin') }}" class="symbol symbol-circle symbol-45px w-45px bg-light">
												<img alt="Logo" src="assets/media/svg/social-logos/linkedin.svg" class="theme-light-show p-4" />
												<img alt="Logo" src="assets/media/svg/social-logos/linkedin.svg" class="theme-dark-show p-4" />
											</a>
											<!--end::Symbol-->
										</div>
										<!--end::Social-->
									</div>
									<!--end::Actions-->
								</div>
								<!--begin::Body-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="m-0">
							<span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Not a Member yet?</span>
							<a href="{{ url('register') }}" class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">Sign Up</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10" style="background-color:#2468FF">
					<div class="row">
						<div class="col-md-12">
							<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> 
							<lottie-player src="https://lottie.host/7a608d6b-889c-472a-9958-49eb965eb3ae/ithnppsder.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center" style="color: #ffffff;font-size:35px; line-height:4rem">Say 👋 to your best<br> AI Writing Tool</h1>
							<h1 class="pt-1 text-center" style="color: #ffffff;font-size:25px">Klevere.AI</h1>
						</div>
					</div>

				</div>
				<!--begin::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<script src="{{ asset('assets/js/custom/authentication/sign-in/i18n.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
