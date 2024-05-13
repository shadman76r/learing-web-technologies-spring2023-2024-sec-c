<?php
$conn = mysqli_connect("localhost", "root", "", "opencrowd");

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO forum VALUES('', '$name', '$comment', '$date', '$reply_id')";
  mysqli_query($conn, $query);
}
?>

<html>
    <head>
    <title>Discussion</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <style>
        .comment, .reply{
  margin-top: 5px;
  padding: 10px;
  border-bottom: 1px solid black;
}
.reply{
  border: 1px solid #ccc;
}
p{
  margin-top: 5px;
  margin-bottom: 5px;
}
form{
  margin: 10px;
}
form h3{
  margin-bottom: 5px;
}
form input, form textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid black;
  outline: none;
}
form button.submit, button{
  background: white;
  color: black;
  border: 3px solid black;
  cursor: pointer;
  padding: 10px 20px;
  width: 100%;
}
button.reply{
  background: white;
}
    </style>
  <body>
    <?php include_once('nav.php'); ?>
    <div class="container-body">
      <div class="content">
        <h2>Discussion forum</h2> <hr>
      <?php
      $datas = mysqli_query($conn, "SELECT * FROM forum WHERE reply_id = 0");
      foreach($datas as $data) {
        require 'comment.php';
      }
      ?>
      <form action = "" method = "POST">
        <h3 id = "title">Start a discussion..</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" id="name" placeholder="Your name">
        <textarea name="comment" id="comment" placeholder="Your comment"></textarea>
        <button class = "btn submit" type="submit" name="submit" onclick="postComment()">Submit</button>
      </form>
      </div>
    </div>
    <script src="../assets/js/discussion.js"></script>
  </body>
</html>
