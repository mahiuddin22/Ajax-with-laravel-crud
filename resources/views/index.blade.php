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


    <div class="container-fluid">
        <div class="row">

            <div class="wrapper col-2 bg-dark text-light">

                <nav id="sidebar">
                    <div class="sidebar-header py-2">
                        <img src="{{asset('images/thumb.jpg')}}" class="rounded-circle" height="50" width="50" alt="defaul.png">
                        <strong class="mx-2">Sidebar, Admin</strong>
                    </div>

                    <ul class="list-unstyled components">
                        <system>Menu Items</system>
                        <li class="active">
                            <a href="#Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Something</a>
                            <ul class="collapse list-unstyled text-light" id="Submenu">
                                <li>
                                    <a href="#">something 1</a>
                                </li>
                                <li>
                                    <a href="#">something 2</a>
                                </li>
                                <li>
                                    <a href="#">something 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </div>

            <div class="col-10">
                <div class="row text-light" style="background-color: #3786cd;">
                    <div class="card-body text-center">
                        <h4>Ajax Tutorial With Laravel 9</h4>
                    </div>
                </div>
                <div class=" row">
                    <span style="height: 3px; width:35%; background-color:#c52e3c; border-radius: 0 5px 5px 0"></span>
                </div>
                <h4 class="py-2">List of Teachers</h4>
                <a href="" class="btn btn-info my-3" data-toggle="modal" data-target="#addTmodal">Add Teacher</a>
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
                                    <a href="" class="btn btn-info btn-sm" id="update_teacher"
                                    data-toggle="modal"
                                    data-target="#updateTmodal"
                                    data-id          = "{{$teacher->id}}"
                                    data-name        = "{{$teacher->name}}"
                                    data-email       = "{{$teacher->email}}"
                                    data-position    = "{{$teacher->position}}"
                                    data-phone       = "{{$teacher->phone}}"
                                    data-password    = "{{$teacher->password}}"
                                    >Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$teachers->links();}}
                </div>
            </div>
        </div>
    </div>

    @include('add_product_modal')
    @include('update_product_modal')
    @include('script_js')
</body>

</html>