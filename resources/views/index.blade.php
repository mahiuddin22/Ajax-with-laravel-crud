<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Ajax | Laravel</title>
</head>

<body>


    <div class="container">
        <div class="row bg-secondary text-light my-5">
            <div class="card-body text-center">
                <h1>Ajax Tutorial With Laravel 9</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h4 class="py-2">List of Teachers</h4>
                <a href="" class="btn btn-info my-3" data-bs-toggle="modal" id="addmodal" data-bs-target="#exampleModal">Add Teacher</a>
                <input type="text" class="form-control mb-2 py-2" name="search" id="search" placeholder="search someone here...">
                <div class="table-data">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Position</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $key=>$teacher)
                            <tr>
                                <th scope="row">{{$teacher->id}}</th>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->position}}</td>
                                <td>{{$teacher->phone}}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$teachers->links();}}
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-title p-2">
                        <span id="addT">Add New Teacher</span>
                        <span id="updateT">Update New Teacher</span>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('add_product_modal')
    @include('script_js')
</body>

</html>