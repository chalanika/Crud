<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>

<body>

  <div class="container mt-5">
  
    <?php 
        foreach($data as $row){
           ?>     
            <form method="post">
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Enter Name" value="<?php echo $row->Emp_name; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Email" name="email" value="<?php echo $row->Email; ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Birthday</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control"  placeholder="Enter Birthday" name="birthday" value="<?php echo $row->Date_of_birth; ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Address" name="address" value="<?php echo $row->Emp_Address; ?>">
                    </div>
                </div>
                    <fieldset class="form-group">
                        <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="<?php echo $row->Gender; ?>" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="<?php echo $row->Gender; ?>">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                            </div>
                            
                        </div>
                    </fieldset>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Telephone No</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control"  placeholder="Enter Telephone No" name="phone_no" value="<?php echo $row->Telephone_Number; ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control"  placeholder="Enter Age" name="age" value="<?php echo $row->Age; ?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="save" value="update">Update</button>
                    </div>
                </div>
            </form>
         <?php
        }?>
        
  </div>
</body>
</html>