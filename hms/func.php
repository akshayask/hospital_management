<?php
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit']))
{   
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from logintb where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:admin-panel.php");
    }
    else
    {
        echo "<script> alert('Enter correct details');</script>";
        echo" <script> window.open('index.php','_self')</script>";    
    
    }
}

$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['form_submit']))
{   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp) values('$fname','$lname','$email','$contact','$docapp')";
    $result=mysqli_query($con,$query);
    echo $result;
    if($result)
    {
        echo "<script> alert('Appointment registered');</script>";
        echo" <script> window.open('admin-panel.php','_self')</script>"; 
    }
}

if(isset($_POST['staff_submit']))
{   
    $s_fname=$_POST['s_fname'];
    $s_lname=$_POST['s_lname'];
    $s_email=$_POST['s_email'];
    $s_contact=$_POST['s_contact'];
    $s_post=$_POST['s_post'];
    $query="insert into staff(fname,lname,email,contact,post) values('$s_fname','$s_lname','$s_email','$s_contact','$s_post')";
    $result=mysqli_query($con,$query);
    echo $result;
    if($result)
    {
        echo "<script> alert('Staff details registered');</script>";
        echo" <script> window.open('addstaff.php','_self')</script>"; 
    }
}

if(isset($_POST['remove']))
{  
    $name=$_POST['remove_name'];
    $query="delete from staff where fname='$name'";
    $result=mysqli_query($con,$query);

    if ($result )
    {
        echo "<script> alert('Staff removed');</script>";
        echo" <script> window.open('remove_staff.php','_self')</script>"; 
    }
        
}   

function get_patient_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];  
        echo"
        <tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td>
        </tr>";

    }
}

    function get_staff_details()
    {
        global $con;
        $query="select * from staff";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $contact=$row['contact'];
            $post=$row['post'];  
            echo"
            <tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$post</td>
            </tr>";
    
        }
    }

  
?>