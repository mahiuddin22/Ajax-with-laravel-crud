<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('#addmodal').on('click', function(event) {
        $('#exampleModal').modal('show');
        event.preventDefault();
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function() {


        $(".add_teacher").on('click', function(event) {
            event.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var position = $("#position").val();
            var phone = $("#phone").val();
            var password = $("#password").val();

            $.ajax({
                method: "post",
                url: "http://127.0.0.1:8000/add/teacher",
                data: {
                    name: name,
                    email: email,
                    position: position,
                    phone: phone,
                    password: password
                },
                success: function(res) {
                    if (res.status == 'success') {
                        $("#exampleModal").modal('hide');
                        $("#modalform")[0].reset();
                        $(".table").load(location.href + ' .table');
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $(".errorMessage").append('<span class="text-danger">' + value + '</span><br>');
                    });
                }
            });

        });

        $(document).on('click', ' .pagination a', function(event) {
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1];
            teacher(page)
        });

        function teacher(page) {
            $.ajax({
                url: "pagination/paginate-data?page=" + page,
                success: function(res) {
                    $(".table-data").html(res);
                }
            });
        }

        $(document).on('keyup', function(event) {
            event.preventDefault();
            let searchString = $("#search").val();

            $.ajax({
                url: "{{route('search')}}",
                method: "GET",
                data: {
                    searchString: searchString
                },
                success:function(res){
                    $(".table-data").html(res);
                    if(res.status == 'nothing'){
                        $(".table-data").html('<br><span class="text-danger text-center border-top border-bottom mt-3 p-2"> Sorry, No Match Found </span>')
                    }
                }
            });
        });


    });
</script>