<?php

session_start();

if (isset($_SESSION["userID"])) {
    header("Location: admin.php");
};

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style-authorization.css" />
    <script src="../js/jquery-3.4.1.js"></script>
  </head>
  <body>
    <main>
      <h2>Авторизация</h2>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Логин</label>
          <input
            type="text"
            class="form-control"
            id="login"
            aria-describedby="emailHelp"
          />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Пароль</label>
          <input
            type="password"
            class="form-control"
            id="password"
          />
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
      </form>
    </main>
    <script src="../js/script-authorization.js"></script>
  </body>
</html>
