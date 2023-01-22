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
                        <li class="breadcrumb-item text-gray-600 fw-bold lh-1">Account overview</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder m-0">My Account</h1>
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
                            
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            <!--begin::Navbar-->
                            <div class="card mb-5 mb-xl-10">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                        <!--begin: Pic-->
                                        <div class="me-7 mb-4">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="assets/media/avatars/300-1.jpg" alt="image" style="width: 100px; height:100px" />
                                                
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
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
                                                        
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
                                                        <!--end::Svg Icon-->max@kt.com</a>
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
                                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Max Smith</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Company</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <span class="fw-semibold text-gray-800 fs-6">Keenthemes</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">044 3276 454 935</span>
                                            
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Company Site</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Country
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Germany</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Communication</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    
                                    
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::details View-->

                            <!--begin:: Edit profile-->
                            <!--begin::Basic info-->
								<div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Edit Account</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_profile_details" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_profile_details_form" class="form">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->
																<!--begin::Cancel-->
																<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																	<i class="bi bi-x fs-2"></i>
																</span>
																<!--end::Cancel-->
																<!--begin::Remove-->
																<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																	<i class="bi bi-x fs-2"></i>
																</span>
																<!--end::Remove-->
															</div>
															<!--end::Image input-->
															<!--begin::Hint-->
															<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
															<!--end::Hint-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Row-->
															<div class="row">
																<!--begin::Col-->
																<div class="col-lg-6 fv-row">
																	<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-lg-6 fv-row">
																	<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Contact Phone</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Country</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
																<option value="">Select a Country...</option>
																<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
																<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
																<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
																<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
																<option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
																<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
																<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
																<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
																<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
																<option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
																<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
																<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
																<option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
																<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
																<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
																<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
																<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
																<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
																<option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
																<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
																<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
																<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
																<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
																<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
																<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
																<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
																<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
																<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
																<option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
																<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
																<option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
																<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
																<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
																<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
																<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
																<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
																<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
																<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
																<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
																<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
																<option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
																<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
																<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
																<option data-kt-flag="flags/china.svg" value="CN">China</option>
																<option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
																<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
																<option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
																<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
																<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
																<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
																<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
																<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
																<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
																<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
																<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
																<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
																<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
																<option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
																<option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
																<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
																<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
																<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
																<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
																<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
																<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
																<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
																<option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
																<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
																<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
																<option data-kt-flag="flags/france.svg" value="FR">France</option>
																<option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
																<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
																<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
																<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
																<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
																<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
																<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
																<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
																<option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
																<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
																<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
																<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
																<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
																<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
																<option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
																<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
																<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
																<option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
																<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
																<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
																<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
																<option data-kt-flag="flags/india.svg" value="IN">India</option>
																<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
																<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
																<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
																<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
																<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
																<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
																<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
																<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
																<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
																<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
																<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
																<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
																<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
																<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
																<option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
																<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
																<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
																<option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
																<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
																<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
																<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
																<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
																<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
																<option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
																<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
																<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
																<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
																<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
																<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
																<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
																<option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
																<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
																<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
																<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
																<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
																<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
																<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
																<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
																<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
																<option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
																<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
																<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
																<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
																<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
																<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
																<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
																<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
																<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
																<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
																<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
																<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
																<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
																<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
																<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
																<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
																<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
																<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
																<option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
																<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
																<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
																<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
																<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
																<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
																<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
																<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
																<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
																<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
																<option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
																<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
																<option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
																<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
																<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
																<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
																<option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
																<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
																<option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
																<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
																<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
																<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
																<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
																<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
																<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
																<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
																<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
																<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
																<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
																<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
																<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
																<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
																<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
																<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
																<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
																<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
																<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
																<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
																<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
																<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
																<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
																<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
																<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
																<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
																<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
																<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
																<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
																<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
																<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
																<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
																<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
																<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
																<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
																<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
																<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
																<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
																<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
																<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
																<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
																<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
																<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
																<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
																<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
																<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
																<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
																<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
																<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
																<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
																<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
																<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
																<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
																<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
																<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
																<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
																<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													
													
													
													
													
												</div>
												<!--end::Card body-->
												<!--begin::Actions-->
												<div class="card-footer d-flex justify-content-end py-6 px-9">
													<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
													<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
								</div>
								<!--end::Basic info-->

                            <!--begin::Deactivate Account-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Deactivate Account</h3>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_deactivate" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_deactivate_form" class="form">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
														<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
																<div class="fs-6 text-gray-700">You are permanently deleting your account!
																
																</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--begin::Form input row-->
													<div class="form-check form-check-solid fv-row">
														<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
														<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
													</div>
													<!--end::Form input row-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer d-flex justify-content-end py-6 px-9">
													<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
												</div>
												<!--end::Card footer-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Deactivate Account-->
                            
                        </div>
                        
                        
                        
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