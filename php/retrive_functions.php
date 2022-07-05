<?php

include 'php/db_connnection.php';


function getMyRequests(){
    $conn = OpenCon();
    $sql = "CALL get_ca_case(2) ";
    $case = mysqli_query($conn,$sql);
    $results =mysqli_num_rows($case);
    
    if($results > 0){
        while($row = mysqli_fetch_assoc($case)){
          $dr = $row['dr'];
          $time = $row['request_timestamp'];
          $devices = $row['@nDevice'];
          $status = $row['case_status'];
          echo"<tr>";
          echo "<td>$dr</td>";
          echo "<td>$time</td>";
          echo "<td>$devices</td>";
          echo "<td> $status</td>";
          echo "</tr>";
        } 
    }
}