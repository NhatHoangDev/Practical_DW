
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lee Nhat Hoang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2 style="
    font-size: 30px;
    font-weight: 700;
    text-align: center;">Practical</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>student name</th>
            <th>student email</th>
            <th>student telephone</th>
            <th>feedback</th>
        </tr>
        </thead>
        <tbody>
        @foreach($school as $school)
            <tr>
                <td>{{$school->__get("id")}}</td>
                <td>{{$school->__get("studentname")}}</td>
                <td>{{$school->__get("studentemail")}}</td>
                <td>{{$school->__get("studenttelephone")}}</td>
                <td>{{$school->__get("feedback")}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
