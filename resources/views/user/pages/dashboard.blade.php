@extends('user.layouts.app')

@section('user-content')
{{-- Page --}}
<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::Header-->
    <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">



            <!--begin::Sidebar toggle-->
            @include('user.layouts.toggle')
            <!--end::Sidebar toggle-->


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
                    <h1 class="text-gray-900 fw-bolder m-0">Dashboard</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
                <span class="d-none d-sm-inline ps-2">Project</span></a>
                <!--end::Action-->
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>
    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                        <!--begin::Row-->
						<div class="row g-6 g-xl-9">
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="card-title pb-2"><h3>Recommended Avatars</h3></div>
                                <!--begin::Card-->
                                <a href="{{ route('marketing.chat') }}" class="card border-hover-primary">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9">
                                        <!--begin::Card Title-->
                                        <div class="card-title m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-80px w-50px bg-light">
                                                <img src="assets/media/avatars/300-13.jpg" alt="image" class="" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Name-->
                                        <div class="fs-3 fw-bold text-dark">Bryan</div>
                                        <!--end::Name-->
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1"><span class="badge badge-primary">Marketing</span></p>
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1">Ask your marketing questions and get your marketing plan.</p>
                                        <!--end::Description-->
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <a href="#" class="card border-hover-primary mt-5">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9">
                                        <!--begin::Card Title-->
                                        <div class="card-title m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-80px w-50px bg-light">
                                                <img src="assets/media/avatars/300-11.jpg" alt="image" class="" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Name-->
                                        <div class="fs-3 fw-bold text-dark">Aaron</div>
                                        <!--end::Name-->
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1"><span class="badge badge-primary">HR</span></p>
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1">Ask your HR questions and get your human resource issues fixed!</p>
                                        <!--end::Description-->
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-3">
                                <div class="card-title pb-2"><h3 style="color: transparent">Most used avatars</h3></div>
                                <!--begin::Card-->
                                <a href="#" class="card border-hover-primary">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9">
                                        <!--begin::Card Title-->
                                        <div class="card-title m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-80px w-50px bg-light">
                                                <img src="assets/media/avatars/300-15.jpg" alt="image" class="" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Name-->
                                        <div class="fs-3 fw-bold text-dark">Ryan</div>
                                        <!--end::Name-->
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1"><span class="badge badge-primary">Guidance Coach</span></p>
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1">Ask your questions and get your academic and career advice.</p>
                                        <!--end::Description-->
                                        
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->
                                <!--begin::Card-->
                                <a href="#" class="card border-hover-primary mt-5">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9">
                                        <!--begin::Card Title-->
                                        <div class="card-title m-0">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-80px w-50px bg-light">
                                                <img src="assets/media/avatars/300-17.jpg" alt="image" class="" />
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-2">
                                        <!--begin::Name-->
                                        <div class="fs-3 fw-bold text-dark">Sam</div>
                                        <!--end::Name-->
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1"><span class="badge badge-primary">Tech Specialist</span></p>
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-1">Ask your tech questions and get your tech advice and planning.</p>
                                        <!--end::Description-->
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 col-xl-6">
                                <div class="card-title pb-2"><h3>Earn Free Words!</h3></div>
                                <!--begin::Card-->
                                <a href="#" class="card border-hover-primary">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9 pb-0">
                                        <!--begin::Card Title-->
                                        <div class="card-title">
                                            <!--begin::Avatar-->
                                            Refer a friend!
                                            <!--end::Avatar-->
                                            
                                                <span class="badge badge-light-warning" style="margin-left: 10px">1000 Words!</span>
                                            
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-0">
                                        
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Share this tool with your friends and earn 1000 free words</p>
                                        <!--end::Description-->
                                        <div class="symbol symbol-80px w-50px">
                                            <i class="fonticon-send" style="font-size: 30px"></i>
                                        </div>
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->

                                <!--begin::Card-->
                                <a href="#" class="card border-hover-primary mt-5">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0 pt-9 pb-0">
                                        <!--begin::Card Title-->
                                        <div class="card-title">
                                            <!--begin::Avatar-->
                                            Share on Linkedin!
                                            <!--end::Avatar-->
                                            
                                                <span class="badge badge-light-warning" style="margin-left: 10px">1500 Words!</span>
                                            
                                        </div>
                                        <!--end::Car Title-->
                                        
                                    </div>
                                    <!--end:: Card header-->
                                    <!--begin:: Card body-->
                                    <div class="card-body pt-0">
                                        
                                        <!--begin::Description-->
                                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">Share this tool with your friends on Linkedin and earn 1500 free words</p>
                                        <!--end::Description-->
                                        <div class="symbol symbol-80px w-30px">
                                            <img src="assets/media/avatars/linkedin-icon.png" alt="image" class="w-40px h-40px" />
                                        </div>
                                        
                                    </div>
                                    <!--end:: Card body-->
                                </a>
                                <!--end::Card-->

                                
                                
                            </div>
                            <!--end::Col-->
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