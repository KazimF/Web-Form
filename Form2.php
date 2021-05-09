<!DOCTYPE HTML>
<html>
<head>
<style>
h1{
  text-align: center;
}
table
{
color: white;
//background-color:rgba(0,0,0,0.7);
border-radius: 30px;

}
body{
background-size: cover;
}
</style>
<title>Register Form</title>

</head>
<body background="bg.jpg"
<br><br><br><br>
 <form action = "insert2.php" method ="GET">
  <table border="0" align = "center"  cellspacing="10" id="insert_tab">
   <tr>
   <h1> Summer Internship Program 2021...</h1>
    <td>Name :</td>
    <td><input type="text" placeholder ="Name" name = "Name" required></td>
   </tr>
   <tr>
    <td>Highest qualification :</td>
    <td><input type="qualification" placeholder ="B.Tech/BE/M.Tech/BCA" name = "Highest_Qualification" required></td>
   </tr>
   <tr>
     <td> Year Of Passing : </td>
     <td>
     <select name ="Year_Of_Passing" required>
      <option selected hidden value =""> Select Year of Passing </option>
      <option value ="2019">2019</option>
      <option value ="2020">2020</option>
      <option value ="2021">2021</option>

     </select>
   </td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="Gender" value ="M" required> Male
     <input type="radio" name="Gender" value ="F" required> Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="Email" placeholder ="xyz@gmail.com" name ="Email" required></td>
   </tr>
   <tr>
    <td>Contact no. :</td>
    <td>
    <input type="Contact_No" placeholder ="96********" name ="Contact_No" required>
    </td>
   </tr>
   <tr>
     <td> Course Enroll : </td>
     <td>
     <select name ="Course_Enroll" required>
      <option selected hidden value =""> Select Course </option>
      <option value ="Python">Python</option>
      <option value ="Machine Learning">Machine Learning</option>
      <option value ="AI">AI</option>
      <option value ="BlockChain">BlockChain</option>
      <option value ="Ethical Hacking">Ethical Hacking</option>
      <option value ="Selenium">Selenium</option>
     </select>
   </td>
   </tr>
   <tr>
    <td>Course Type :</td>
    <td>
     <input type="radio" name="Course_Type" value="Online Training" required> Online Training
     <input type="radio" name="Course_Type" value="Classroom Training" required> Classroom Training
    </td>
   </tr>
   <tr>
     <td> Preferred Location : </td>
     <td>
     <select name ="Preferred_Location" required>
      <option selected hidden value =""> Select Location </option>
      <option value ="Bangalore">Bangalore</option>
      <option value ="Hyderabad">Hyderabad</option>
      <option value ="Pune">Pune</option>
      <option value ="Delhi">Delhi</option>
     </select>
   </td>
   </tr>
   <tr>
    <td align ="center" colspan="2"><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
