<?php include('serve.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
        <style>
            h1{
                color:purple;   
            }
            .commentForm{
                border:1px solid #7c73f6;
                margin-top: 50px;
                border-radius: 15px;
            }
            .error {
               // width: 92%; 
                margin: 0px auto; 
                padding: 10px; 
                border: 1px  #a94442; 
                color: #a94442; 
                background: #f2dede; 
                border-radius: 3px; 
                text-align: left;
                font-weight: 600;
                font-size: 14px;
                margin-bottom: 15px;
}
            .button1{
         height: 45px;
         background:black;
         border: 0;
        border-radius: 3px;
         padding-left: 20px;
         padding-right: 20px;
         color: white;
         font-size: 17px;
            font-weight: bold;
         transition: 0.6s ease;
        }
            
form, .content {
  width: 30%;
  margin top: 10px ;
  padding: 20px;
  border: 1px solid black;
  background: white;
  border-radius: 20px;
    //margin-left: 400px;
}
.input-group {
  margin: 10px 10px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
        </style> 
     
</head>
<body>
    <div class="container">
         <h1>Admin Login</h1>
  <form method="post" action="admin.php">
      <!--<?php include('errors.php');?>-->
      <?php if(count($errors)>0): ?>
    <div class="error">
        <?php foreach($errors as $error) : ?>
            <p><?php echo  $error  ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>
  <div class="input-group">
  		<label> Name:</label><br>
  		<input type="text" name="name" >
  	</div>
      <br>
  	<div class="input-group">
  		<label>Password:</label><br>
  		<input type="password" name="password">
  	</div><br>
  	<div class="input-group">
  		<button type="submit" action="adminfun.php" class="button1" name="admin_login">Login</button>
  	</div><br>
    </form>
    </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>

