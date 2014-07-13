function ui_bar_user(user){

	$("#navbar #user_name").html(user['first_name']+" "+user['last_name']);

	console.log("	Обновляем в интерфейсе юзернейм на "+user['first_name']);

	console.log(user);

	$("#navbar #user_box .avatar").attr("src",user['photo_50'])

	$("#navbar #user_box .avatar").show();

	$(".login_button").hide(); $(".logout_button").show();

}

function ui_bar_noone(){

	$("#navbar #user_name").html("Никто не авторизован");
	$("#navbar #user_box img").fadeOut();

	$(".login_button").fadeIn(); $(".logout_button").hide();

}