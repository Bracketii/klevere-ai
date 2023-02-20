@extends('user.layouts.app')
@section('user-content')

<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
	<!--begin::Header-->
	<div id="kt_app_header" class="app-header">
		<!--begin::Header container-->
		<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

			{{-- Mobile toggle and logo --}}
			@include('user.layouts.mobile')
			{{-- End::Mobile toggle and logo --}}


			<!--begin::Header wrapper-->
			<div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
				<!--begin::Page title-->
				<div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
						<!--begin::Item-->
						<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
							<a href="#" class="text-gray-700 text-hover-primary me-1">
								<i class="fonticon-home text-gray-700 fs-3"></i>
							</a>
						</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
						<span class="svg-icon svg-icon-4 svg-icon-gray-700 mx-n1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-600 fw-bold lh-1">Marketing</li>
					<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
					<!--begin::Title-->
					<h1 class="text-gray-900 fw-bolder m-0">Blog</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action-->
				<a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Get Started</a>
				<!--end::Action-->
			</div>
			<!--end::Header wrapper-->
		</div>
		<!--end::Header container-->
	</div>
	<!--end::Header-->
	<!--begin::Wrapper-->
	<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

		<!--begin::Sidebar-->
		@include('user.layouts.sidebar')
		<!--end::Sidebar-->
		
		<!--begin::Main-->
		<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

			<!--begin::Content wrapper-->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Content-->
				<div id="kt_app_content" class="app-content flex-column-fluid">
					<!--begin::Content container-->
					<div id="kt_app_content_container" class="app-container container-fluid">

						<!--begin::Row-->
						<div class="row g-6 g-xl-9 pt-10">
                            <div class="col-md-6 col-xl-5">
                                <div class="card mb-5 mb-xl-10">              
                                    <!--begin::Content-->
                                    <div id="kt_account_settings_profile_details" class="collapse show">
                                        <!--begin::Form-->
                                        <form action="{{ route('blog')}}" method="POST" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                            @csrf
                                            <!--begin::Card body-->
                                            <div class="card-body border-top px-9 py-5">
                                                <div class="row mb-5">
                                                    <div class="d-flex flex-column mb-8">
                                                        <label class="required fs-5 fw-semibold mb-2">Describe your topic</label>
                                                        <textarea class="form-control form-control-solid" rows="3" name="text" placeholder="Write a blog post for my website..."></textarea>
                                                    </div>

                                                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-semibold mb-2">Keywords</label>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid" placeholder="Store, Smoothie" name="keywords">
                                                        <!--end::Input-->
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>


                                                    <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container" data-select2-id="select2-data-122-xt5f">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="">Tone</span>
                                                        </label>
                                                        <!--end::Label-->
                                                
                                                        <!--begin::Select-->
                                                        <select name="tone" data-control="select2" data-placeholder="Select a tone..." class="form-select form-select-solid " data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                            <option value="Friendly" selected="">Friendly</option>
                                                            <option value="Conversational">Conversational</option>
                                                            <option value="Authoritative">Authoritative</option>
                                                            <option value="Professional">Professional</option>
                                                            <option value="Encouraging">Encouraging</option>
                                                            <option value="Supportive">Supportive</option>
                                                            <option value="Empathetic">Empathetic</option>
                                                        </select>
                                                    </div>

                                                    <div class="d-flex flex-column mb-5 fv-row fv-plugins-icon-container" data-select2-id="select2-data-122-xt5f">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="">Language</span>
                                                        </label>
                                                        <!--end::Label-->
                                                
                                                        <!--begin::Select-->
                                                        <select name="language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid " data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                            <option value="English" selected>English</option>
                                                            <option value="Arabic">Arabic</option>
                                                            <option value="Bengali">Bengali</option>
                                                            <option value="Chinese">Chinese</option>
                                                            <option value="Danish">Danish</option>
                                                            <option value="Dutch">Dutch</option>
                                                            <option value="Esperanto">Esperanto</option>
                                                            <option value="Finnish">Finnish</option>
                                                            <option value="French">French</option>
                                                            <option value="German">German</option>
                                                            <option value="Greek">Greek</option>
                                                            <option value="Hebrew">Hebrew</option>
                                                            <option value="Hindi">Hindi</option>
                                                            <option value="Hungarian">Hungarian</option>
                                                            <option value="Indonesian">Indonesian</option>
                                                            <option value="Italian">Italian</option>
                                                            <option value="Japanese">Japanese</option>
                                                            <option value="Korean">Korean</option>
                                                            <option value="Latin">Latin</option>
                                                            <option value="Latvian">Latvian</option>
                                                            <option value="Lithuanian">Lithuanian</option>
                                                            <option value="Macedonian">Macedonian</option>
                                                            <option value="Malay">Malay</option>
                                                            <option value="Norwegian">Norwegian</option>
                                                            <option value="Persian">Persian</option>
                                                            <option value="Polish">Polish</option>
                                                            <option value="Portuguese">Portuguese</option>
                                                            <option value="Romanian">Romanian</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="Slovak">Slovak</option>
                                                            <option value="Slovenian">Slovenian</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="Swahili">Swahili</option>
                                                            <option value="Swedish">Swedish</option>
                                                            <option value="Thai">Thai</option>
                                                            <option value="Turkish">Turkish</option>
                                                            <option value="Ukrainian">Ukrainian</option>
                                                            <option value="Urdu">Urdu</option>
                                                            <option value="Vietnamese">Vietnamese</option>
                                                            <option value="Welsh">Welsh</option>
                                                            <option value="Yiddish">Yiddish</option>
                                                            <option value="Albanian">Albanian</option>
                                                            <option value="Armenian">Armenian</option>
                                                            <option value="Azerbaijani">Azerbaijani</option>
                                                            <option value="Basque">Basque</option>
                                                            <option value="Catalan">Catalan</option>
                                                            <option value="Croatian">Croatian</option>
                                                            <option value="Czech">Czech</option>
                                                            <option value="Estonian">Estonian</option>
                                                            <option value="Galician">Galician</option>
                                                            <option value="Georgian">Georgian</option>
                                                            <option value="Icelandic">Icelandic</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class=" fs-5 fw-semibold mb-2">Word Limit</label>
                                                        <!--end::Label-->
                                            
                                                        <!--begin::Input-->
                                                        <input type="number" class="form-control form-control-solid" placeholder="500" name="word_input">
                                                        <!--end::Input-->
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>

                                                    <div class="col-md-6 d-flex flex-column mb-5 fv-row fv-plugins-icon-container" data-select2-id="select2-data-122-xt5f">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="">Output</span>
                                                        </label>
                                                        <!--end::Label-->
                                                
                                                        <!--begin::Select-->
                                                        <select name="output" data-control="select2" data-placeholder="Select a tone..." class="form-select form-select-solid " data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                            <option value="1" selected="">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                    </div>

                                                    
                                                    <div class="d-flex justify-content-start mt-1">
                                                        <button type="submit" class="btn btn-primary" id="kt_page_loading_overlay">Generate</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <!--end::Card body-->
                                
                                           
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-7">
                                @if(isset($generate))

                                <textarea class="tinymce-editor" name="content" id="myResult">{{ $generate }}</textarea>

                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('projectSave.chat')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden"  name="content" value="{{ $generate}}">
                                        <input type="hidden" name="title" value="{{ $title }}">
                                            <button type="submit" href="#" class="btn btn-sm fw-bold btn-primary mt-2">
                                            Save</button>
                                    </form>
                                </div>
                                @else

                                <h3>Your result will be shown here</h3>

                                @endif
                            </div>
                        </div>
						<!--end::Row-->		
   
					</div>
					<!--end::Content container-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Content wrapper-->
			
			<!--begin::Footer-->
				@include('user.layouts.footer')
			<!--end::Footer-->
		</div>
		<!--end:::Main-->
	</div>
	<!--end::Wrapper-->
</div>




{{-- Overlay Loading --}}
<script>
    // Toggle
const button = document.querySelector("#kt_page_loading_overlay");
// Handle toggle click event
button.addEventListener("click", function() {
    // Populate the page loading element dynamically.
    // Optionally you can skipt this part and place the HTML
    // code in the body element by refer to the above HTML code tab.
    const loadingEl = document.createElement("div");
    document.body.prepend(loadingEl);
    loadingEl.classList.add("page-loader");
    loadingEl.classList.add("flex-column");
    loadingEl.classList.add("bg-dark");
    loadingEl.classList.add("bg-opacity-25");
    loadingEl.innerHTML = `
        <span class="spinner-border text-primary" style="width:50px; height:50px;border-width:4px" role="status"></span>
        <span class="text-white-800 fs-6 fw-semibold mt-5" style="color:white !important; font-size:22px !important">Generating...</span>
    `;

    // Show page loading
    KTApp.showPageLoading();

    // Hide after 3 seconds
    setTimeout(function() {
        KTApp.hidePageLoading();
        loadingEl.remove();
    }, 500000);
});
</script>
@endsection