<?php
session_start();
$email=$_SESSION['email'];
$hostname='localhost';
$username='root';
$password='';
$dbname='jatra';
$con=mysqli_connect($hostname,$username,$password,$dbname);
if($con)
{
	echo"";
}
else
{
	echo"conn false";
}
 $sql="SELECT * FROM review WHERE email='$email'";
 $r=mysqli_query($con,$sql);
 $data=mysqli_fetch_assoc($r);
 $rating=$data['rating'];
$comment=$data['comment'];
 if(isset($_POST['rating']) && isset($_POST['comment'])){
    $rating=$_POST['rating'];
    $comment=$_POST['comment'];
$sql="UPDATE review SET rating='$rating',comment='$comment' WHERE email='$email'";
$r=mysqli_query($con,$sql);
if($r)
{
	echo"update succesfully";
}
else
{
	echo"update failed";
}

 }

?>
<html>

    
   
    
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}

.center {
text-align: center;
color: red;
}
    *{margin: 0; padding: 0;}
    body{background: #ecf1f4; font-family: sans-serif;}
    
    .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
    
    input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
    
    input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
    input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
    
    ::placeholder{color: black;}

</style>

<body>
            <div class="form-wrap">
        <form action="" method="POST">
            <h1>register</h1>
        
<label for="rating"><h4 style="color:white">rating</h4></label>
<input type="number" min="1" max="5" required value="<?php echo"$rating"?>" name="rating">
<br>
<label for="comment"><h4 style="color:white">comment</h4></label>
<textarea id="reason"  value="<?php echo"$comment"?>" name="comment" placeholder="comment"  style="width:280px; height:100px"></textarea>
<br>
<input type="submit" placeholder=submit value="update"/>
        </form>
        </div>
  
</body>
</html>
