  
 <?php
   $filename = 'Landing-Page-Enquiry-Report-'.date('d-m-Y'); 
 header('Content-Type: application/vnd.ms-excel');  
 header('Content-disposition: attachment; filename='.$filename.'.xls');
                                    // Include config file
                                    require_once "config.php";
                                
                                    $sql = "SELECT * FROM landing_page_enquiry ORDER BY `id` DESC";
                                    $result = $conn->query($sql);

                                    echo '<table border="1">';
                                    
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