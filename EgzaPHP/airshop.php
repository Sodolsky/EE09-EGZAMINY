<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div><h2>Odloty z lotniska</h2></div>
        <div><img src="zad6.png" alt="logotyp"></div>
    </header>
    <main>
        <h4>tabela odlotów</h4>
        <table>
            <tr>
            <th>lp</th>
            <th>numer rejsu</th>
            <th>czas</th>
            <th>kierunek</th>
            <th>status</th>
            </tr>
            <?php 
            $conn = mysqli_connect('localhost','root','','egzamin');
            if(mysqli_error($conn)){
                echo "Nie dziala";
                mysqli_close($conn);
            }else{
                $sql = "SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM odloty ORDER BY czas DESC;";
                $query = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($query)){
                    echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </main>
    <footer>
        <div class="f"><a href="kw1.png" target="_blank">Pobierz obraz</a></div>
        <div class="s"><?php
       
        if(!isset($_COOKIE['visited'])){
            setcookie('visited','v',time()+10);
            echo "<p>";
            echo "<i>";
            echo "Dzień dobry! Sprawdź regulamin naszej strony";
            echo "</i>";
            echo "</p>";
        }else{
            echo "<p>";
            echo "<b>";
            echo "Miło nam że znowu nas odwiedziłes";
            echo "</b>";
            echo "</>";
        }
        ?></div>
        <div class="t">Autor: 02290510311</div>
    </footer>
</body>
</html>