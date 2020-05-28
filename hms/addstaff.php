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
<div class="container">
<div class="card">
                <div class="card-body" style="background-color:#007bff;">
                    <div class="row">
                        <div class="col-md-4">
                                <a href="admin-panel.php" class="btn btn-light">Go-back</a>
                        </div>
                        <div class="col-md-4">
                                <h4 style="color:white;">Add new staff</h4>
                         </div>
                            <div class="col-md-4">
                                
                            </div>
                     </div>
                </div>
                <div class="card-body">
                    <form class="form-class"action="func.php" method="post">
                        <label for="">First Name:</label>
                        <input type="text" name="s_fname" class="form-control"><br>
                        <label for="">Last Name:</label>
                        <input type="text" name="s_lname" class="form-control"><br>
                        <label for="">Email id:</label>
                        <input type="text" name="s_email" class="form-control"><br>
                        <label for="">Contact:</label>
                        <input type="text" name="s_contact" class="form-control"><br>
                        <label for="">Doctor Appointment</label>
                        <select class="form-control" name="s_post"id="">
                            <option value="doctor">Doctor</option>
                            <option value="nurse">Nurse</option>
                            <option value="cleaning">Cleaning staff</option>
                            <option value="accountant">Accountant</option>
                        </select><br>
                        <center><button type="submit" class="btn btn-primary mb-2" name="staff_submit">Submit</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>