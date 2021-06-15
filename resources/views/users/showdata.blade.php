<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      body
      {
        color:#000000!important;
      }
      .tableborder 
      {
          border:1px solid black!important;
      }
      th
      {
        padding:10px 15px 10px 15px;
        border:1px solid black!important;
      }
      td
      {
        padding:10px 15px 10px 15px ;
        border:1px solid black!important;
      }
      .btn-primary a
      {
        color:#ffffff!important;
        text-decoration:none!important;
      }
      .actions
      {
        text-align:center;
      }
      h1
      {
        font-size:40px!important;
        text-align:center;
        padding: 0px 0px 20px 0px;
      }
      .hide-content
      {
        display:none;
      }


      /* Bottom screen height of Dashboard page */
      .min-h-screen
        {
             min-height:14vh!important;
        }

  </style>  
</head>
<body>
  @include('dashboard')
  <div class="container">
      <h1>Your User Data</h1>
      <table border="2" class="tableborder">
          <tr class='tableborder'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2" class="actions">Actions</th>
          </tr>
          <?php $count = "1";   ?>
          @foreach($books as $user)   
            <tr class='tableborder'>
              <td>{{$count}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email }}</td>
              <td>{{$user->password}}</td>
              <td><button class="btn btn-primary"><a href='update/{{$user->id}}'>update</a></button></td>
              <td><button class="btn btn-primary"><a href='delete/{{$user->id}}'>Delete</a></button></td>
            </tr>  
            <?php $count++;  ?>
          @endforeach
      </table>
  </div>
</body>
</html>