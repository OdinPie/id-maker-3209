<?php

    if(isset($_POST["submit"])){    //less secure
        $name = $_POST["name"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $phone = $_POST["phone"];
        $batch = $_POST["batch"];
        $img = $_POST["img"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/main.css'>
    <title>Profile</title>
</head>
<body style="background: #000;">
    <h2 style="text-align:center; color:aliceblue">Your ID Card</h1><br>
    <div style=" display:flex; justify-content:center">
        <div class="contaner" style="">
                <div class="inner-container">
                    <img src="<?php if(isset($img)){ echo $img; } ?>" alt="">
                    <div>
                        <h3><?php if(isset($name)){ echo $name; } ?></h3>
                        <h4>Course:<?php if(isset($course)){ echo $course; } ?></h4>
                        <p>Email:<?php if(isset($email)){ echo $email; } ?></p>
                        <p>Phone Number:<?php if(isset($phone)){ echo $phone; } ?></p>
                        <p>Batch: #<?php if(isset($batch)){ echo $batch; } ?></p>
                    </div>
                </div>
            </div>
    </div>
    

</body>
</html>
