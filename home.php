<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizdbase');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
         body {
            background-image: url("bc.jpg");
         }
      </style>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <br>
        <h1 class="text-center text-danger"><u>~The Quizz on IP~</u></h1><br>
        <h2 class="text-center text-primary">Welcome <?php echo $_SESSION['username']; ?></h2><br>
        <div class="col-lg-8 m-auto d-block">



            <div class="card bg-dark text-white">
                <h3>Welcome <?php echo $_SESSION['username']; ?>, you have to select only one out of 4 option. All the Best ;)

                </h3>

            </div><br>
            <form action="check.php" method="post">

                <?php
                for($i=1; $i < 6;$i++){ 
                $q = " select * from questions where qid = $i";
                $query = mysqli_query($con, $q);

                while ($rows = mysqli_fetch_array($query)) {
                ?>
                    <div class="card bg-dark text-white">
                        <h4 class="card-header"><?php echo $rows['question'] ?></h4>


                        <?php
                        $q = "select * from answers where ans_id = $i";
                        $query = mysqli_query($con, $q);

                        while ($rows = mysqli_fetch_array($query)) {
  
                        ?>
                            <div class="card-body">
                                <input type="radio" name="quizcheck[<?php echo $rows['ans_id']?>]" value="<?php echo $rows["aid"] ?>">
                                <?php 
                                echo $rows['answer'];?>

                                
                                
                            </div>




                    <?php
                        }
                    }
                    }
                    ?>

                    <input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">
            </form>
        </div>
    </div><br><br>

    <div class="m-auto d-block">
    <a href="logout.php" class="btn btn-primary">LOGOUT</a>
    </div><br>

    <div>
        <h5 class="text-center"> @2022 Yuva Projz</h5>
    </div><br><br>

</body>

</html>