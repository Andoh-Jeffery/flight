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
        <!-- Sidebar -->
        @extends('layouts.sidebar')
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <!-- Base Horizontal Form With Icons -->
                    <div class="form-element py-30 multiple-column">
                        <h4 class="font-20 mb-20">Update Flight</h4>

                        <!-- Form -->
                        <form action="/update-flight/{{$flight->id}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <select name="aircraft_id" id="" class="theme-input-style">
                                        <option value="#" default>{{$flight->aircraf}}</option>
                                        <option value="{{$aircraft->id}}" default>{{$aircraft->serial_number}}
                                        </option>
                                    </select>

                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Flight Number</label>
                                        <input type="text" class="theme-input-style" value="{{$flight->flight_num}}"
                                            name="flight_num" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Origin</label>
                                        <input type="text" class="theme-input-style" value="{{$flight->origin}}"
                                            name="origin" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Destination</label>
                                        <input type="text" class="theme-input-style" value="{{$flight->destination}}"
                                            name="destination" required>
                                    </div>

                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Date</label>
                                        <input type="date" class="theme-input-style" value="{{$flight->date}}"
                                            name="date" required>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Departure Time</label>
                                        <input type="text" class="theme-input-style" value="dep_time" name="dep_time"
                                            required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Arrival Time</label>
                                        <input type="text" class="theme-input-style" value="{{$flight->arr_time}}"
                                            name="arr_time">
                                        <!-- <select name="mstatus" id="" class="theme-input-style" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select> -->
                                    </div>

                                </div>
                            </div>



                            <!-- Form Row -->
                            <div class="form-row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn long">Submit</button>
                                </div>
                            </div>
                            <!-- End Form Row -->
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Horizontal Form With Icons -->
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