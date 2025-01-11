<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">userid</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
  <?php 
include 'connectdemo.php';
$sql="select * from demo";
$result=mysqli_query($con,$sql);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row['userid'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];

        echo '
        <tr>
           <th scope="row">'.$userid.'<th>
           <td>'.$username.'<td>
           <td>'.$email.'<td>
           <td>'.$password.'<td>
           <td><button class="btn btn-primary "><a href="updatedemo.php?updateid='.$userid.'" class="text-light">UPDATE</a></button>
   <button class="btn btn-danger"><a href="deletedemo.php?deleteid='.$userid.' " class="text-light">DELETE</a></button>
</td>
<tr>
        ';
    }
}




?>

</tbody>
</table>

<button class="btn btn-primary"><a href="userdemo.php" class="text-light">Back</a></button>
    
</body>
</html>


