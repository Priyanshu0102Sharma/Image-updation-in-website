<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

 <?php 
 include "_dbconnect.php";

 $sql="SELECT * FROM `imageupdate`";
 $result=mysqli_query($conn,$sql);
 echo'
 <table class="table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>';
 while($row=mysqli_fetch_assoc($result))
    {echo '<tr>
      <th scope="row">'.$row['sno'].'</th>
      <td>'.$row['email'].'</td>
      <td class="text-center">'.$row['password'].'</td>
      <td><img src="'.$row['image'].'" width="200"></td>
    </tr>';
    }
    echo'
  </tbody>
</table>';
 
 ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>