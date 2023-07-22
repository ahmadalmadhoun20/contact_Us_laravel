<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="alert alert-success mt-6">


            <h1>Hello {{ $name }}</h1><br>
            <p>Name:{{ $name }}</p><br>
            <p>Email:{{ $email }}</p><br>
            <p>Select:{{ $select }}</p><br>
            <p>Message:{{ $message }}</p><br>
        </div>
    </div>


  </body>
</html>
