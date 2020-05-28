<!DOCTYPE html>
<?php include("func.php");?>
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
                    <div class="card-body" style="background-color:#007bff;color:white;">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="admin-panel.php" class="btn btn-light">Go-back</a>
                            </div>
                            <div class="col-md-4">
                                <h4>Staff Details</h4> 
                            </div>
                            <div class="col-md-4">
                                <form action="search_staff.php" class="form-group" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" name="s_search" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="submit" name="staff_search" class="btn btn-light" value="search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Email id</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Staff Post</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php get_staff_details(); ?>
                            </tbody>
                        </table>
                    
                </div>
        </div>
    </div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>