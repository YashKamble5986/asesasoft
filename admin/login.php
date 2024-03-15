<?php
    // Initialize the session
    session_start();
 
    // Check if the user is already logged in, if yes then redirect him to enquiry page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: enquiry.php");
        exit;
    }
    
    // Include config file
    require_once "config.php";
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = $login_err = "";
	
	
	// Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
    
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
    
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            
            // Prepare a select statement
            $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
            
                // Set parameters
                $param_username = $username;
            
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                 
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if (md5($password) === $hashed_password){
                                // Password is correct, so start a new session
                                session_start();
                            
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;                            
                            
                                // Redirect user to enquiry page
                                header("location: enquiry.php");
                            } else{
                                // Password is not valid, display a generic error message
                                $login_err = "Invalid username or password.";
                            }
                        }
                    } else{
                        // Username doesn't exist, display a generic error message
                        $login_err = "Invalid username or password.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        // Close connection
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel='stylesheet' href='../css/style.css' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{ font: 14px sans-serif;background: #081D5E; }
        .wrapper{padding: 20px; }
        form .link_btn:hover{background: #F5A61C !important;}
        form .link_btn{
            height: 40px;
            width: 100px;
        }
        .input-group-text{
            background: #5E5F5F;
            border: 0;
            color: #FFFFFF;
        }
        form .form-control::placeholder{
            color: #FFFFFF;
            font-size: 12px;
            letter-spacing: 0.5px;
            font-family: 'Mulish-Regular';
        }
        form input.form-control{
            background: rgba(94,95,95,0.6) !important;
            border: 0;
            color: #FFFFFF;
        }
        
    </style>
</head>
<body>
    <div class="wrapper position-absolute w-100" style='top: 50%;left: 50%;transform: translate(-50%,-50%);'>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto col-md-6 p-4" style='background: #4976FF;'>
                    <h3 class='text-white'>Login</h3>
                    <p class='text-white pb-3'>Please fill in your credentials to login.</p>
            
                    <?php 
                    if(!empty($login_err)){
                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                    }        
                    ?>
            
                    <form action="login" method="post">
                        <div class="form-group mb-2">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text h-100 rounded-0"><i class="fa fa-user"></i></span>
                              </div>
                              <input type="text" name="username" placeholder='username' class="form-control rounded-0 <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            </div>
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>    
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text h-100 rounded-0"><i class="fa fa-key"></i></span>
                                </div>
                                <input type="password" name="password" placeholder='password' class="form-control rounded-0 <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            </div>
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group text-center pt-3">
                            <input type="submit" class="link_btn" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>