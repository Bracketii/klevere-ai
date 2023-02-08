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
                        <div class="card">     
                            <!--begin::Body-->
                            <div class="card-body p-lg-17">
                                <!--begin::Hero-->
                        <div class="position-relative mb-17">
                            <!--begin::Overlay-->
                              
                            <!--end::Overlay-->  
                        
                            <!--begin::Heading-->
                              
                            <!--end::Heading-->  
                        </div>
                        <!--end::-->
                        
                         
                        
                         
                        
                         
                        
                         
                           
                                
                                <!--begin::Layout-->
                                <div class="d-flex flex-column flex-lg-row mb-17">
                                    <!--begin::Content-->
                                    <div class="flex-lg-row-fluid me-0 me-lg-20">
                                 @include('errors')       
                        <!--begin::Form-->
                        <form action="{{ route('EditProject',$histories->id) }}" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="kt_careers_form">
                            {{ csrf_field() }}
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5">
                                <label class="fs-6 fw-semibold mb-2" >title</label>
                        
                                <textarea class="form-control form-control-solid" rows="2" name="title" value="" placeholder="">     {{ $histories->title }}   </textarea>
                            </div>
                            <!--end::Input group-->
                        
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8">
                                <label class="fs-6 fw-semibold mb-2" >content</label>
                        
                                <textarea class="form-control form-control-solid" rows="4" name="content" value="" placeholder="">    {{ $histories->content }}    </textarea>
                            </div>
                            <!--end::Input group-->    
                        
                            <!--begin::Separator-->
                            <div class="separator mb-8"></div>
                            <!--end::Separator-->
                        
                            <!--begin::Submit-->
                            <button type="submit" class="btn btn-primary" name="submit" value="Apply Now" id="kt_careers_submit_button">
                                
                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                            Apply Now</span>
                        <!--end::Indicator label-->
                        
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                            Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                        <!--end::Indicator progress-->    </button>
                            <!--end::Submit-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Job-->
                        
                        <!--end::Job-->
                            
                         
                             
                                    </div>  
                                    <!--end::Content-->
                        
                                    
                                    <!--end::Sidebar-->
                                </div>
                                <!--end::Layout-->    
                                
                                <!--begin::Section-->
                        
                       
                                
                                <!--begin::Card-->
                        
                        <!--end::Card-->       
                            </div>
                            <!--end::Body-->
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