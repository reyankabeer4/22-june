<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        table{
            width: 100%;
            border: 1px solid black;
            text-align: center;
            line-height: 3;
            font-size: large;
            font-family: poppins,serif;
        }
        td,th{
            border: 1px solid black;
        }
        button{
            color: whitesmoke;
            background-color:teal   ;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
       

    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>BATCH</th>
            <th>BUTTON</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "config.php";
            $query="SELECT * FROM stdtable";
            $result=mysqli_query($connection,$query);
            $rows=mysqli_num_rows($result);
            if($rows>0){
                while($data=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>".$data['name']."</td>";
                    echo "<td>".$data['age']."</td>";
                    echo "<td>".$data['email']."</td>";
                    echo "<td>".$data['batch']."</td>";
                    echo "<td><a href='update.php?id=".$data['id']."'><button>EDIT</button></a>  <a href='delete.php?id=".$data['id']."'><button>DELETE</button></a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>