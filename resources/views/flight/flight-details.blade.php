@extends('layouts.layout')
@section('content')
<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">
    <!-- Header -->
    @extends('layouts.header')
    <div class="main-wrapper">
        @extends('layouts.sidebar')
        <div class="main-content d-flex flex-column flex-md-row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div
                            class="invoice-details-header bg-white d-flex align-items-sm-center flex-column flex-sm-row mb-30 justify-content-sm-between">
                            <div class="d-flex align-items-center">

                                <h2 class="regular mr-3 font-30">Flight Details</h2>
                                <h4 class="c4">#{{$flight->flight_number}}</h4>
                            </div>


                        </div>
                        <!-- End Invoice Header -->

                        <!-- Invoice Top -->
                        <div class="invoice-pd c2-bg" data-bg-img="/assets/img/media/invoice-pattern.png">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Invoice Left -->
                                    <div class="invoice-left">
                                        <div class="logo mb-3"><img src="/assets/img/moblogo.jpg" alt="" width="50px"
                                                height="auto">
                                        </div>

                                        <ul class="list-invoice">
                                            <li class="location">Capital Airways</li>
                                            <li class="call">
                                                <a href="tel:+01234567891">##########</a> <br />
                                                <a href="tel:+01234567891">##########</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Invoice Left -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Invoice Right -->
                                    <div class="invoice-right mt-5 mt-md-0">
                                        <!-- <h3 class="white font-20 mb-3">Invoice</h3> -->

                                        <ul class="status-list">
                                            <li><span class="key font-14">Flight Number: </span> <span
                                                    class="white bold font-17"> {{$flight->flight_number}}</span></li>
                                            <li><span class="key font-14">Origin: </span> <span
                                                    class="white bold font-17">{{$flight->origin}}</span></li>
                                            <li><span class="key font-14">Destination: </span> <span
                                                    class="white bold font-17">{{$flight->destination}}</span></li>
                                            <li><span class="key font-14">Date: </span> <span
                                                    class="white bold font-17">{{$flight->date}}</span></li>
                                            <li><span class="key font-14">Departure Time: </span> <span
                                                    class="white bold font-17"> {{$flight->dep_time}}</span></li>
                                            <li><span class="key font-14">Arrival Time: </span> <span
                                                    class="white bold font-17"> {{$flight->arr_time}}</span></li>
                                            <!-- <li><span class="key font-14">Departure Time: </span> <span
                                                    class="white status-btn completed">Completed</span></li> -->
                                        </ul>
                                    </div>
                                    <!-- End Invoice Right -->
                                </div>
                            </div>
                        </div>
                        <!-- ========== -->
                        <div class="bg-white invoice-pd">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <!-- Invoice Form -->
                                    <div class="invoice invoice-form">
                                        <div class="invoice-title c4 bold font-14 mb-3">Crew Members</div>

                                        <ul class="list-invoice">
                                            @foreach($crew as $crew)
                                            <li class="user bold black font-17">{{$crew->first_name}}
                                                {{$crew->last_name}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End Invoice Form -->
                                </div>
                                <div class="col-xl-4 col-md-6">

                                </div>

                            </div>
                        </div>
                        <!-- ========== -->
                        <div class="bg-white details-list-wrap">
                            <div class="table-responsive">
                                <!-- Invoice List Table -->
                                <table class="invoice-list-table style-two some-center text-nowrap display"
                                    id="example">
                                    <thead>
                                        <tr>

                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white">
                                        @foreach($passengers as $passenger)
                                        <tr>
                                            <td>{{$passenger->first_name}}</td>
                                            <td>{{$passenger->last_name}}</td>
                                            <td>{{$passenger->address}}</td>
                                            <td>{{$passenger->phone}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Main Wrapper -->


    @endsection