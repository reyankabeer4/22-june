<?php


require "data.php";


if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $age = $_POST['Age'];
    $batch = $_POST['Batch'];

    $query = "INSERT INTO stdtable (name,email,age,batch)  VALUES ('$name','$email','$age','$batch')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Insert Data Successfully')</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: poppins, sans-serif;
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
            /* background-color: #8fc2f5; */
            background-color: #11273c;
            padding: 30px;
            line-height: 3;
            width: 500px;
            transition: .5s ease-in-out;
            border-radius: 10px;
            transform: scale(.7);
        }
        
        input {
            width: 100%;
            padding: 10px;
            /* border: none; */
            border: 1px solid aqua;
            outline: none;
            background: transparent;
            color: aqua;
        }
        
        #btn {
            color: white;
            background-color: turquoise;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 5px;
            cursor: pointer;
            transition: .5s;
        }
        #btn:hover{
            background-color:#25aab8 ;
            
        }
        
        h2 {
            letter-spacing: 4px;
            color: white;
        }
        form:hover{
            background-color: #11273c;
            transform: translate(0,-10px) scale(1)  ;
        }
        </style>
</head>

<body>
    <div class="content">
        <h1>CREATE PHP</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi<br>
            laudantium voluptates est dolorem architecto iure assumenda dolore alias, <br>
            similique aliquam praesentium pariatur ad optio nobis sequi! Voluptatibus,<br>
            beatae recusandae! Libero, sed porro nihil id ipsa sit odit nisi impedit est<br>
            fugiat autem distinctio consequatur unde eius vel inventore ullam.</p>

    </div>
    <form action="" method="post">
        <h2>PHP FORM</h2>
        <input type="text" name="Name" placeholder="Name" required><br><br>
        <input type="email" name="Email" placeholder="Email" required><br><br>
        <input type="number" name="Age" placeholder="Age" required><br><br>
        <input type="text" name="Batch" placeholder="Batch" required><br><br>
        <input type="submit" id="btn" name="submit">
    </form>
</body>

</html>