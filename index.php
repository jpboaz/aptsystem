

<html>
<head>
    <!-- <link href='style.css' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
            body {
                font-family: 'Raleway', 'sans-serif';
                background-color: #dfe6e9;
                
            }

            .login {
                position: relative;
                height: 350px;
                width: 405px;
                margin: auto;
                /*padding: 60px 60px;*/
                background-color: #636e72;
                background-size: cover;
                border-radius: 10px;
                box-shadow: 0px 30px 100px -5px #000;
                overflow: hidden;
            }

            .

            form {
                padding-top: 80px;
                padding-left: 20px;
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
                margin-left: auto;
                margin-right: auto;
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

            .edit {
                top: 60px;
                bottom: 60px;
                position: relative;
                height: 525px;
                width: 400px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 60px;
                margin-bottom: 30px;
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

            .signin {
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
                width: 405px;
                margin: auto;
                /*padding: 60px 60px;*/
                background-color: #636e72;
                background-size: cover;
                border-radius: 10px;
                box-shadow: 0px 30px 100px -5px #000;
                overflow: hidden;
            }
        </style>

</head>

<body>
    <h1></h1>
    <div class="login">
        <h2 class="active">LOGIN</h2>
        <br>
        <br>
        <form id="form1" method="post" action="login.php">
            <input type="text" class="text" name="username" required>
            <span>username</span>

            <br>
            <br>
            <br>


            <input type="password" class="text" name="password">
            <span>password</span>

            <br>

            
            
            
        </form>
        <button form="form1" type="submit" class="signin" name="submit">login</button>
        
    </div>
    <div class="appointment">
        <h2 class="active">Appointment</h2>
        <br>
        <br>
        <form id="form2" method="post" action="addapt.php">
            <input type="text" class="text" id="first" name="first" required>
            <span>First Name</span>

            <br>
            <br>
            <br>


            <input type="text" class="text" id="last" name="last" required>
            <span>Last Name</span>

            <br>
            <br>
            <br>

            <input type="number" class="text" id="number" name="number" max="9999999999" required>
            <span>Phone Number</span>

            <br>
            <br>
            <br>

            <input type="email" class="text" id="email" name="email" required>
            <span>Email</span>

            <br>
            <br>
            <br>

            <input type="text" class="text" id="note" name="note" required>
            <span>Notes</span>

            <br>
            <br>
            <br>

            <input type="date" class="text" id="date" name="date" required>
            <span>Date</span>
           
            <br>
            <br>
            <br>

            <input type="time" step="3600" class="text" id="time" name="time" required>
            <span>Time</span>

            
            
            
        </form>
        <button form="form2" type="submit" class="aptBtn">Submit</button>
    </div>
    <div class="edit">
            <h2 class="active">Edit</h2>
            <br>
        <br>
            <form id="form3" method="post" action="editapt.php">
                <input type="text" class="text" name="lastName" required>
                <span>Last Name</span>

                <br>
                <br>
                <br>


                <input type="text" class="text" name="id" required>
                <span>Appointment ID</span>

                <br>
                <br>
                <br>

                <input type="date" class="text" name="date" id="date" required>
                <span>Date</span>

                <br>
                <br>
                <br>

                <input type="time" step="3600" class="text" id="time" name="time" required>
                <span>Time</span>
            </form>
            <button class="aptBtn" form="form3" type="submit">Submit</button>
    </div>
    
</body>

</html>