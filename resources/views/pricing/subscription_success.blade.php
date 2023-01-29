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
			<div class="mt-sm-n20 pb-20" style="background-color: black; height:80rem">
				
				<!--begin::Wrapper-->
				<div class="pb-20 pt-20">
					<!--begin::Container-->
					<div class="container" >
						<!--begin::Plans-->
						<div class="d-flex flex-column container pt-lg-20">
							<!--begin::Heading-->
							
							<!--end::Heading-->
							<!--begin::Pricing-->
							<div class="" id="kt_pricing">
								
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card p-20">
   
                                                <div class="card-body">
                                   
                                                    <div class="alert alert-success">
                                                        Subscription purchased successfully!
                                                    </div>
                                                    <div class="text-center pt-0">
                                                        <a href="{{ url('login') }}" id="" type="submit" class="btn btn-primary">
                                                                Signin  
                                                        </a>
                                                    </div>
                                   
                                                </div>
                                        </div>
                                    </div>
                                </div>
								
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

