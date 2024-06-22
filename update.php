<?php
require "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM stdtable WHERE id = $id ";
    $result = mysqli_query($connection, $query);
    if ($result == true) {
        $data = mysqli_fetch_assoc($result);
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $age = $data['age'];
        $batch = $data['batch'];
    }

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $batch = $_POST['batch'];

        $query = " UPDATE stdtable SET  name ='$name',email='$email',age='$age',batch='$batch' WHERE id = $id ";
        $result = mysqli_query($connection, $query);
        if ($result == true) {
            echo "<script> alert('Data Updated Successfully')</script>";
        } else {
            echo "<script> alert('Something Went Wrong')</script>";

        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding: 20px;
            align-items: center;
        }

        form {
            background-color: lightgray;
            padding: 30px;
            line-height: 3;
            width: 500px;
            transition: 1s ease-in-out;
            border-radius: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
        }

        #btn {
            color: white;
            background-color: #000;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 5px;
            cursor: pointer;
        }

        h1 {
            letter-spacing: 4px;
        }
        form:hover{
            transform: translate(0,-10px);
        }
    </style>
<body>
    <div class="content">
        <h1>UPDATE PHP</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi<br>
        laudantium voluptates est dolorem architecto iure assumenda dolore alias, <br>
        similique aliquam praesentium pariatur ad optio nobis sequi! Voluptatibus,<br>
        beatae recusandae! Libero, sed porro nihil id ipsa sit odit nisi impedit est<br>
        fugiat autem distinctio consequatur unde eius vel inventore ullam.</p>
    </div>
    <form action="" method="post">
        <h1>Update Form</h1>
        <input type="text" name="id" value="<?php echo $id ?>" hidden placeholder="Name" required></br></br>
        <input type="text" name="name" value="<?php echo $name ?> " placeholder="Name" required></br></br>
        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" required></br></br>
        <input type="number" name="age" value="<?php echo $age ?>" placeholder="Age" required></br></br>
        <input type="text" name="batch" value="<?php echo $batch ?>" placeholder="Batch" required></br></br>
        <input type="submit" id="btn" name="submit">
    </form>
</body>

</html>