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
				<a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#get_started_modal">Get Started</a>
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
                                        <form action="{{ route('blog.generate')}}" method="POST" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
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
                                                        <select name="output" data-control="select2" data-placeholder="" class="form-select form-select-solid " data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
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

                                <div class="d-block justify-content-center" style="margin: 0;
                                position: relative;
                                top: 40%; text-align:center">
                                    <i class="bi bi-file-earmark" style="font-size: 30px;"></i>
                                    <h3 class="mt-1">No posts generated</h3>
                                    <p>Describe your topic to our AI to start <br>generating creative blog posts</p>
                                </div>

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
			

            {{-- Right toggle bar --}}
            <div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">	
                <!--begin::Help drawer toggle-->
                <button id="kt_expertise" class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0" title="Expertise of Klevere Chat" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Expertise</button>
                <!--end::Help drawer toggle-->
                <!--begin::Help drawer toggle-->
                <button id="" class="engage-help-toggle btn btn-primary engage-btn shadow-sm px-5 rounded-top-0" data-bs-target="#suggestions_modal" data-bs-toggle="modal">Suggestions</button>
                <!--end::Help drawer toggle-->
            </div>
			<!--begin::Footer-->
				@include('user.layouts.footer')
			<!--end::Footer-->
		</div>
		<!--end:::Main-->
	</div>
	<!--end::Wrapper-->
</div>









    {{-- Get started Modal --}}
    <div class="modal fade" tabindex="-1" id="get_started_modal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Start writing in 4 easy steps!</h2>
        
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">...</span>
                    </div>
                    <!--end::Close-->
                </div>
        
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body started-modal">
                                        
                                <i class="fonticon-content-marketing" style="font-size: 35px; color: #2468FF;"></i>
                                <h3 class="fw-bold fs-2 mb-2 mt-5">           
                                    Write               
                                </h3>
                        
                                <p class="fw-semibold fs-6">
                                Write any topic names or questions in the chat box by selecting tone and language and other options.        
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body started-modal">
                                    
                                <i class="fonticon-settings-1" style="font-size: 35px; color: #2468FF;"></i>
                                <h3 class="fw-bold fs-2 mb-2 mt-5">           
                                    Select                   
                                </h3>
                        
                                <p class="fw-semibold fs-6">
                                Select the options as per your needs for your language and tone to get the best results from Klevere.AI        
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-md-6">
                            <div class="card-body started-modal">
                                        
                                <i class="fonticon-send" style="font-size: 35px; color: #2468FF;"></i>
                                <h3 class="fw-bold fs-2 mb-2 mt-5">           
                                    Generate                   
                                </h3>
                        
                                <p class="fw-semibold fs-6">
                                Click on generate button and wait for the results within seconds!        
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body started-modal">
                                    
                                <i class="fonticon-bookmark" style="font-size: 35px; color: #2468FF;"></i>
                                <h3 class="fw-bold fs-2 mb-2 mt-5">           
                                    Save & Copy                   
                                </h3>
                        
                                <p class="fw-semibold fs-6">
                                After the generate save or copy your results for your use!        
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-light"><i class="bi bi-play-circle-fill" style="font-size: 18px;margin-top: -4px;"></i> Watch a demo</a>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Let's Go! 🚀</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end::Get started Modal --}}


    {{-- Suggestions Modal --}}
    <div class="modal fade" tabindex="-1" id="suggestions_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Prompt suggestions</h3>
    
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>
    
                <div class="modal-body">
                    <span class="badge badge-light-warning badge-lg">1. What is the longest river in the world?</span>
                    <span class="badge badge-light-warning badge-lg mt-5">2. What is the tallest mountain in the world?</span>
                    <span class="badge badge-light-warning badge-lg mt-5">3. What is the name of the largest ocean on Earth?</span>
                    <span class="badge badge-light-warning badge-lg mt-5">4. What is the capital city of the United States?</span>
                    <span class="badge badge-light-warning badge-lg mt-5">5. What is the most populous country in the world?</span>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Let's Go! 🚀</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end:: Suggestions Modal --}}


    {{-- Expertise Drawer --}}
    <!--begin::Ex drawer-->
		<div id="kt_expertise" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_expertise" data-kt-drawer-close="#kt_help_close">
			<!--begin::Card-->
			<div class="card shadow-none rounded-0 w-100">
				<!--begin::Header-->
				<div class="card-header" id="kt_help_header">
					<h5 class="card-title fw-semibold text-gray-600">Klevere.AI Chat Expertise</h5>
					<div class="card-toolbar">
						<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body" id="kt_help_body">
					<!--begin::Content-->
					<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body" data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
						
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-30px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
									<i class="fa-solid fa-brain expertise-icons" ></i>
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="#" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Powered by AI</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">The GPT-3 AI language model is nothing like you've seen before: natural, unique and creative.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
						<!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-30px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
								<i class="fa-solid fa-sliders expertise-icons"></i>
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="#" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Powerful settings</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">Adjust the creativity level or the tone of voice to generate the perfect copy for your business..</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
                        <!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-30px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                                <i class="fa-sharp fa-solid fa-gears expertise-icons"></i>
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="#" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">Optimized for conversions</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">The GPT-3 AI language model is nothing like you've seen before: natural, unique and creative.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
                        <!--begin::Link-->
						<div class="d-flex align-items-center mb-7">
							<!--begin::Icon-->
							<div class="d-flex flex-center w-30px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
									<i class="fa-solid fa-layer-group expertise-icons" ></i>
							</div>
							<!--end::Icon-->
							<!--begin::Info-->
							<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-column me-2 me-lg-5">
									<!--begin::Title-->
									<a href="#" class="text-dark text-hover-primary fw-bold fs-6 fs-lg-4 mb-1">7+ Available Tools</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-7 fs-lg-6">The GPT-3 AI language model is nothing like you've seen before: natural, unique and creative.</div>
									<!--end::Description-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Link-->
                        
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Help drawer-->
    {{-- end:: Expertise Drawer --}}
@endsection