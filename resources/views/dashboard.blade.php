@extends('layouts.layout')
@section('content')
<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">

    @extends('layouts.header')

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        @extends('layouts.sidebar')
        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-8">
                        <!-- Card -->
                        <div class="card mb-30">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="increase">
                                        <div class="card-title d-flex align-items-end mb-2">
                                            <h2>86<sup>%</sup></h2>
                                            <p class="font-14">Increased</p>
                                        </div>
                                        <h3 class="card-subtitle mb-2">Congratulation!</h3>
                                        <p class="font-16">You've finished all of your tasks for this week.</p>
                                    </div>
                                    <div class="congratulation-img">
                                        <img src="assets/img/media/congratulation-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <!-- Card -->
                        <div class="card area-chart-box mb-30">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 class="mb-1">Income</h4>
                                        <p class="font-14 c3">Increase in Average</p>
                                    </div>
                                    <div class="">
                                        <h2>50<sup>%</sup></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="apex_area-chart"></div>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <!-- Card -->
                        <div class="card area-chart-box mb-30">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <h4 class="mb-1">Profit Report</h4>
                                        <p class="font-14 soft-pink">Decrease in Average</p>
                                    </div>
                                    <div class="">
                                        <h2>15<sup>%</sup></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="apex_area2-chart"></div>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <!-- Card -->
                        <div class="card area-chart-box mb-30">
                            <div class="card-body">
                                <div class="">
                                    <h4 class="mb-1">Impression</h4>
                                    <!-- <p class="font-14 text_color">Hover to see detail</p> -->
                                </div>
                            </div>
                            <div id="apex_area3-chart"></div>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <!-- Card -->
                        <div class="card area-chart-box mb-30">
                            <div class="card-body">
                                <div class="">
                                    <h4 class="mb-1">Activity</h4>
                                    <!-- <p class="font-14 text_color">Hover to see detail</p> -->
                                </div>
                            </div>
                            <div id="apex_area4-chart"></div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Card -->
                                <div class="card mb-30">
                                    <div class="card-body d-flex justify-content-between mb-n72">
                                        <div class="position-relative index-9">
                                            <h4 class="mb-1">Insurance Analytics</h4>
                                            <!-- <p class="font-14">Check out each column for more details</p> -->
                                        </div>

                                        <!-- Dropdown Button -->
                                        <div class="dropdown-button">
                                            <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                                <div class="menu-icon style--two mr-0">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#">Daily</a>
                                                <a href="#">Sort By</a>
                                                <a href="#">Monthly</a>
                                            </div>
                                        </div>
                                        <!-- End Dropdown Button -->

                                    </div>
                                    <div id="apex_column-chart"></div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- Card -->
                                <div class="card mb-30 progress_1">
                                    <div class="card-body">
                                        <h4 class="progress-title">Drivers</h4>

                                        <div class="ProgressBar-wrap position-relative mb-4">
                                            <div class="ProgressBar ProgressBar_1" data-progress="75">
                                                <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <!-- on défini le l'angle et le centre de rotation du cercle -->
                                                    <circle transform="rotate(135, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100" r="8" />
                                                    <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle"
                                                        cx="100" cy="100" r="85" />
                                                </svg>
                                                <span class="ProgressBar-percentage--text">
                                                    Cars
                                                </span>
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap mb-2 progress-info">
                                            <div></div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg"> 2.6k
                                            </div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">568
                                            </div>
                                        </div>


                                        <div class="d-flex flex-wrap progress-info">
                                            <div></div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                            </div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">25
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <!-- Card -->
                                <div class="card mb-30 progress_2">
                                    <div class="card-body">
                                        <h4 class="progress-title">Claims</h4>

                                        <div class="ProgressBar-wrap position-relative mb-4">
                                            <div class="ProgressBar ProgressBar_2" data-progress="35">
                                                <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <!-- on défini le l'angle et le centre de rotation du cercle -->
                                                    <circle transform="rotate(135, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100" r="85" />
                                                    <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle"
                                                        cx="100" cy="100" r="85" />
                                                </svg>
                                                <span class="ProgressBar-percentage--text">Increase</span>
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap mb-2 progress-info">
                                            <div> </div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg"> 268k
                                            </div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">89k
                                            </div>
                                        </div>


                                        <div class="d-flex flex-wrap progress-info">
                                            <div></div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                            </div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">1.5k
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <!-- Card -->
                                <div class="card mb-30 progress_3 mr-0">
                                    <div class="card-body">
                                        <h4 class="progress-title">Cars</h4>

                                        <div class="ProgressBar-wrap position-relative mb-4">
                                            <div class="ProgressBar ProgressBar_3" data-progress="70">
                                                <svg class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <!-- on défini le l'angle et le centre de rotation du cercle -->
                                                    <circle transform="rotate(135, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100" r="85"
                                                        stroke-width="20" />
                                                    <circle transform="rotate(135, 100, 100)" class="ProgressBar-circle"
                                                        cx="100" cy="100" r="85" stroke-width="20" />
                                                </svg>
                                                <span class="ProgressBar-percentage--text"> Increase </span>
                                                <span
                                                    class="ProgressBar-percentage ProgressBar-percentage--count"></span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap mb-2 progress-info">
                                            <div></div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg">15</div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">3</div>
                                        </div>


                                        <div class="d-flex flex-wrap progress-info">
                                            <div></div>
                                            <div><img src="assets/img/svg/caret-up.svg" alt="" class="svg">1.26k
                                            </div>
                                            <div><img src="assets/img/svg/caret-down.svg" alt="" class="svg">1.2k
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="row">
                            <div class="col-sm-6">

                            </div>




                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Main Wrapper -->
</div>
<!-- End wrapper -->

@endsection