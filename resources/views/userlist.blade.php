<!DOCTYPE html>
<html lang="en">
<head>
  <title>User List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User list</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Avatar</th>
        <th>User Name</th>
        <th>Git Id</th>
        <th>Full Name</th>
        <th>Bio</th>
        <th>Total Star (years)</th>
        <th>Created Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $dataList)
        @if(count($dataList['userlist'])> 0)
        <tr>
        <td><img src="{{ $dataList->avatar_url }}" width="60"></td>
        <td>{{ $dataList->username }}</td>
        <td>{{ $dataList->git_id }}</td>
        <td>{{ $dataList->fullname }}</td>
        <td>{{ $dataList->bio }}</td>
        <td>{{ count($dataList['userlist']) }}</td>
        <td>{{ $dataList->create_at }}</td>
        <td></td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
