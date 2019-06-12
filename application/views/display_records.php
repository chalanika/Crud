<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>
    <table class="table table-hover" >
        <thead class="thead-dark" mt-5>
            <tr>
            <th>Emp_id</th>
            <th>Emp_name</th>
            <th>Emp_Address</th>
            <th>Date_of_birth</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Telephone_Number</th>
            <th>Age</th>
            <th>Delete</th>
            <th>Updae</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                foreach($data as $row)
                {
                    echo "<tr>";
                    echo "<td>".$row->Emp_id."</td>";
                    echo "<td>".$row->Emp_name."</td>";
                    echo "<td>".$row->Emp_Address."</td>";
                    echo "<td>".$row->Date_of_birth."</td>";
                    echo "<td>".$row->Email."</td>";
                    echo "<td>".$row->Gender."</td>";
                    echo "<td>".$row->Telephone_Number."</td>";
                    echo "<td>".$row->Age."</td>";
                    echo "<td><a href='deletedata?id=".$row->Emp_id."'>Delete</a></td>";
                    echo "<td><a href='updatedata?id=".$row->Emp_id."'>Update</a></td>";
                    echo"</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>