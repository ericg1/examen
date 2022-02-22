<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>listar articulos</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>precio</th>
        <th>nombre</th>
        <th>cantidad</th>
        <th>subtotal</th>
      </tr>
      <tr>
    </thead>
    <tbody>
      <?php

foreach ($lista as $ind => $producto) {;
    //$persona = new Persona(); //$persona = $persona;
    ?><tr>

        <?php $esPar = ($ind % 2) == 0;

    if (!$esPar) {?>
      <tr style="background: #c2c2c2;">
        <?php } else {;?>

      <tr style="background: #fff;">
        <?php }
    ;?>
        <td><?php echo $producto->getId(); ?></td>
        <td><?php echo $producto->getPrecio(); ?></td>
        <td><?php echo $producto->getNombre(); ?></td>
        <td><?php echo $producto->getCantidad(); ?></td>
        <td><?php echo $producto->getSubtotal(); ?></td>
      </tr>
      <?php ;}
;?>
    </tbody>

  </table>
  <p>total <?php echo $total; ?></p>
  <?php ;?>
  <ul>
    <li><a href="../index">ir a index</a></li>
  </ul>
</body>

</html>