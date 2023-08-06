<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizdbase'); 
?>

<!DOCTYPE html>
<html> 
    <head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
   <body>
     <div class="container text-center" >
     	<br><br>
    	<h1 class="text-center text-success text-uppercase animateuse" >Quiz World</h1>
    	<br><br><br><br>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['quizcheck'])){
            $count = count($_POST['quizcheck']);
?> 
<td>           
<?php    echo "Out of 5, You selected ".$count." options";
?>
</td>

<?php
            $result = 0;
            $i = 1;
            $selected = $_POST['quizcheck'];
            // print_r($selected);

            $q = "select * from questions";
            $query = mysqli_query($con, $q);
            while($rows = mysqli_fetch_array($query)){
                // print_r($rows['ans_id']);

                $checked = $rows['ans_id'] == $selected[$i];
                if($checked)
                {
                    $result++;
                }
                $i++;

            }
?>    
<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
<?php        
            echo "<br> Your total score is:  ".$result;

        }
        else{
            "<b>Please Select Atleast One Option.</b>";
        }

    }
?>    
                </td>
</tr>

<?php
    $name = $_SESSION['username'];
    $finalresult = "insert into user(username,totalques,answerscorrect)values('$name','5','$result')";
    $queryresult= mysqli_query($con, $finalresult);
    // if($queryresult){
    //     echo " successs";
    // }


?>
</table>

<a href="logout.php" class="btn btn-success">LOGOUT</a>
     </div>
</body>
</html>
