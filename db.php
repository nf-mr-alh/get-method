<html>
  <style>

body {
    background: linear-gradient(-45deg, #210242, #9198e5);
      align-items: center;
      color: white;
      display: flex;
font-family: 'Inter UI', sans-serif;
height: 100vh;
justify-content: center;
margin: 0;
width: 100vw;
    }
</style>
    <body>
            <h1> Result page  </h1>
            <form class="text" action="index4.html" method="GET">
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="noufdd";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "Give vaule <br>";
                    echo " Not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "  The value is : " . $_GET['value'];
                    echo " Successfully submit";
                   }



                   $query= "insert into task4 values($value)" ;
                   $run=mysqli_query($conn,$query)


                ?>
</form>
    </body>
</html>