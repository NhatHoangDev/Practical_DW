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
    <form role="form" action="{{url("/save-form")}}" method="post">
        @method("POST")
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Student Name</label>
            <input type="name" name="studentname" class="form-control" id="exampleInputEmail1" placeholder="student name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Email</label>
            <input type="email" name="studentemail" class="form-control" id="exampleInputEmail1" placeholder="student email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Telephone</label>
            <input type="text" name="studenttelephone" class="form-control" id="exampleInputEmail1" placeholder="student telephone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Feedback</label>
            <input type="text" name="feedback" class="form-control" id="exampleInputPassword1" placeholder="feedback">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>

</body>
</html>
