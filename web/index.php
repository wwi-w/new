<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
  $msg="";
  if(isset($_GET['error']))
  {
      $msg="please fill in the blanks";
      echo '<div class="alert alert-danger">'.$msg.'</div>';
  }
  if(isset($_GET['success']))
  {
      $msg="";
    $msg="your message have been sent";
    echo '<div class="alert alert-success">'.$msg.'</div>';
  }
  ?>
  <form action="message.php" method="POST">
    <h1 style="text-align: center;">contact form!</h1>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Your full name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Your Name.....">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="mail" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Subject</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="your message body">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">your message</label>
  <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" placeholder="write your message........" rows="3"></textarea>
</div>
<button type="submit" name="btn-send" class="btn btn-primary">Send message</button>
</form>
  </body>
</html>








