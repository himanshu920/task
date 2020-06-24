<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
  <form action="{{ url('register') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="username">GitHub Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter github username" name="username">
      @error('username')
      <div class="alert alert-warning">
        <strong>Warning!</strong> {{ $message }}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-default">Register</button>
  </form>
</div>

</body>
</html>
