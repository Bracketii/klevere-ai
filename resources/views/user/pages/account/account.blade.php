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
					<li class="breadcrumb-item text-gray-600 fw-bold lh-1">User Dashboard</li>
					<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
					<!--begin::Title-->
					<h1 class="text-gray-900 fw-bolder m-0">My Account</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
				<!--begin::Action-->
				{{-- <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
				<span class="d-none d-sm-inline ps-2">Project</span></a> --}}
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
						<div id="kt_app_content_container" class="app-container container-fluid pt-10">
                            <!--begin::Navbar-->
                            <div class="card mb-5 mb-xl-10">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px me-5 mt-5">
												<span class="bg-primary w-px-60 h-px-60 rounded" style="font-size:16px; padding:20px 25px;color:#fff">{{Auth::guard('web') -> user()->firstname[0] }}</span>
											</div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <!--begin::Title-->
                                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                <!--begin::User-->
                                                <div class="d-flex flex-column">
                                                    <!--begin::Name-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::guard('web') -> user()->firstname }} {{Auth::guard('web') -> user()->lastname }}</a>
                                                        
                                                    </div>
                                                    <!--end::Name-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                                                <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                                                <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->user</a>
                                                        
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                        <span class="svg-icon svg-icon-4 me-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{Auth::guard('web') -> user()->email }}</a>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                                
                                            </div>
                                            <!--end::Title-->
                                            
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Navbar-->
                            <!--begin::details View-->
                            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Profile Details</h3>
                                    </div>
                                    <!--end::Card title-->
                                    
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-9">
                                    <!--begin::Row-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">First Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">{{Auth::guard('web') -> user()->firstname }}</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Last Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="fw-semibold text-gray-800 fs-6">{{Auth::guard('web') -> user()->lastname }}</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{Auth::guard('web') -> user()->email }}</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

									<!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Payment Status</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
										{{-- We have to add the payment status here paid or unpaid --}}
                                        <div class="col-lg-8">
                                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{Auth::guard('web') -> user()->pm_type }}</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    
                                    
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::details View-->

                         
    
                            
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
	
@endsection










