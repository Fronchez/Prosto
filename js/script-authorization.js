// Авторизация

$(".btn-primary").click(function() {
  event.preventDefault();

  let login = $("#login").val();
  let password = $("#password").val();

  // Проверка введённых данные

  if (login == "" || password == "") {
    alert("Укажите все данные!");
    return;
  }

  // Отправка на сервер

  $.ajax({
    url: "php/login-account.php",
    method: "POST",
    data: {
      login: login,
      password: password
    },
    success: function(data) {
      if (data["status"] == "okey") {
        location.href = "index.php";
      }
    }
  });
});
