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
					<img alt="Logo" src="{{ asset('assets/media/logos/klevere-logo.svg') }}" class="theme-light-show h-25px" />
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
							<div class="me-2"></div>
							<!--end::Back link-->
							
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
                            @if (\Session::has('error'))
                             <div class="alert alert-danger">
                                <ul>
                             <li>{!! \Session::get('error') !!}</li>
                              </ul>
                              </div>
                              @endif
							<form class="form w-100" method="POST" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="" action="{{ route('admin.login')}}">
								<!--begin::Body-->
                                {{ csrf_field()}}
								<div class="card-body">
									<!--begin::Heading-->
									<div class="text-start mb-10">
										<!--begin::Title-->
										<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access & earn money</div>
										<!--end::Link-->
									</div>
									<!--begin::Heading-->
									<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<input type="name" placeholder="name" name="name" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" />
										<!--end::Email-->
									</div>
									<!--end::Input group=-->
									<div class="fv-row mb-7">
										<!--begin::Password-->
										<input type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
										<!--end::Password-->
									</div>
									<!--end::Input group=-->
									
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<!--begin::Submit-->
									{{--	<button id="kt_sign_in_submit" type="submit" class="btn btn-primary me-2 flex-shrink-0">
											<!--begin::Indicator label-->
											<span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<span class="indicator-progress">
												<span data-kt-translate="general-progress">Please wait...</span>
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
											</span>
											<!--end::Indicator progress-->
										</button>
                                        --}}
                                        <input class="btn btn-primary me-2 flex-shrink-0" type="submit" value="Sign in">
										<!--end::Submit-->
										<!--begin::Social-->
										<div class="d-flex align-items-center">
											<div class="text-gray-400 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
											<!--begin::Symbol-->
											<a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
												<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
											</a>
											<!--end::Symbol-->
											<!--begin::Symbol-->
											<a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
												<img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
											</a>
											<!--end::Symbol-->
											<!--begin::Symbol-->
											<a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
												<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show p-4" />
												<img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show p-4" />
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

						</div>
						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(assets/media/auth/bg11.png)"></div>
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