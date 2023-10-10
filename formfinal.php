




<?php include("connection.php");?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BooK Your Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--This Is main Form Area Start ++ -->
    <div class="bf-container">

        <!---Main Form Body Start -->
        <div class="bf-body">


            <!--Form head-->


            <div class="bf-head">
                <h1>
                    <under>Book Your Appointment</under>
                </h1>
                <p>|Lets Treat Your Teeth|</p>
            </div>
            <!--Form head-->



            <!--Form Body Box-->
            <form class="bf-body-box" action="#" method="POST">

                <div class="bf-row">

                    <div class="bf-col-6">
                        <p>Your Name</p>
                        <input type="text" name="fname" id="fname" placeholder="Your Name" required>
                    </div>
                    <div class="bf-col-6">
                        <p>Email Address</p>
                        <input type="email" name="email" id="email" placeholder="Email Address" required>
                    </div>


                </div>



                <div class="bf-row">

                    <div class="bf-col-6">
                        <p>Select Date</p>
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div class="bf-col-6">
                        <p>Enter Your Number</p>
                        <input type="number" name="number" id="number" placeholder="Enter Number" required>

                    </div>


                </div>





                <div class="bf-row">

                    <div class="bf-col-12">
                        <p>Time</p>
                        <input type="time" name="time" id="time"  required/>
                    </div>



                </div>


                <div class="bf-row">

                    <div class="bf-col-12">
                        <p>Messages</p>
                        <textarea name="Messages" id="Messages" cols="10" rows="2"></textarea required>
                    </div>



                </div>

                





                <div class="bf-row">
                  <div class="bf-col-3">
                        <input type="SUBMIT"  name="SUBMIT" value="SUBMIT">
                    </div>

                </div>

            </form>
            <!--Form Body Box-->
        </div>
        <!---Main Form Body End -->
        <!---This is Form Foorter Start -->
       
         <!---This is Form Foorter End -->



    </div>
    <!-- This Is main Form Area End -->


</body>

</html>
<?php
    if($_POST['SUBMIT'])
    {
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $date=$_POST['date'];
        $number=$_POST['number'];
        $time=$_POST['time'];
        $Messages=$_POST['Messages'];
        
        
        $query= INSERT INTO FORM values(' $fname','$email','$date', '$number','$time', '$Messages');
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo"Data Inserted into Database";

        }
        else{
            echo"Failed";

        }

    }





?>