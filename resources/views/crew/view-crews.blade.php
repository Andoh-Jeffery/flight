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
                                <h4 class="font-20 ">crews</h4>
                            </div>
                            <div class="table-responsive">
                                <!-- Invoice List Table -->
                                <table class="text-nowrap dh-table" id="example" class="display">
                                    <thead class="text_color-bg text-white">
                                        <tr>
                                            <th>Employee Number</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Salary</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($crews as $crew)
                                        <tr>
                                            <td>{{$crew->employee_number}}</td>
                                            <td>{{$crew->first_name}}</td>
                                            <td>{{$crew->last_name}}</td>
                                            <td>{{$crew->address}}</td>
                                            <td>${{$crew->salary}}</td>
                                            <td>
                                                <div class="icon" style="padding:20px">
                                                    <a class="material-icons" title="view"
                                                        href="/crew-details/{{$crew->id}}">visibility</a>
                                                </div>

                                                <div class="icon" style="padding:20px">
                                                    <a class="material-icons" title="edit"
                                                        href="/update-crew/{{$crew->id}}">edit</a>
                                                </div>

                                                <div class="icon">
                                                    <form action="/delete-crew/{{$crew->id}}" method="POST">
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