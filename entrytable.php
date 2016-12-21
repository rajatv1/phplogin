<?php 

    $connect = mysqli_connect("localhost","root","","entry");
    $sql     = "SELECT * FROM enter";
    $total   = mysqli_query($connect,$sql);
    $count = 1;
     
      
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="entry.css" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <center><a href="entry.php" class="btn btn-primary btn-xs pull-right" name="data"><b>+</b> Add new data</a></center>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Date_of_join</th>
            <th>Activity</th>
            <th>image</th>
           
        </tr>
    </thead>
            <?php 
             while ($row = mysqli_fetch_array($total)) {
              
             
             ?>
        <tr>
            <th><?php echo $count++; ?></th>
            <th><?php echo $row['name'] ?></</th>
            <th><?php echo $row['username'] ?></th>
            <th><?php echo $row['Datejoin'] ?></th>
            <th><?php echo $row['Activity'] ?></th>
            <th><img style="width: 80px; height: 80px;" src="<?php echo $row['image'] ?>"></th>

        </tr>
    </thead>
    
    <?php } ?>
           
    </table>
    </div>
</div>
</body>
</html>