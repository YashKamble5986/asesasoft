<?php
    $filename = "excelfilename";
    
    //header info for browser
    header("Content-Type: application/xls");    
    header("Content-Disposition: attachment; filename=$filename.xls");  
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
    
    /*******Start of Formatting for Excel*******/  
    $sep = "\t"; 
    
    require_once "admin/config.php";      
    $sql = "SELECT * FROM consultation ORDER BY `id` DESC";
    $result = $conn->query($sql);
    
    //start of printing column names as names of MySQL fields
    for ($i = 0; $i < mysqli_num_fields($result); $i++) {
        echo mysqli_fetch_field_direct($result,$i)->name . "\t";
    }
    print("\n");
?>