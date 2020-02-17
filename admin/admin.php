<?php

session_start();

if (!isset($_SESSION["userID"])) {
    header("Location: index.php");
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
    <script src="../js/jquery-3.4.1.js"></script>
    <title>Панель Администратора</title>
    <link rel="stylesheet" href="../css/admin.css" />
  </head>

  <body>
    <header class="header">
      <h4>Панель Администратора</h4>
      <button type="button" class="btn btn-outline-dark">Выйти</button>
    </header>
    <main>
      <h4>Заявки</h4>
      <div class="request">
        <div class="request-name">
          <span>№</span>
          <span>Имя</span>
          <span>Мобильный телефон</span>
          <span>Электронная почта</span>
        </div>
        <div class="request-blocks">
        </div>
      </div>
    </main>
    <script src="../js/admin.js"></script>
  </body>
</html>
