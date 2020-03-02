<!DOCTYPE html>
<html>

<head>
    <title>LOGIN TO CONTINUE..</title>
    <link rel="icon" href="IMAGES/website.png" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="HMS CSS/LOGIN.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <div class="nav navbar-nav navbar-right"></div>

        
    </nav>
    <br>
    <div class="border border-dark">
        <div class="imgcontainer">
            <img src="IMAGES/logoHMS021.jpg" alt="image" class="image">
        </div>
        <h1> hello </h1>
        <form action="logincode.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-3">

                        <div>
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username"><br />
                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password"><br /><br>
                            <button class="btn btn-info" type="submit" role="button">LOGIN</button>
                        </div>


                    </div>
                </div>
            </div>
        </form>

</body>

</html>
