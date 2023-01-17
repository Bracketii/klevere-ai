@extends('user.layouts.app')
@section('main')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            
            
            <!--begin::Toolbar-->
			<div class="d-flex flex-wrap flex-stack my-5">
                <!--begin::Heading-->
                <h2 class="fs-2 fw-semibold my-2">My Projects</h2>
                <!--end::Heading-->

            </div>
            <!--end::Toolbar-->
            <!--begin::Row-->
            <div class="row g-6 g-xl-9">
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark">Fitnes App</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2022</div>
                                    <div class="fw-semibold text-gray-400">Due Date</div>
                                </div>
                                <!--end::Due-->
                                <!--begin::Budget-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
                                    <div class="fw-semibold text-gray-400">Budget</div>
                                </div>
                                <!--end::Budget-->
                            </div>
                            <!--end::Info-->
                            
                            
                        </div>
                        <!--end:: Card body-->
                    </a>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 col-xl-4">
                    <!--begin::Card-->
                    <a href="../../demo1/dist/apps/projects/project.html" class="card border-hover-primary">
                    
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark">Fitnes App</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">CRM App application to HR efficiency</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">Jun 24, 2022</div>
                                    <div class="fw-semibold text-gray-400">Due Date</div>
                                </div>
                                <!--end::Due-->
                                <!--begin::Budget-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">$284,900.00</div>
                                    <div class="fw-semibold text-gray-400">Budget</div>
                                </div>
                                <!--end::Budget-->
                            </div>
                            <!--end::Info-->
                            
                            
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
    
@endsection