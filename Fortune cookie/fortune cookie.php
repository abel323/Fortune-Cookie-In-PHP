<?php
    include('fortune message.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fortune cookie result</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <style type="text/css">
            .message{
                color: <?php echo $_GET['chooseColor']; ?>;
                background-color: <?php echo $_GET['chooseColor']; ?>;
                height: 10%;
                width: 20%;
                margin-left: 500px;
                transition-property: color;
                transition-duration: 3s;
            }
            .message:hover{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
            /*foreach( $_COOKIE['fortune_message'] as $fortune){
                echo $fortune."<br/>";
            }*/
            if(isset($_GET['submit'])){
                $name= $_GET['fullName'];
                $min = $_GET['minLuckyNumber'];
                $max = $_GET['maxLuckyNumber'];
                $color = $_GET['chooseColor'];
                if(($max-$min)<7){
                    echo "<script>alert('Range difference must be 7!');</script>";
                    echo "<script>window.location.href='form.php';</script>";
                }
                else if($min<=0 && $max>50){
                    echo "<script>alert('Minimum number must be greater than zero or max number lessthan or equal to 50!');</script>";
                    echo "<script>window.location.href='form.php';</script>";
                }
                else{
                    $num1 = rand($min,$max);
                    $num2 = rand($min,$max);
                    $num3 = rand($min,$max);
                    $num4 = rand($min,$max);
                    $num5 = rand($min,$max);
                    $num6 = rand($min,$max);
                    $num7 = rand($min,$max);
                    ?>
                <div class="name">
                    <h2 style="color: <?php echo $color;?>;" align="center"><?php echo $name; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num1; ?> <?php echo $_COOKIE['fortune_message'][$num1]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num2; ?> <?php echo $_COOKIE['fortune_message'][$num2]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num3; ?> <?php echo $_COOKIE['fortune_message'][$num3]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num4; ?> <?php echo $_COOKIE['fortune_message'][$num4]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num5; ?> <?php echo $_COOKIE['fortune_message'][$num5]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num6; ?> <?php echo $_COOKIE['fortune_message'][$num6]; ?></h2>
                </div>
                <div class="message">
                    <h2>Your lucky number is: <?php echo $num7; ?> <?php echo $_COOKIE['fortune_message'][$num7]; ?></h2>
                </div>
        <?php
                }
            }
        ?>
    </body>
</html>