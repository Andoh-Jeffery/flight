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
                        <h4 class="font-20 mb-20">Update Passenger</h4>

                        <!-- Form -->
                        <form action="/update-passenger/{{$passenger->id}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">First Name</label>
                                        <input type="text" class="theme-input-style" value="{{$passenger->first_name}}"
                                            name="first_name" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Last Name</label>
                                        <input type="text" class="theme-input-style" value="{{$passenger->last_name}}"
                                            name="last_name" required>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Address</label>
                                        <input type="text" class="theme-input-style" value="{{$passenger->address}}"
                                            name="address" required>
                                    </div>

                                    <!-- End Form Group -->
                                    <div class="form-group">
                                        <label class="font-14 bold mb-2">Phone</label>
                                        <input type="text" class="theme-input-style" value="{{$passenger->phone}}"
                                            name="phone" required>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn-block btn long">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                            </div>



                            <!-- Form Row -->

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