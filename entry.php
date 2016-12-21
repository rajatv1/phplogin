<?php 
      
      $conn= mysqli_connect("localhost","root","","entry");
      
      if (isset($_REQUEST['register'])){

        $fname =$_REQUEST['name'];
        $add   =$_REQUEST['username'];
        
        //PHP FOR DATE
        $sdate  =$_REQUEST['mdate'];                    
        $pdate  =date('y-m-d',strtotime($sdate));
        
        //PHP FOR CHECKBOX
        $activity1 = implode(',',$_REQUEST['hobby']);
        
        //PHP FOR UPLOADING IMAGE
        $image = $_FILES['img']['name'];
        $move  = "Upload/".$image;
        move_uploaded_file($_FILES['img']['tmp_name'],$move);


        $sql   ="INSERT INTO enter(name, username,Datejoin,Activity,image) VALUES ('".$fname."','".$add."','".$pdate."','".$activity1."','".$move."')";
        $total = mysqli_query($conn,$sql);
        header("Location:entrytable.php");
      }


      if (isset($_REQUEST['log'])) {
        header("Location:entrytable.php");
      }

?>


<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="entry.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		

		
	</head>
	<body>
		
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" enctype="multipart/form-data">
						
						<center><form method="POST" enctype="multiport/form-data">
      <p>Enter name here</p>
      <input type="text" name="name"></input><br/><br/><hr style="width: 100%;">

      <p>Address</p>
      <textarea name="username"></textarea><br/><br/><hr style="width: 100%;">

      <p>Date of join</p>
      <input type="date" name="mdate"></input><br/><br/><hr style="width: 100%;">

      <p>Activites</p>
      <input type="checkbox" name="hobby[]" value="cricket">  Cricket</input>&nbsp;&nbsp;
       
      <input type="checkbox" name="hobby[]" value="hockey">Hockey</input>&nbsp;&nbsp;
       
      <input type="checkbox" name="hobby[]" value="Swimming">Swimming</input>&nbsp;&nbsp;
       
      <input type="checkbox" name="hobby[]" value="Football">Football</input><br/><br/><hr style="width: 100%;">
      <p>Upload File</p>
      <input type="file" name="img" value="browse"></input><br/><br/><hr style="width: 100%;">
      <input type="submit" value="register" name="register"></input>
      <input type="submit" value="cancel" name="log"></input>
      </form></center>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>