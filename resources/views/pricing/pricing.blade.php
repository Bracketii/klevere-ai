<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Subscribe to Klevere.AI</title>
		<meta charset="utf-8" />
		<meta name="description" content="Klevere AI is an advanced AI writing tool that utilizes Natural Language Processing (NLP) and Machine Learning (ML) technologies to assist users in creating high-quality content. The tool offers a variety of features such as text generation, language modeling, content creation, text summarization, and text classification. With Klevere AI, users can easily generate unique and engaging content for their website, blog, or social media platforms.
        Klevere AI also offers advanced text analytics and content optimization features, which help users to identify trends and patterns in their writing. Additionally, the tool has a built-in text-to-speech (TTS) feature that can be used to convert written text into speech, making it perfect for creating podcasts or videos." />
		<meta name="keywords" content="Natural Language Processing (NLP),
        Machine Learning (ML), Text Generation, Language Modeling,Content Creation,Text Summarization,Text Classification,Text-to-Speech (TTS),Sentiment Analysis,Content Optimization,Automated Writing, AI Writing Assistant,Text Analytics,Content Generation,Language Translation, Speech Recognition,Text-to-Text Generation,Content Management,Text Simplification,Content Generation Platforms" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Klevere AI" />
		<meta property="og:url" content="https://app.klevere.ai" />
		<meta property="og:site_name" content="Klevere AI" />
		<link rel="canonical" href="https://app.klevere.ai" />
		<link rel="shortcut icon" href="assets/media/logos/klevereLogoIconBlack.svg" />
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
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">

			<!--begin::Pricing Section-->
			<div class="mt-sm-n20" style="background-color: black">
				
				<!--begin::Wrapper-->
				<div class="pb-20 pt-20">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Plans-->
						<div class="d-flex flex-column container pt-lg-20">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
                                <img src="{{ asset('assets/media/logos/klevere-logo-full.svg') }}" width="200" alt="klevere" class="pb-10">
								<h1 class="fs-2hx fw-bold text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Clear Pricing Makes it Easy</h1>
								<div class="text-gray-600 fw-semibold fs-5">Save thousands to millions of bucks by using single tool for different
								</div>
							</div>
							<!--end::Heading-->
							<!--begin::Pricing-->
							<div class="text-center" id="kt_pricing">
								
								<!--begin::Row-->
								<div class="row g-10">
									<!--begin::Col-->
                                    @foreach ($plans as $item)
                                    <div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-dark mb-5 fw-boldest">{{ $item -> name }}</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-gray-400 fw-semibold mb-5">{{ $item -> description }}</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-primary">$</span>
														<span class="fs-3x fw-bold" style="color: #2468FF" data-kt-plan-price-month="99" data-kt-plan-price-annual="999">{{ $item -> price }}</span>
														<span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Mon</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 10 Active Users</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 30 Project Integrations</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800">Keen Analytics Platform</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
																<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800">Targets Timelines & Files</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
																<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<span class="fw-semibold fs-6 text-gray-800">Unlimited Projects</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
																<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="{{ route('plans.show', $item->slug) }}" class="btn btn-primary" style="background-color: #2468FF">Select</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
                                    @endforeach
									
									<!--end::Col-->
									
								</div>
								<!--end::Row-->
							</div>
							<!--end::Pricing-->
						</div>
						<!--end::Plans-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				
			</div>
			<!--end::Pricing Section-->
			
		</div>
		<!--end::Root-->
		
		
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('assets/js/custom/landing.js') }}"></script>
		<script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>

{{-- <!--begin::Col-->
									<div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 py-20 px-10" style="background-color: #C6FF00;">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-black mb-5 fw-boldest">Standard</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-black opacity-75 fw-semibold mb-5">Best Settings for Business</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-black">$</span>
														<span class="fs-3x fw-bold text-black" data-kt-plan-price-month="199" data-kt-plan-price-annual="1999">20</span>
														<span class="fs-7 fw-semibold text-black opacity-75" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Mon</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-black opacity-75 text-start pe-3">Up to 10 Active Users</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-black">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-black opacity-75 text-start pe-3">Up to 30 Project Integrations</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-black">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-black opacity-75 text-start pe-3">Keen Analytics Platform</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-black">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-black opacity-75 text-start pe-3">Targets Timelines & Files</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-black">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<span class="fw-semibold fs-6 text-black opacity-75">Unlimited Projects</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-black">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
																<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="#" class="btn btn-active-primary" style="background-color: black; color:white">Select</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4">
										<div class="d-flex h-100 align-items-center">
											<!--begin::Option-->
											<div class="w-100 d-flex flex-column flex-center rounded-3 bg-body py-15 px-10">
												<!--begin::Heading-->
												<div class="mb-7 text-center">
													<!--begin::Title-->
													<h1 class="text-dark mb-5 fw-boldest">Premium</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-gray-400 fw-semibold mb-5">Best Settings for Enterprise</div>
													<!--end::Description-->
													<!--begin::Price-->
													<div class="text-center">
														<span class="mb-2 text-primary">$</span>
														<span class="fs-3x fw-bold" style="color: #2468FF" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">30</span>
														<span class="fs-7 fw-semibold opacity-50" data-kt-plan-price-month="/ Mon" data-kt-plan-price-annual="/ Ann">/ Mon</span>
													</div>
													<!--end::Price-->
												</div>
												<!--end::Heading-->
												<!--begin::Features-->
												<div class="w-100 mb-10">
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 10 Active Users</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Up to 30 Project Integrations</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Keen Analytics Platform</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack mb-5">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Targets Timelines & Files</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<span class="fw-semibold fs-6 text-gray-800 text-start pe-3">Unlimited Projects</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-success">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Features-->
												<!--begin::Select-->
												<a href="#" class="btn btn-primary" style="background-color: #2468FF">Select</a>
												<!--end::Select-->
											</div>
											<!--end::Option-->
										</div>
									</div>
									<!--end::Col--> --}}