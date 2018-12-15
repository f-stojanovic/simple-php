<?php include('db_connection.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Search </title>
  <link rel="stylesheet" href="css\style.css">
</head>
<body>
  <div class="header">
  	<h2>Search</h2>
  </div>

<div>
    <form action="result.php" method="POST">
        <h3>Search Database</h3>
        <table>
            <tr>
                <td>Search by email</td>
                <td><input type="text" name="email" size="20"></td>
                <td><input type="submit" name="search" value="Find by email"></td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>