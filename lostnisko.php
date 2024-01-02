<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="baner1">
        <img src="zad5.png" alt="logo lotnisko">
    </div>
    <div id="baner2">
        <h1>przyloty</h1>
    </div>
    <div id="baner3">
        <h3>przydatne linki</h3>
        <a href="kwerendy.txy">pobierz</a>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>nr_rejsu</th>
                <th>status</th>
            </tr>
            <?php 
          
            $conn = mysqli_connect("localhost","root", "","przyloty");
              $query = mysqli_query($conn,"SELECT czas,kierunek,nr_rejsu,status_lotu FROM przyloty ORDER BY czas");
              while($t = mysqli_fetch_row($query))
              {
               
                echo"<tr>";
                echo"<td>$t[0]</td>";
                echo"<td>$t[1]</td>";
                echo "<td>$t[2]</td>";
                echo"<td>$t[3]</td>";
                echo"</tr>";
              }
              
              mysqli_close($conn);
            ?>
        </table>
    </div>
    <div id="stopka1">
    <?php 
      $conn = mysqli_connect("localhost","root", "","przyloty");
      if(!(isset($_COOKIE["ciacho"])))
      {
        echo "<p>Dzien dobry! strona lotniska uzywa ciastek</p>";
        $czas =   time() + 7200;
        setcookie("ciacho","value", $czas);
      }
      else{
        echo "<p>witaj panownie</p>";
      }
      mysqli_close($conn);
    ?>
    </div>
    <div id="stopka2">autor:000000000</div>
</body>
</html>