@extends('users.admin.layouts.master')
@section('content')
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Dashboard</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">

                        <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                           data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                            <span class="kt-subheader__btn-daterange-date"
                                  id="kt_dashboard_daterangepicker_date">{{date('D, d M Y')}}</span>
                            <i class="flaticon2-calendar-1"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
           <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <!--begin:: Widgets/Trends-->
                    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                    Pending appointments
                            </h3>
                            </div>
                        
                        </div>
                    </div>
                    <!--end:: Widgets/Trends-->    
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <!--begin:: Widgets/Trends-->
                    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                            Confirmed appointments
                            </h3>
                            </div>
                        
                        </div>
                    </div>
                    <!--end:: Widgets/Trends-->    
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <!--begin:: Widgets/Trends-->
                    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Treated appointments
                            </h3>
                            </div>
                        
                        </div>
                    </div>
                    <!--end:: Widgets/Trends-->    
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                    <!--begin:: Widgets/Trends-->
                    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Cancelled appointments
                            </h3>
                            </div>
                        
                        </div>
                    </div>
                    <!--end:: Widgets/Trends-->    
                </div>
           </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->
@endsection
