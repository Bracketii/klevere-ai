@extends('user.layouts.app')

@section('user-content')
{{-- Page --}}
<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::Header-->
    <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">



            <!--begin::Sidebar toggle-->
            @include('admin.layouts.toggle')
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
                        <li class="breadcrumb-item text-gray-600 fw-bold lh-1">Bryan</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder m-0">Bryan</h1>
                    <h4 class="text-gray-400 fw-bolder m-0">Marketing Specialist</h4>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary d-flex flex-center h-35px h-lg-40px" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create
                <span class="d-none d-sm-inline ps-2">New</span></a>

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
                                    <div class="card" id="kt_chat_messenger">

                                        <!--begin::Card body-->
                                        <div class="card-body" id="kt_chat_messenger_body">
                                            <!--begin::Messages-->
                                            <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_app_header, #kt_app_toolbar, #kt_toolbar, #kt_footer, #kt_app_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_app_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px">



                                                <!--begin::Message(in)-->
                                                <div class="d-flex justify-content-start mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-35px symbol-circle">
                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::Details-->
                                                            <div class="ms-3">
                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Bryan</a>
                                                                <span class="text-muted fs-7 mb-1">Marketing Specialist</span>
                                                            </div>
                                                            <!--end::Details-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->
                                                        <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message">Type a message...</div>
                                                        <!--end::Text-->

                                                        @if (isset($generate))
                                                            <div class="p-5 mt-5 rounded bg-light-info text-dark fw-semibold mw-lg-700px text-start" data-kt-element="">


                                                                <form class="form-group" action="{{ route('SaveHistory')}}" method="POST">
                                                                    {{ csrf_field() }}
                                                                    <input class="form-control" style="width: 100%" type="text" name="title" value="{{ $title}}"><br>
                                                                    <input class="form-control" type="text" name="content" value="{{ $generate}}"><br>
                                                                    {{-- <p>{{ $title}}</p> --}}
                                                                    {{-- <p>{{ $generate}}</p> --}}

                                                                    <input class="btn btn-success" type="submit" value="save">

                                                                </form>
                                                            {{-- <p id="">

                                                                {{$generate}}

                                                            </p> --}}


                                                            </div>
                                                        @endif

                                                      </div>


                                                    <!--end::Text-->

                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Message(in)-->
                                                <!--begin::Suggestions-->
                                                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-end">
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Details-->
                                                            <div class="me-3">

                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">Suggestions</a>
                                                            </div>
                                                            <!--end::Details-->

                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Text-->

                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Message(template for out)-->
                                                <!--begin::Message(template for in)-->

                                                <!--end::Message(template for in)-->
                                            </div>
                                            <!--end::Messages-->
                                        </div>
                                        <!--end::Card body-->
                                        <!--begin::Card footer-->
                                        <form action="{{ route('marketing.result')}}" method="POST" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                                            {{ csrf_field() }}
                                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                                <!--begin::Input-->
                                                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message" name="text" type="text" ></textarea>
                                                <!--end::Input-->
                                                <!--begin:Toolbar-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <a href="#" class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                            <i class="bi bi-mic-fill fs-3"></i>
                                                        </a>
                                                        {{-- <a href="#" id="kt_help_toggle" class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                                                            <i class="bi bi-gear fs-3"></i>
                                                        </a> --}}
                                                        <select name="language" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid " data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1" style="margin-left: 10px">
                                                            <option selected>Language</option>
                                                            <option value="English">English</option>
                                                            <option value="French">French</option>
                                                            <option value="Russian">Russian</option>
                                                        </select>
                                                        <select name="tone" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid" data-select2-id="select2-data-1-o0c1" tabindex="-1" aria-hidden="true" data-kt-initialized="1" style="margin-left: 10px">
                                                            <option selected>Tone</option>
                                                            <option value="Friendly">Friendly</option>
                                                            <option value="Conversational">Conversational</option>
                                                            <option value="Enthusiastic">Enthusiastic</option>
                                                        </select>

                                                    </div>
                                                    <!--end::Actions-->
                                                    <!--begin::Send-->

                                                    <button name="submit" class="btn btn-primary" type="submit" data-kt-element="send" id="generate-button">

                                                        <span class="indicator-label">
                                                            Send
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </button>

                                        </form>

                                                <!--end::Send-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>

                                        <!--end::Card footer-->
                                    </div>
                                    <div class="card mt-15">
                                        <div class="card-body">
                                            <div class="d-inline pt-5" style="margin-top: 30px !important">
                                                <div class="me-3">
                                                    <a href="" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">Suggestions</a>
                                                </div>
                                                <span class="badge badge-secondary badge-lg m-1">1. What strategies can we use to better engage our customers in our language and tone?</span>
                                                <span class="badge badge-secondary badge-lg m-1">2. How can we create an effective marketing campaign to target our desired demographic?</span>
                                                <span class="badge badge-secondary badge-lg m-1">3. What are some innovative ideas that we can use to create a memorable message in our chosen language and tone?</span>
                                            </div>
                                        </div>
                                    </div>

									<!--end::Row-->


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
