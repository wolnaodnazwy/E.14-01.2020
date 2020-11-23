<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
  </head>
  <body>
    <header>
      <section id = "logo">
        <h2>Podzespoły komputerowe</h2>
       </section>
      <section id = "menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
      </section>
    </header>
    <section id = "main">
      <h1>Dzisiejsze promocje</h1>
            <?php
              $conn = mysqli_connect("localhost", "root", "", "sklep");
              $sql = "SELECT podzespoly.id, podzespoly.nazwa, podzespoly.opis, podzespoly.cena FROM podzespoly WHERE cena < 1000";
              $query = mysqli_query($conn, $sql);
              ?>
      <table>
        <tr> <th>NUMER</th> <th>NAZWA PODZESPOŁU</th> <th>OPIS</th> <th>CENA</th> </tr>
            <?php while($row = mysqli_fetch_array($query)){ ?>
        <tr><td> <?php echo $row["id"]; ?> </td>
           <td> <?php echo $row["nazwa"]; ?> </td>
           <td> <?php echo $row["opis"];?> </td>
            <td id = "cena"> <?php echo $row["cena"]; ?> </td> </tr>
            <?php } ?>
      </table>
            <?php mysqli_close($conn); ?>
    </section>
    <footer>
      <section id = "picture"><img src="scalak2.jpg" alt="promocje na procesory"> </section>
      <section id = "info">
        <h4>Nasz sklep komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
      </section>
      <section id = "telefon"><p>zadzwoń na 601 602 603</p></section>
      <section id = "autor"><p>Stronę wykonał: 01234567891</p></section>
    </footer>

  </body>
</html>
