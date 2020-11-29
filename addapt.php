<?php
    session_start();
    include "db_conn.php";

    


        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $first = validate($_POST['first']);
        $last = validate($_POST['last']);
        $number = intval(validate($_POST['number']));
        $email = validate($_POST['email']);
        $note = $_POST['note'];
        $date = validate($_POST['date']);
        $time = $_POST['time'];

        

        if (empty($date)){
            header("Location: index.php?error=invalid date");
            exit();
        } else if (empty($time)){
            header("Location: index.php?error=invalid time");
            exit();
        } else {
            $sql = "SELECT * FROM apts WHERE date='$date' AND time='$time'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) != 0){
                echo '<script>alert("Duplicate Time Slot");window.location.href="http://localhost/websitetest/index.php";</script>';
                
                exit();

            }


            $sql = "INSERT INTO apts (first, last, number, email, note, date, time) values ('$first', '$last', '$number', '$email', '$note', '$date', '$time')";

            $result = mysqli_query($conn, $sql);


            $sql = "SELECT * FROM apts WHERE date='$date' AND time='$time'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $index = $row['id'];
            //change href to wherever
            echo '<script>alert("Appointment ID is: '.$index.'");window.location.href="http://localhost/websitetest/index.php";</script>';
            exit();

        }

        

       

?>