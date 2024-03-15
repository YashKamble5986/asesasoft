<?php
    // Initialize the session
    session_start();
     
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Sidebars</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>
    <body>
        <main class="container-fluid dContainer">
            <div class="row min-vh-100">
                <div class="col-lg-2 pt-2 position-relative">
                    <div class="leftBar">
                        <nav class="nav flex-column nav-pills pt-5">
                          <a class="nav-link" href="enquiry">ENQUIRY</a>
                          <a class="nav-link" href="consultation">CONSULTATION</a>
                          <a class="nav-link active" href="landingPageConsultation">DIGITAL MARKETING CONSULTATION</a>
                          <a class="nav-link" href="landing_page_enquiry">Landing Page Enquiry</a>
                          <a class="nav-link mt-5" href="logout">LOGOUT</a>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class='mt-5' style='margin-right: 30px;'>
                        <div class='bg-white p-4 py-3 mb-4'><h4 class='mb-0'>Consultation Data</h4></div>
                        <div class="py-3 mb-4">  
                                 <button name="create_excel" id="create_excel" class="btn btn-success">Download Excel File</button>  
                            </div>
                            <div class='bg-white p-4 py-3 mb-4' id="table-container">
                                <?php
                                    // Include config file
                                    require_once "config.php";
                                    
                                    $sql = "SELECT * FROM landingPageConsultation ORDER BY `id` DESC";
                                    $result = $conn->query($sql);

                                    echo '<table class="table table-bordered">';
    
                                    if ($result->num_rows > 0) {
                                        echo '<tr>
                                                <th>S.N</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Mobile No</th>
                                                <th>Email Id</th>
                                                <th>Message</th>
                                                <th style="width: 100px;">Date</th>
                                        </tr>';
                                        
                                        $sn = 1;
                                        while($data = $result->fetch_assoc()) {
                                            echo "<tr>
                                                  <td>".$sn."</td>
                                                  <td>".$data['customer_first_name']."</td>
                                                  <td>".$data['customer_last_name']."</td>
                                                  <td>".$data['customer_mobile']."</td>
                                                  <td>".$data['customer_email']."</td>
                                                  <td>".$data['customer_message']."</td>
                                                  <td>".date("d-m-Y", strtotime($data['dt_created']))."</td>
                                            </tr>";
                                            $sn++;
                                        }
                                    } else {
                                        echo "<tr>
                                            <td colspan='6'>No Data Found</td>
                                        </tr>"; 
                                    }
                                    
                                    echo "</table>";
                                ?>
                            </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
<script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var page = "digital_marketing_consultation_report.php";  
           window.location = page;  
      });  
 });  
 </script> 
