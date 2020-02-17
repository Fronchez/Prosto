// Открытие модального окна обратной связи

// По кнопке "Оставить заявку" в Header

$(".header-information__button").click(function() {
  $(".modal-feedback").show();
});

// По кнопке "Заказать звонок"

$(".header-phone__button").click(function() {
  $(".modal-feedback").show();
});

// По кнопке "Оставить заявку" в Section

$(".price-block__about button").click(function() {
  $(".modal-feedback").show();
});

// Закрытие модального окна обратной связи

$(".fa-window-close ").click(function() {
  $(".modal-feedback").hide();
});

// Функция проверки электронной почты

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
// Отправка заявку на сервер c главной страницы

$(".form-block__button").click(function() {
  event.preventDefault();

  let name = $("#user-name").val();
  let phone = $("#user-phone").val();
  let email = $("#user-email").val();

  // Проверка введённых данные

  if (name == "" || phone == "" || email == "") {
    $(".modal-error").show();
    $(".modal-error__block span").text("Укажите все данные!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  if (!isNaN(name)) {
    $(".modal-error").show();
    $(".modal-error__block span").text("Вы не правильно указали имя!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  if (!isEmail(email)) {
    $(".modal-error").show();
    $(".modal-error__block span").text("Вы не правильно указали почту!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  // Отправка на сервер

  $.ajax({
    url: "php/feedback.php",
    method: "POST",
    data: {
      name: name,
      phone: phone,
      email: email
    }
  });

  $(".modal-feedback").hide();
  $(".modal-successfully").show();
});

// Отправка заявки на сервер с модального окна

$(".form-block__button-modal").click(function() {
  event.preventDefault();

  let nameModal = $("#user-name2").val();
  let phoneModal = $("#user-phone2").val();
  let emailModal = $("#user-email2").val();

  // Проверка введённых данные

  if (nameModal == "" || phoneModal == "" || emailModal == "") {
    $(".modal-error").show();
    $(".modal-error__block span").text("Укажите все данные!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  if (!isNaN(nameModal)) {
    $(".modal-error").show();
    $(".modal-error__block span").text("Вы не правильно указали имя!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  if (!isEmail(emailModal)) {
    $(".modal-error").show();
    $(".modal-error__block span").text("Вы не правильно указали почту!");
    setTimeout(function() {
      $(".modal-error").hide();
    }, 2000);
    return;
  }

  // Отправка на сервер

  $.ajax({
    url: "php/feedback.php",
    method: "POST",
    data: {
      name: nameModal,
      phone: phoneModal,
      email: emailModal
    }
  });

  $(".modal-feedback").hide();
  $(".modal-successfully").show();
});

// Закрытие модального окна успешной отправки заявки

$(".modal-successfully__block button").click(function() {
  $(".modal-successfully").hide();
});

// Скрипт для плавного скроллинга

$(function() {
  $("a[href^='#']").click(function() {
    var _href = $(this).attr("href");
    $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
    return false;
  });
});

// Плагин для фильтрации номера телефона

// Не модальное окно

$(document).ready(function() {
  $("#user-phone").inputmask("+7(999)999-99-99");
});

// Модальное окно

$(document).ready(function() {
  $("#user-phone2").inputmask("+7(999)999-99-99");
});
