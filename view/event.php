<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Registro Usuarios</title>
</head>
<body>

<form class="" method="post" action="">

  <table class="table table-light table-striped table-hover">
    <thead>
      <tr>
        <th>Id_acto</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Titulo</th>
        <th>Descripción_corta</th>
        <th>Descripcion_larga</th>
        <th>Num_asistentes</th>
        <th>Id_tipo_acto</th>
      </tr>
    </thead>
  <tbody>
    <?php foreach($data["Actos"] as $acto) { 
      echo "<tr>";
      echo "<td>".$acto["Id_acto"]."</td>"
      echo "<td>".$acto["Fecha"]."</td>"
      echo "<td>".$acto["Hora"]."</td>"
      echo "<td>".$acto["Titulo"]."</td>"
      echo "<td>".$acto["Descripcion_corta"]."</td>"
      echo "<td>".$acto["Descripcion_larga"]."</td>"
      echo "<td>".$acto["Num_asistentes"]."</td>"
      echo "<td>".$acto["Id_tipo_acto"]."</td>"
      <td><i class="bi bi-trash"></i><i class="bi bi-trash"></i></td>
      echo "</tr>";
    } 
  
  ?>
  </tbody>
  </table>
</body>
</html>