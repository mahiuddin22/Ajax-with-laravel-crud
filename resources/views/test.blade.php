<!DOCTYPE html>
<html>

<head>
    <title>Radio Boostrap Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<style>
    table,
    th,
    tr,
    td,
    thead,
    tbody {
        border: 1px dotted #ccc;
    }
</style>

<body>

    <div class="container py-5">

        <form novalidate="novalidate">
            <h4 class="">Same/Different Example</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">Very <br>Disinterested</th>
                        <th scope="col" class="text-center">Somewhat <br>Disinterested</th>
                        <th scope="col" class="text-center">Somewhat <br>Interested</th>
                        <th scope="col" class="text-center">Very <br>Interested</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Travel</td>
                        <td><input type="radio" name="travel" value="Very Disinterested"></td>
                        <td><input type="radio" name="travel" value="Somewhat Disinterested"></td>
                        <td><input type="radio" name="travel" value="Somewhat Interested"></td>
                        <td><input type="radio" name="travel" value="Very Interested"></td>
                    </tr>
                    <tr>
                        <td>Fashion</td>
                        <td><input type="radio" name="fashion" value="Very Disinterested"></td>
                        <td><input type="radio" name="fashion" value="Somewhat Disinterested"></td>
                        <td><input type="radio" name="fashion" value="Somewhat Interested"></td>
                        <td><input type="radio" name="fashion" value="Very Interested"></td>
                    </tr>
                    <tr>
                        <td>Health &amp; Fitness</td>
                        <td><input type="radio" name="health" value="Very Disinterested"></td>
                        <td><input type="radio" name="health" value="Somewhat Disinterested"></td>
                        <td><input type="radio" name="health" value="Somewhat Interested"></td>
                        <td><input type="radio" name="health" value="Very Interested"></td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-success active">
                <input type="radio" name="options" id="option1"  autocomplete="off" checked> OFF
            </label>
            <label class="btn btn-success">
                <input type="radio" name="options" id="option2" autocomplete="off"> ON
            </label>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script>
        let option1 = $("#option1").val();
        let option2 = $("#option2").val();
        console.log(option1);
        console.log(option2);
    </script>
</body>


</html>