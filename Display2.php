<html>
<head>
<title> Display records from Database </title>
</head>

<body>
<table border ="2">


  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Highest_Qualification</th>
  <th>Year_Of_Passing</th>
  <th>Gender</th>
  <th>Email</th>
  <th>Contact_No</th>
  <th>Course_Enroll</th>
  <th>Course_Type</th>
  <th>Preferred_Location</th>
  </tr>


  <?php
  //error_reporting(0);
  include 'db.php';
  $query = "SELECT * FROM submit";
  $data = mysqli_query($conn,$query);
  $total = mysqli_num_rows($data);


  if($total!=0)
  {

    while($result=mysqli_fetch_assoc($data))
    {
      echo "
      <tr>
      <td>".$result['Id']."</td>
      <td>".$result['Name']."</td>
      <td>".$result['Highest_Qualification']."</td>
      <td>".$result['Year_Of_Passing']."</td>
      <td>".$result['Gender']."</td>
      <td>".$result['Email']."</td>
      <td>".$result['Contact_No']."</td>
      <td>".$result['Course_Enroll']."</td>
      <td>".$result['Course_Type']."</td>
      <td>".$result['Preferred_Location']."</td>

      </tr>
      ";
    }
    //echo "Table has records";
  }
  else
  {
    "No records found.";
  }

  ?>
</table>
</body>
</html>
