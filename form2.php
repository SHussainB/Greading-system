<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <link rel="shortcut icon" href="img/fav-ico.png" /><!--this ic title icon-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

  <?php
    //geting all information
    $sfn=$_POST['firstname'];//first name
    $sln=$_POST['lastname'];//last name
    $email=$_POST['email'];//email
    $dfb=$_POST['dateofbirth'];//date of birth
    $cgm=$_POST['gender'];//gender
    $grp=$_POST['group'];//group
    $eng=$_POST['english'];
    $ban=$_POST['bangla'];
    $math=$_POST['math'];
    $eco=$_POST['economics'];
?>

    <div class="container-fluid"><!--Head-->
        <div class="container text-center mt-5">
            <h3>
                <?php echo ($sfn." ".$sln);?><!--Name adding-->
            </h3>
            <p>Gender: <?php echo $cgm?></p>
            <p>Class: Nine Group: <?php echo ($grp);?></p>
            <p>Email: <?php echo $email;?></p>
        </div>

    </div>
    <div class="container-fluid">
        <div class="container">
            <table class="table table-bordered text-center">
                <tr>
                    <th>Sirial Number</td>
                    <th> Subjuct Name</td>
                    <th>Obtained Marms</td>
                    <th>Gread point</td>
                </tr>
                <tr><!--Fnglish-->
                    <td>1</td>
                    <td>English</td>
                    <td><?php echo $eng;?></td>
                    <td>
                        <?php 
                        if($eng<33){
                            echo "F";
                        }
                        elseif($eng<40){
                            echo "D";
                        }
                        elseif($eng<50){
                            echo "C";
                        }
                        elseif($eng<60){
                            echo "B";
                        }
                        elseif($eng<80){
                            echo "A";
                        }
                        elseif($eng>=80){
                            echo "A+";
                        }
                        ?>
                    </td>
                </tr>
                <tr><!--Bangla-->
                    <td>2</td>
                    <td>Bangla</td>
                    <td><?php echo $ban;?></td>
                    <td>
                        <?php 
                        if($ban<33){
                            echo "F";
                        }
                        elseif($ban<40){
                            echo "D";
                        }
                        elseif($ban<50){
                            echo "C";
                        }
                        elseif($ban<60){
                            echo "B";
                        }
                        elseif($ban<80){
                            echo "A";
                        }
                        elseif($ban>=80){
                            echo "A+";
                        }
                        ?>
                    </td>
                </tr><!--Math-->
                <tr>
                    <td>3</td>
                    <td>Math</td>
                    <td><?php echo $math;?></td>
                    <td>
                        <?php 
                        if($math<33){
                            echo "F";
                        }
                        elseif($math<40){
                            echo "D";
                        }
                        elseif($math<50){
                            echo "C";
                        }
                        elseif($math<60){
                            echo "B";
                        }
                        elseif($math<80){
                            echo "A";
                        }
                        elseif($math>=80){
                            echo "A+";
                        }
                        ?>
                    </td>
                </tr>
                <tr><!--Economics-->
                    <td>4</td>
                    <td>Economics</td>
                    <td><?php echo $eco;?></td>
                    <td>
                        <?php 
                        if($eco<33){
                            echo "F";
                        }
                        elseif($eco<40){
                            echo "D";
                        }
                        elseif($eco<50){
                            echo "C";
                        }
                        elseif($eco<60){
                            echo "B";
                        }
                        elseif($eco<80){
                            echo "A";
                        }
                        elseif($eco>=80){
                            echo "A+";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="div border rounded d-flex">
                            <div class="ml-5 mr-auto"><p>Total Marks</p></div>
                            <div class="ml-auto mr-5"><?php echo $total=($eng+$ban+$math+$eco)?></div>
                    </div>
                </div>
                <div class="col border rounded">
                    <h3 class="text-center">
                    <?php 
                        /*$subjects=array("$eng","$ban","$math","$eco");
                        $numofsub=(array_count_values($subjects));*/
                        $gpa=($total/4);
                        if($eng<33){
                            echo "F";
                        }
                        elseif($ban<33){
                            echo "F";
                        }
                        elseif($math<33){
                            echo "F";
                        }
                        elseif($eco<33){
                            echo "F";
                        }
                        elseif($gpa<40){
                            echo "D";
                        }
                        elseif($gpa<50){
                            echo "C";
                        }
                        elseif($gpa<60){
                            echo "B";
                        }
                        elseif($gpa<80){
                            echo "A";
                        }
                        elseif($gpa>=80){
                            echo "A+";
                        }
                    ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <?php 
    
   
    //$eng $ban   $math $eco
   
 
    
   
    
    ?>
    




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>