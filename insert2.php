<?php
@$Name = $_POST['Name'];
@$Highest_Qualification = $_POST['Highest_Qualification'];
@$Year_Of_Passing =$_POST['Year_Of_Passing'];
@$Gender = $_POST['Gender'];
@$Email =$_POST['Email'];
@$Contact_No =$_POST['Contact_No'];
@$Course_Enroll = $_POST['Course_Enroll'];
@$Course_Type = $_POST['Course_Type'];
@$Preferred_Location =$_POST['Preferred_Location'];

if (!empty($Name) || !empty($Highest_Qualification) || !empty($Year_Of_Passing) || !empty($Gender) ||
!empty($Email) || !empty($Contact_No) || !empty($Course_Enroll) || !empty($Course_Type) || !empty($Preferred_Location)){
  // $host = "localhost";
  // $dbUsername = "root";
  // $dbPassword = "1234";
  // $dbname = "Demo";

   $host = "remotemysql.com";
   $dbUsername = "fwlMeZ9mfD";
   $dbPassword = "JGQSOqLVpW";
   $dbname = "fwlMeZ9mfD";


  $con = new mysqli($host, $dbUsername,$dbPassword, $dbname);
  if(mysqli_connect_error()){
    die('Connection Error('. mysqli_connect_error().')'. mysqli_connect_error());
  }else {
    $SELECT = " SELECT email From Submit Where email = ? Limit 1";
    //$INSERT = "INSERT Into Submit (Name,Highest_Qualification,Year_Of_Passing,Gender,Email,Contact_No,Course_Enroll,Course_Type, Preferred_Location) values (?,?,?,?,?,?,?,?,?)";
    $INSERT = "INSERT Into Submit (Name,Highest_Qualification,Year_Of_Passing,Gender,Email,Contact_No,Course_Enroll,Course_Type, Preferred_Location) values ('$Name','$Highest_Qualification','$Year_Of_Passing','$Gender','$Email','$Contact_No','$Course_Enroll','$Course_Type','$Preferred_Location');";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt->bind_result($Email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
      $stmt->close();

      $stmt =  $con->prepare($INSERT);
      $stmt->bind_param("ssississs", $Name,$Highest_Qualification,$Year_Of_Passing,$Gender,$Email,$Contact_No,$Course_Enroll,$Course_Type, $Preferred_Location );
      $stmt->execute();
      echo "New Record Inserted Successfully..!!";
    } else {
      echo "Record Already Exist.";
    }
    $stmt->close();
    $con->close();
    }


}else {
  echo "All field are Required";
  die();
}


?>
