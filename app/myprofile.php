<!DOCTYPE html>
<html>

<link rel="stylesheet" href="../css/myprofile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<head>
    <title>My Profile Page</title>
</head>
<body>

<?php include 'header.php'; ?>

 
    <div id="main">
        <h2>About Me</h2>
        <img src="user.png" alt="" srcset="">
        <p>This is a paragraph about me.</p>

<?php
        $current1=$_COOKIE['usertitle'];
        $current2=$_COOKIE['useremail'];
        $current3=$_COOKIE['userrole'];
        $current4=$_COOKIE['userid'];
       
 ?>
        <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">first name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" disabled aria-describedby="emailHelp" value="<?php echo $current1 ; ?>">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  disabled value="<?php echo $current2 ; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">role </label>
    <input type="text" class="form-control" id="exampleInputPassword1"  disabled value="<?php echo $current3; ?>">
  </div>

</form>




<form action="" method="post">
    <input type="hidden" name="user_id" value="<?php echo $current4; ?>">

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Add review</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="addreview"></textarea>
</div>

<input type="submit" value="send" name="review">
</form>

<hr>
<br>
<br>


        
    </div>
    <?php include '../operations/makereview.php' ?>
    <br>
    <?php include '../operations/historyorders.php' ?>
    <br>
    <?php include '../operations/historymsgs.php' ?>
    <br>
    <?php include '../operations/historyreviews.php' ?>
</body>
</html>

