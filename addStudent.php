
<?php

$link = mysqli_connect('localhost', 'root', '', 'Notice');




if (!empty($_POST)){

    $dept=htmlentities($_POST['dept'],ENT_QUOTES);

    $studentid=htmlentities($_POST['userid'],ENT_QUOTES);
    $name=htmlentities($_POST['name'],ENT_QUOTES);
    $mobile=htmlentities($_POST['mobile'],ENT_QUOTES);
     $data=mysqli_query($link,"insert into student (deptid,studentid,name,contact) VALUES ('$dept','$studentid','$name','$mobile')");

    header("location:showuserStudent.php");





}
?>




<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Notice Board</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <scrip src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></scrip>
    <style>


        .admin{


            border: 2px solid #23148b;
            margin: 120px auto;


        }

    </style>

</head>
<body>
<div class="container">

    <div class="row">


        <div class="col-md-4 admin"style=" opacity: 0.8;filter: alpha(opacity=80);">

            <form method="post">


                <h1>Add Student</h1>
                <div class="form-group">
                    <label>Select Deptcode</label>
                    <select  class="form-control"   name="dept">
                        <option>Select Deptcode</option>
                        <?php
                        $res=mysqli_query($link,"select * from department");
                        while($row=mysqli_fetch_array($res)){
                            ?>
                            <option value="<?php echo $row['deptcode'];?>"><?php echo $row['deptcode'];?> </option  >
                        <?php     }  ?>
                    </select>
                </div>
                <div class="form-group">
                    <label >Student ID</label>
                    <input type="text"  class="form-control" name="userid"  >
                </div>
                <div class="form-group">
                    <label >Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>

                <div class="form-group">
                    <label >Contact </label>
                    <input type="text" class="form-control" name="mobile" >
                </div>


                <button type="submit" class="btn btn-primary" style="margin-top: 2%;margin-left: 40%;">ADD</button>
            </form>




        </div>





    </div>


</div>
</body>
</html>