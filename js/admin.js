// Показать список всех заявок из базы данных

$.ajax({
  url: "php/request.php",
  method: "GET",
  dataType: "json",
  success: function(data) {
    for (let i = 0; i < data.length; i++) {
      let listID = [];
      let listName = [];
      let listPhone = [];
      let listEmail = [];

      listID.push(data[i]["id"]);
      listName.push(data[i]["name"]);
      listPhone.push(data[i]["phone"]);
      listEmail.push(data[i]["email"]);

      $(".request-blocks").append(
        '<div class="request-block"><span>' +
          listID[0] +
          "</span><span>" +
          listName[0] +
          "</span><span>" +
          listPhone[0] +
          "</span><span>" +
          listEmail[0] +
          "</span></div>"
      );
    }
  }
});

// Выход из аккаунта

$(".btn-outline-dark").click(function() {
  $.ajax({
    url: "php/logout-account.php",
    method: "POST",
    success: function(data) {
      if (data["status"] == "error") {
        alert("Вы не правильно ввели логин или пароль!");
        return;
      } else {
        location.href = "admin.php";
      }
    }
  });
});
