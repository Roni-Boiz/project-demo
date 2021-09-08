<?php include_once 'slidenav.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <!-- don't import style.css -->
    <link rel="stylesheet" href="../../public/css/body.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: gray; background-image:none;">
    <div class="hawlockhead"><img src="../../public/img/image.png" alt="" id="logo"/><h1 id="title">Hawlock <span id="city">City</span></h1></div>
    <div class="hawlockbody"> 
        <i class="fa fa-user-circle-o" style="font-size: 75px;"></i>

        <input type="submit" onclick = "fun()"value="Edit Profile">
        
        <h4 style="margin-left: 100px;"><?php
        if ($this->users->num_rows > 0) {
        // output data of each row
        while($row = $this->users->fetch_assoc()) {
            echo $row["ApartmentNo"]
        ?></h4>
        
        <form action="#" class="form1">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder=<?php echo $row["FirstName"] ?>>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder=<?php echo $row["LastName"] ?>>
            
            <label for="fname">Contact NO</label>
            <input type="text" id="fname" name="firstname" placeholder=<?php echo $row["NIC"] ?>>

            <label for="lname">Email</label>
            <input type="text" id="lname" name="lastname" placeholder=<?php echo $row["Email"] ?>>

            <label for="lname">Vehicle NO</label>
            <input type="text" id="lname" name="lastname" placeholder=<?php echo $row["VehicleNo"] ?>>

            <label for="lname">Balance</label>
            <input type="text" id="lname" name="lastname" placeholder=<?php echo $row["Balance"] ?>>
            <?php
            }
            } else {
                    echo "0 results";
                    }
            ?>
            
        </form>
    </div>
    
</body> 
</html>