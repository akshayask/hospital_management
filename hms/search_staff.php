<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go-Hospice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>



<?php
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['staff_search']))
{
    $name=$_POST['s_search'];
    $query="select * from staff where fname='$name'";
    $result=mysqli_query($con,$query);
    echo" 
    <div class='jumbotron' style='background:url(images/admin-panel.jpg);height:450px;background-size:cover;'></div>
    <div class='container'>
                <div class='card'>
                    <div class='card-body' style='background-color:#007bff;color:white;'>
                        <div class='row'>
                            <div class='col-md-4'>
                                <a href='staff_details.php' class='btn btn-light'>Go-back</a>
                            </div>
                            <div class='col-md-4'>
                                <h4>Staff Details</h4> 
                            </div>
                            <div class='col-md-4'>
                                <a href='admin-panel.php' class='btn btn-light'>Home</a>
                            </div>
                        </div>
                    </div>
                    <table class='table'
                    <thead class='thead-dark'>
                    <tr>
                        <th>First</th>
                        <th>Last</th>
                        <th>Email id</th>
                        <th>Contact</th>
                        <th>Staff Post</th>
                    </tr>
                    </thead>
                    <tbody>";
    while($row=mysqli_fetch_array($result))
    {
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $post=$row['post'];  
        echo "   
        <tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$post</td>
         </tr>";
        
    }
    echo"</tbody>
    </table>
    <div>
</div>
</div>";
}
?>