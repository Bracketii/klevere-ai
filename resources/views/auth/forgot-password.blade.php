<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Reset your password - Klevere AI</title>
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
			<!--begin::Authentication - Password reset -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Logo-->
				<a href="../../demo1/dist/index.html" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="{{ asset('assets/media/logos/default.svg') }}" class="theme-light-show h-25px" />
					<img alt="Logo" src="{{ asset('assets/media/logos/default-dark.svg') }}" class="theme-dark-show h-25px" />
				</a>
				<!--end::Logo-->
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
					<!--begin::Wrapper-->
					<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							<!--begin::Back link-->
							<div class="me-2">
								<a href="{{ url()->previous() }}" class="btn btn-icon bg-light rounded-circle">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr002.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-800">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
											<path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							<!--end::Back link-->
							<!--begin::Sign Up link-->
							<div class="m-0">
								<span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Already a member ?</span>
								<a href="{{ route('ShowLogin') }}" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">Sign In</a>
							</div>
							<!--end::Sign Up link=-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
						@if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                        @endif
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="../../demo1/dist/authentication/layouts/fancy/new-password.html" action="{{ route('forget.password.post') }}" method="POST">
							
								@csrf
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email" />
									
									@if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>                                
									  @endif
								
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack">
									<!--begin::Link-->
									<div class="m-0">
									
										<button  id="kt_password_reset_submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
										
											<!--begin::Indicator label-->
											<span class="indicator-label">Submit</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											<!--end::Indicator progress-->
										
										</button>
						
										<a href="#" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
									    
										</div>
									<!--end::Link-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="m-0">
							
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
			<!--end::Authentication - Password reset-->
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
