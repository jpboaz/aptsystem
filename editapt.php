<?php
    session_start();
    include "db_conn.php";

    


        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $id = intval($_POST['id']);
        $last = validate($_POST['lastName']);
       
        $date = validate($_POST['date']);
        $time = $_POST['time'];

        

        if (empty($date)){
            header("Location: index.php?error=invalid date");
            exit();
        } else if (empty($time)){
            header("Location: index.php?error=invalid time");
            exit();
        } else {
            $sql = "SELECT * FROM apts WHERE last='$last' AND id=$id";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 0){
                echo '<script>alert("Appointment not found!");window.location.href="http://localhost/websitetest/index.php";</script>';
                
                exit();

            }
            $sql = "SELECT * FROM apts WHERE date='$date' AND time='$time'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) != 0){
                echo '<script>alert("Duplicate Time Slot");window.location.href="http://localhost/websitetest/index.php";</script>';
                
                exit();

            }

            $sql = "UPDATE apts SET date='$date', time='$time' WHERE id='$id'";

            $result = mysqli_query($conn, $sql);





            //change href to wherever
            echo '<script>alert("Appointment Updated!");window.location.href="http://localhost/websitetest/index.php";</script>';
            exit();

        }

        

       

?>