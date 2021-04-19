<!DOCTYPE html>
	<html lang="ru">
	<head>
  		<title>TableReader</title>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
  <h1 class="display-4 text-center mt-5 mb-5">Данные</h1>
  <div class="container"> <table class="table table-bordered">
	<tr>
	<th>Имя</th>
	<th>Фамилия</th>
	<th>Возраст</th>
	<th></th>
	<th></th>
	</tr>
    <? while($result = mysqli_fetch_array($sql))
    {
      echo "
		 <tr>
     <td> {$result['name']} </td>
		 <td> {$result['surname']}</td>
		 <td> {$result['age']} </td>
     <td> <a href='?del={$result['id']}' class='btn btn-dark'> Удалить </a></td>
     <td> <a href='?red={$result['id']}'class='btn btn-dark'> Редактировать</a> </td>";
    }
  ?>
  </table></div>
  <p></p> <p class='display-4 text-center mt-5 mb-5'>Добавить новую запись</p>
  <p></p>
  <form action="" method="post">
	 <div class="container">
    <table class="table table-borderless">
      <tr>
        <td>Имя:</td>
        <td><input type="text" name="name" value="<?= isset($_GET['red']) ? $product['name'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Фамилия:</td>
        <td><input type="text" name="surname" value="<?= isset($_GET['red']) ? $product['surname'] : ''; ?>"></td>
      </tr>
      <tr>
        <td>Возраст:</td>
        <td><input type="text" name="age" value="<?= isset($_GET['red']) ? $product['age'] : ''; ?>"></td>
      </tr>
      <tr>
        <td colspan="5"><input type="submit" value="Добавить" class="btn btn-dark"></td>
      </tr>
    </table>
		</div>
  </form>
  <p class='display-4 text-center mt-5 mb-5'><a href="?add=new" >Обновить</a></p>
</body>
</html>
