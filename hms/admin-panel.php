<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go-Hospice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    

<div class="jumbotron" style="background:url(images/admin-panel.jpg);height:450px;background-size:cover;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active">Patients</a>
                <a href="patient_details.php" class="list-group-item ">Patient Details</a>
                <a href="payment.php" class="list-group-item ">Payment Details</a>
            </div>
            <br>
            <div class="list-group">
                <a href="" class="list-group-item active">Staff</a>
                <a href="staff_details.php" class="list-group-item ">Staff Details</a>
                <a href="addstaff.php" class="list-group-item ">Add new staff</a>
                <a href="remove_staff.php" class="list-group-item ">Remove staff</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body" style="background-color:#007bff;">
                <center><h5 class="card-title" style="color:white;font-size:strong;">Book an appointment</h5></center>
                </div>
                <div class="card-body">
                    <form class="form-class"action="func.php" method="post">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" class="form-control"><br>
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" class="form-control"><br>
                        <label for="">Email id:</label>
                        <input type="text" name="email" class="form-control"><br>
                        <label for="">Contact:</label>
                        <input type="text" name="contact" class="form-control"><br>
                        <label for="">Doctor Appointment</label>
                        <select class="form-control" name="docapp"id="">
                            <option value="Dr Priya from 6pm to 8pm">Dr Priya from 6pm to 8pm</option>
                            <option value="Dr Ravi from 4pm to 6pm">Dr Ravi from 4pm to 6pm</option>
                        </select><br>
                        <center><button type="submit" class="btn btn-primary mb-2" name="form_submit">Submit</button></center>
                    </form>
                </div>
            </div>
            <div class="col-md-1">
            
            </div>
        
        
        </div>
    </div>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>