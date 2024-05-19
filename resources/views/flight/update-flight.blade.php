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
                        <form action="/add-driver" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Flight Number</label>
                                        <input type="text" class="theme-input-style" placeholder="Enter Flight Number"
                                            name="flight_num" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Origin</label>
                                        <input type="number" class="theme-input-style" placeholder="Origin"
                                            name="origin" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Destination</label>
                                        <input type="Number" class="theme-input-style" placeholder="Destination"
                                            name="destination" required>
                                    </div>

                                    <!-- End Form Group -->
                                </div>

                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Date</label>
                                        <input type="date" class="theme-input-style" placeholder="Date" name="date"
                                            required>
                                    </div>
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Departure Time</label>
                                        <input type="Number" class="theme-input-style" placeholder="Departure Time"
                                            name="dep_time" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Arrival Time</label>
                                        <input type="text" class="theme-input-style" placeholder="Arrival Time"
                                            name="Arrival Time">
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