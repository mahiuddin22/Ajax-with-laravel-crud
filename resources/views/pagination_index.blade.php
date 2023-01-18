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
                <a href="" class="btn btn-info btn-sm update_teacher" data-toggle="modal" data-target="#updateTmodal" data-id="{{$teacher->id}}" data-name="{{$teacher->name}}" data-email="{{$teacher->email}}" data-position="{{$teacher->position}}" data-phone="{{$teacher->phone}}" data-password="{{$teacher->password}}">Edit</a>
                <a href="" class="btn btn-danger btn-sm delete_teacher" data-id="{{$teacher->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$teachers->links();}}