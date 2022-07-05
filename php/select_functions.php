<?php

include 'php/db_connnection.php';


function selectCaseAgent(){
    $conn = OpenCon();
    $sql = "SELECT agent_fname, agent_lname, agent_serial FROM case_agent_lu";
    $case_agents = mysqli_query($conn,$sql);
    $results =mysqli_num_rows($case_agents);
    
    if($results > 0){
        while($row = mysqli_fetch_assoc($case_agents)){
          $ca_name = $row['agent_fname']." ".$row['agent_lname']." ".$row['agent_serial'];
          echo "<option value=$ca_name>$ca_name</option>";
        } 
    }
}
function selectAgency(){
    $conn = OpenCon();
    $sql = "SELECT agency FROM agency_lu";
    $agencies = mysqli_query($conn,$sql);
    $results =mysqli_num_rows($agencies);
    
    if($results > 0){
        while($row = mysqli_fetch_assoc($agencies)){
          $agency = $row['agency'];
          echo "<option value=$agency>$agency</option>";
        } 
    }
}
function selectDevice(){
    $conn = OpenCon();
    $sql = "SELECT device FROM device_lu";
    $devices = mysqli_query($conn,$sql);
    $results =mysqli_num_rows($devices);
    
    if($results > 0){
        while($row = mysqli_fetch_assoc($devices)){
          $device = $row['device'];
          echo "<option value=$device>$device</option>";
        } 
    }
}
?>