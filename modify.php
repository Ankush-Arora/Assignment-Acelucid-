
<?php
include 'connect.php';
$id=$_GET['modifyid'];
$sql="select * from `data` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="update `data` set id='$id',name='$name',email='$email',mobile='$mobile' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
          header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >


    <title>Details</title>
</head> 
<body>
   <center> <h1>FILL DETAILS<h1></center>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
     <div class="container my-5">
     <form method="post">
  <div class="mb-3">
    <label class="form-label">Enter Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="name" autocomplete="off" value=<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Enter Email</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>
  <div class="mb-3">
    <label class="form-label">Enter Mobile Number</label>
    <input type="text" class="form-control"  placeholder="Enter mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Modify</button>
</form>
     </div>
</body>
</html>