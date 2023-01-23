<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<!-- <script>
    $('#addmodal').on('click', function(event) {
        $('#addTmodal').modal('show');
        event.preventDefault();
    });
    $('#updateTmodal').on('click', function(event) {
        $('#updateTmodal').modal('show');
        event.preventDefault();
    });
</script> -->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
</script>

<script>
    $(document).ready(function() {

        $(document).on('click', ".add_teacher", function(event) {
            event.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var position = $("#position").val();
            var phone = $("#phone").val();
            var password = $("#password").val();

            $.ajax({
                method: "post",
                url: "{{route('store')}}",
                data: {
                    name: name,
                    email: email,
                    position: position,
                    phone: phone,
                    password: password,
                },
                success: function(res) {
                    if (res.status == 'success') {
                        $("#addTmodal").modal('hide');
                        $("#addTmodalform")[0].reset();
                        $(".table").load(location.href + ' .table');
                        Command: toastr["success"]("Teacher Added");
                        toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                    }
                },
                error: function(err) {
                    console.log(err);
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value) {
                        $("#errorMessage").append('<span class="text-danger">' + value + '</span>' + '<br>');
                    });
                }
            });

        });


        //Show Teacher's Informations for update
        $(document).on('click', '.update_teacher', function() {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let email = $(this).data('email');
            let position = $(this).data('position');
            let phone = $(this).data('phone');
            let password = $(this).data('password');

            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_email').val(email);
            $('#up_position').val(position);
            $('#up_phone').val(phone);
            $('#up_password').val(password);


            //Update Teacher's Information
            $(document).on('click', ".up_submit", function(event) {
                event.preventDefault();
                var up_id = $("#up_id").val();
                var up_name = $("#up_name").val();
                var up_email = $("#up_email").val();
                var up_position = $("#up_position").val();
                var up_phone = $("#up_phone").val();
                var up_password = $("#up_password").val();

                $.ajax({
                    method: "post",
                    url: "{{route('update.teacher')}}",
                    data: {
                        up_id: up_id,
                        up_name: up_name,
                        up_email: up_email,
                        up_position: up_position,
                        up_phone: up_phone,
                        up_password: up_password,
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            $("#updateTmodal").modal('hide');
                            $("#updateTmodalform")[0].reset();
                            $(".table").load(location.href + ' .table');
                            Command: toastr["success"]("Teacher Updated");
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $("#errorMessage").append('<span class="text-danger">' + value + '</span>' + '<br>');
                        });
                    }
                });

            });
        });


        //Delete Teacher's Information
        $(document).on('click', ".delete_teacher", function(event) {
            event.preventDefault();
            let teacher_id = $(this).data('id');

            if (confirm("Are you sure to confirm?")) {
                $.ajax({
                    method: "post",
                    url: "{{route('delete.teacher')}}",
                    data: {
                        teacher_id: teacher_id
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            $(".table").load(location.href + ' .table');
                            Command: toastr["success"]("Teacher Deleted");
                            toastr.options = {
                                "closeButton": true,
                                "debug": false,
                                "newestOnTop": false,
                                "progressBar": true,
                                "positionClass": "toast-top-right",
                                "preventDuplicates": false,
                                "onclick": null,
                                "showDuration": "300",
                                "hideDuration": "1000",
                                "timeOut": "5000",
                                "extendedTimeOut": "1000",
                                "showEasing": "swing",
                                "hideEasing": "linear",
                                "showMethod": "fadeIn",
                                "hideMethod": "fadeOut"
                            }
                        }
                    }
                });
            }
        });


        //pagination with Ajax
        $(document).on('click', ' .pagination a', function(event) {
            event.preventDefault();
            let page = $(this).attr('href').split('page=')[1]
            teacher(page);
        });

        function teacher(page) {
            $.ajax({
                url: "pagination/paginate-data?page=" + page,
                success: function(res) {
                    $(".table-data").html(res);
                }
            });
        }

        //Show or Filtering data by ajax
        $(document).on('keyup', function(event) {
            event.preventDefault();
            let searchString = $("#search").val();

            $.ajax({
                url: "{{route('search')}}",
                method: "GET",
                data: {
                    searchString: searchString
                },
                success: function(res) {
                    $(".table-data").html(res);
                    if (res.status == 'nothing') {
                        $(".table-data").html('<br><span class="text-danger text-center border-top border-bottom mt-3 p-2"> Sorry, No Match Found </span>')
                    }
                }
            });
        });



    });
</script>