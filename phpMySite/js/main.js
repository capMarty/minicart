jQuery(document).ready(function($) {
  $("#sendmail").on("click", function () {
  	let email = $("#email").val().trim();
  	let name = $("#name").val().trim();
  	let phone = $("#phone").val().trim();
  	let msg = $("#msg").val().trim();


  	if (email == "") {
  		$("#error").text("Введите email!");
  		return false;
  	}else if (name == "") {
  		$("#error").text("Введите имя!");
  		return false;
  	}else if (phone == "") {
  		$("#error").text("Введите телефон!");
  		return false;
  	}else if (msg.length < 10) {
  		$("#error").text("Сообщение должно содержать более 10 символов!");
  		return false;
  	}
  	
  	$("#error").text("");

  	$.ajax({ 
  		url: 'ajax/mail.php',
  		type: 'POST',
  		cache: false,
  		data: {
  			'email': email,
  			'name': name,
  			'phone': phone,
  			'msg': msg
  		},
  		dataType: 'html',
  		deforeSend: function () {
  			$("#sendmail").prop("disabled", true);
  		},
  		success: function (data) {
  			if (!data) {
  				alert("сообщение не отправлено!" )
  			}else {
  				$("#form").trigger("reset");
  			}
  			$("#sendmail").prop("disabled", false);
  		}
  	})
  })
})
