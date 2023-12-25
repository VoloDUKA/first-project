<?php
require_once 'config/connect.php';
$Tel = mysqli_query($connect, "SELECT * FROM `OrgTex`");
$Tel = mysqli_fetch_all($Tel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Budget</title>
</head>
<body>
<table>
    <tr>
      <th>id</th>
      <th>Номер техники</th>
      <th>Наименование техники</th>
      <th>Состояние техники</th>
      <th>ФИО сотрудника</th>
      <th>Дата покупки</th>
      <th>&#9998;</th>
    </tr>
    <?php
      foreach($Tel as $Tel) {
        ?>
          <tr>
            <td><?= $Tel[0] ?></td>
            <td><?= $Tel[1] ?></td>
            <td><?= $Tel[2] ?></td>
            <td><?= $Tel[3] ?></td> 
            <td><a href="update.php?id=<?= $Tel[0] ?>">Обновить</a></td>
          </tr>
        <?php
      }
    ?>
</table>
  <h2>Внесения новых данных о технике и сотруднике ответственного за технику</h2>
  <form action="vendor/create.php" method="post">
    <p>Номер техники</p>
    <textarea name="name"></textarea>
    <p>Наименование техники</p>
    <input type ="number" name= "videl">
    <p>Состояние техники</p>
    <input type="number" name="zatr">
    <p>ФИО сотрудника</p>
    <input type="number" name="ost">
    <p>Дата покупки</p>
    <input type="number" name="dat">
    <button type="submit">Добавить</button>
  </form>
</body>
</html>