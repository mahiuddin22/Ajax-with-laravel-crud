<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

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



                        <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto@gmeil.com</td>
                            <td>head</td>
                            <td>+8801610440622</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-title p-2">
                        <span id="addT">Add New Teacher</span>
                        <span id="updateT">Update New Teacher</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label for="position">Position:</label>
                                    <input type="text" id="position" name="position" class="form-control" placeholder="Position">
                                </div>
                                <div class="col">
                                    <label for="phone">Phone:</label>
                                    <input type="text" id="phone" name="password" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-4">
                                    <input type="submit" id="addButton" class="form-control btn btn-primary" value="Add">
                                    <input type="submit" id="updateButton" class="form-control btn btn-primary" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        $("#addButton").show();
        $("#updateButton").hide();
        $("#addT").show();
        $("#updateT").hide();

        //Setup Ajax-----
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        //Read Data----------
        function allData() {
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "/teachers/all",
                success: function(information) {
                    let data = "";
                    $.each(information, function(key, value) {
                        data = data + "<tr>"
                        data = data + "<td>" + value.id + "</td>"
                        data = data + "<td>" + value.name + "</td>"
                        data = data + "<td>" + value.email + "</td>"
                        data = data + "<td>" + value.position + "</td>"
                        data = data + "<td>" + value.phone + "</td>"
                        data = data + "<td>"
                        data = data+ "<button class='btn btn-info btn-sm'>Edit</button>"
                        data = data+ "<button class='btn btn-danger btn-sm'>Delete</button>"
                        data = data + "</td>"
                        data = data + "</tr>"
                    });
                    $("tbody").html(data);
                }
            })
        }
        allData();
    </script>
</body>

</html>