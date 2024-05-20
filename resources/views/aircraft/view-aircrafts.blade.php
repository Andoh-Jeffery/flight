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
                    <div class="col-12">
                        <div class="card mb-30">
                            <div class="card-body pt-30">
                                <h4 class="font-20 ">Drivers</h4>
                            </div>
                            <div class="table-responsive">
                                <!-- Invoice List Table -->
                                <table class="text-nowrap dh-table" id="example" class="display">
                                    <thead class="text_color-bg text-white">
                                        <tr>
                                            <th>Serial Numbeer</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aircrafts as $aircraft)
                                        <tr>
                                            <td>{{$aircraft->serial_number}}</td>
                                            <td>{{$aircraft->manufacturer}}</td>
                                            <td>{{$aircraft->model}}</td>
                                            <td>
                                                <div class="icon" style="padding:20px">
                                                    <a class="material-icons" title="edit"
                                                        href="/update-aircraft/{{$aircraft->id}}">build</a>
                                                </div>
                                                <div class="icon">
                                                    <form action="/delete-aircraft/{{$aircraft->id}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="material-icons"
                                                            title="delete">delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Invoice List Table -->
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