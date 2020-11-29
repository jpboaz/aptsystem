<?php 
    include "db_conn.php";
    session_start();

    if (isset($_SESSION['username']) && isset($_SESSION['password'])){

        

?>

<html>
    <head>
        <!-- <link href='style.css' rel='stylesheet' type='text/css'> -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Raleway', 'sans-serif';
                background-color: #dfe6e9;
                
            }

            form {
                padding-top: 80px;
                padding-left: 20px;
            }

            .login {
                position: relative;
                height: 400px;
                width: 405px;
                margin: auto;
                /*padding: 60px 60px;*/
                background-color: #636e72;
                background-size: cover;
                border-radius: 10px;
                box-shadow: 0px 30px 100px -5px #000;
                overflow: hidden;
            }



            .active {
                border-bottom: 2px solid #55efc4;
                position: center;
            }

            h2 {
                color:white;
                padding-left: 12px;
                font-size: 22px;
                text-transform: uppercase;
                padding-bottom: 5px;
                letter-spacing: 2px;
                display: inline-block;
                font-weight: bold;
            }

            h2:first-child{
                padding-left: 0px;
            }

            span {
                text-transform: uppercase;
                color: white;
                font-size: 12px;
                opacity: 1;
                display: inline-block;
                position: relative;
                top: -65px;
                transition: all 0.5s ease-in-out;
                
            }

            .text {
                border: none;
                width: 89%;
                padding: 10px 20px;
                display: block;
                height: 15px;
                border-radius: 20px;
                background: rgba(255,255,255,0.1);
                border: 2px solid rgba(255,255,255,0);
                overflow: hidden;
                margin-top: 15px;
                transition: all 0.5s ease-in-out;
            }

            .text:focus {
                outline: 0;
                border: 2px solid rgba(255,255,255,0.5);
                border-radius: 20px;
                background: rgba(0,0,0,0);
            }

            .text:focus + span {
                opacity: 0.6;
            }

            input[type="text"],input[type="password"] {
                font-family: 'Raleway', sans-serif;
                color: #fff;
            }

            input {
                display: inline-block;
                padding-top: 20px;
                font-size: 14px;
            }

            h2,span {
                margin-left: 20px;
            }

            button {
                background-color: #55efc4;
                text-transform: uppercase;
                color: white;
                display: block;
                width: 100%;
                padding: 2rem;
                font-size: 1.5rem;
                font-family: 'Raleway', sans-serif;
                border: none;
                transition: background 1s;
            }

            button:hover {
                cursor: pointer;
                background-color: #00b894;
                transition: background 1s;
            }

            .appointment {
                top: 60px;
                bottom: 60px;
                position: relative;
                height: 800px;
                width: 405px;
                margin: auto;
                /*padding: 60px 60px;*/
                background-color: #636e72;
                background-size: cover;
                border-radius: 10px;
                box-shadow: 0px 30px 100px -5px #000;
                overflow: hidden;
            }

            .aptBtn {
                position: absolute;
                bottom: 0;
            }

            a {
                text-decoration: none;
            }

            .adminpanelbody {
                top: 60px;
                bottom: 60px;
                position: relative;
                height: 800px;
                width: 1025px;
                margin: auto;
                /*padding: 60px 60px;*/
                background-color: #636e72;
                background-size: cover;
                border-radius: 10px;
                box-shadow: 0px 30px 100px -5px #000;
                overflow: hidden;
            }

            table{
                padding: 0;
                background-color: transparent;
                color: white;
                table-layout: fixed;
                width: 100%;
            }
            table tr td{
                padding: 5px;
                
                border-right: 1px solid #55efc4;
                border-bottom: 1px solid #55efc4;
                word-wrap: break-word;
            }
            table tr td:last-child{
                border-right: none;
                
            }
            table tr th{
                padding: 5px;
                border-right: 1px solid #55efc4;
                border-bottom: 1px solid #55efc4;
            }
            table tr th:last-child{
                border-right: none;
                
            }
        </style>
        
    </head>
    <body>
        <div class="adminpanelbody">
            <h2 class="active">Admin Panel</h2>
            <table style="border-left:1px solid #55efc4; border-right: 1px solid #55efc4">
                <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th width="100px">First Name</th>
                        <th width="100px">Last Name</th>
                        <th width="100px">Number</th>
                        <th>Email</th>
                        <th>Notes</th>
                        <th width="80px">Date</th>
                        <th width="50px">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM apts ORDER BY date, time ASC ";

                        $result = mysqli_query($conn, $sql);
                
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr><td>'.$row['id'].'</td><td>'.$row['first'].'</td><td>'.$row['last'].'</td><td>'.$row['number'].'</td><td>'.$row['email'].'</td><td>'.$row['note'].'</td><td nowrap="nowrap">'.date("m-d-y", strtotime($row['date'])).'</td><td>'.substr($row['time'], 0, 5).'</td></tr>';
                        }
                    ?>

                </tbody>
            
            
            </table>
            <a href="http://localhost/websitetest/index.php">
            <button class="aptBtn">logout</button>
            </a>
        </div>
    </body>


</html>

<?php
    




    } else {
        header("Location: index.php");
        exit();
    }
?>