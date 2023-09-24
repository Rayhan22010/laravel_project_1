@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <div class="container">

{{--        start modal--}}
        <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editmodalLabel">Edit Record</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('update-information')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @method('post')
                        <input type="hidden" name="s_id" id="s_id">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value="" class="form-control" id="address" aria-describedby="emailHelp"
                                       name="address">
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" value="" class="form-control" id="city" aria-describedby="emailHelp"
                                       name="city">
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">state</label>
                                <input type="text" value="" class="form-control" id="state" aria-describedby="emailHelp"
                                       name="state">
                            </div>
                        </div>
                        <div class="modal-footer d-block mr-auto">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

{{--        end modal--}}

        <div class="text-center position-relative" style="padding-top: 4rem" >
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @elseif(session()->has('delete-message'))

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{session()->get('delete-message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
        <form action="{{route('info.store')}}" method="post" enctype="multipart/form-data" class="row g-3 position-relative" style="padding-top: 2rem">
            @csrf
            <div class="col-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter the email">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>

            <div class="col-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
            </div>
            <div class="col-6">
                <label for="inputState" class="form-label">State</label>
                <input type="text" name="state" class="form-control" id="state">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
        </form>

        <div class="row mt-5">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">address</th>
                    <th scope="col">city</th>
                    <th scope="col">state</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($value as $data)
                    <tr>
                        <td>{{$data->email}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->city}}</td>
                        <td>{{$data->state}}</td>
                        <td>
                            <button value="{{$data->id}}" class="btn btn-warning btn-sm editbtn">Edit</button>
{{--                            <a href="{{route('info.edit', $data->id)}}" class="btn btn-warning btn-sm">Edit</a>--}}
                            <a href="{{route('delete.info', $data->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@section('page-js')
    <script>
        $(document).ready(function(){
            $(document).on('click','.editbtn',function (){
                var s_id = $(this).val();
                $('#editmodal').modal('show');
                $.ajax({
                    type:"GET",
                    url: "/edit-information/"+s_id,
                    data: "data",
                    success: function (response){
                            $('#address').val(response.data.address);
                            $('#city').val(response.data.city);
                            $('#state').val(response.data.state);
                            $('#s_id').val(s_id);
                    }

                });
            });
        });
    </script>

@endsection
