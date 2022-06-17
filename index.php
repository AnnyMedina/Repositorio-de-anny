<?php
include 'header.php';
echo $header_html;
?>
<table class='table'>
  <thead>
    <tr>
        <td>CustomerID</td>
        <td>CompanyName</td>
        <td>City</td>
    </tr>
  </thead>
<tbody>
  <?php
## para hacer la conexion: servidor, usuario, contraseña, base de datos
  $con =mysqli_connect("localhost", "root", "root","northwind");
  $sql = "SELECT * FROM customers";
##esta linea es para ejecutar la consulta, le pasas dos paramentros, uno es la conexion, y el otro el texto de la query
  if ($result = mysqli_query($con, $sql)){
##guardamos en un array que nos va a generar una serie de filas
  while ($row = mysqli_fetch_array ($result)) {
  echo '<tr>';
      echo '<td>';
        echo $row ['CustomerID'];
      echo '</td>';
      echo '<td>';
        echo $row ['CompanyName'];
      echo '</td>';
      echo '<td>';
        echo $row ['City'];
      echo '</td>';
      echo '</tr>';
    }
  }
  ##siempre se cierra la conexion
  mysqli_close($con);
    ?>
  </tbody>
</table>
<?php echo $footer_html; ?>
