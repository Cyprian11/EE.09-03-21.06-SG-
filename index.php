<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>


<div class="lewy">
    <h1>Internetowa wypożyczlnia filmów</h1>
</div>


<div class="prawy">
    <table>
        <tr><th>Kryminał</th><th>Horror</th><th>Przygodowy</th></tr>
        <tr><td>20</td>      <td>30</td>    <td>20</td></tr>
    </table>
</div>


<div class="Polecamy">
    <h3>Polecamy</h3>
    <?php
        $con=new mysqli("127.0.0.1","root","","dane3");
        $sql=mysqli_query($con,"SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id=18 ||id=22||id=23||id=25");
        while($i=mysqli_fetch_array($sql)){
            echo"<div id='img'>
            <h4>$i[0].$i[1]</h4>
            <img height='150px' width='226px' src='$i[3]' alt='film'>
            <p>$i[2]</p>
            </div>";
        }
    ?>
</div>


<div class="Polecamy">
    <h3>Filmy fantastyczne</h3>
    <?php
        $sql2=mysqli_query($con,"SELECT id, nazwa, zdjecie, opis FROM produkty WHERE rodzaje_id=12");
        while($a=mysqli_fetch_array($sql2)){
            echo"<div id='img'>
            <h4>$a[0].$a[1]</h4>
            <img height='150px' width='226px' src='$a[2]' alt='film'>
            <p>$a[3]</p>
            </div>";
        }
    ?>
</div>


<div class="stopka">
    <form action="index.php" method="post">
        Usuń film nr:<input type="number" name="liczba" id="liczba">
        <input type="submit" value="Usuń film">
    </form>
    <?php
        if(isset($_POST["liczba"])){
            $liczba=$_POST["liczba"];
            $sql3=mysqli_query($con,"DELETE FROM produkty WHERE id=$liczba");
        }
    ?>
    Stronę wykonał:000000000000000
</div>


</body>
</html>