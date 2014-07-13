/* Функции входа и выхода за средствами авторизации ВКонтакте */

function vk_login(){

	event.preventDefault();

	console.log("Выполняется авторизация...");

	VK.Auth.login(function(result){

		if(result.session) { vk_checkin(); } else { console.log("Авторизация провалена"); }

	});

}

function vk_logout() {

	event.preventDefault();

	console.log("Выполняется выход...");

	VK.Auth.logout(vk_checkout);

}


/* реакция системы на пользователей, которые */

function vk_iam(response){

	console.log("Пользователь авторизован, получаем информацию");
	
    VK.Api.call('users.get', {uids: response.session.mid,fields: "photo_50"}, function(r) { 

	   if(r.response) { 

	     ui_bar_user(r.response[0]);

	   } 

	});   



}

function vk_iamnot(){

	console.log("Пользователь не авторизован. Скрываем контролы");

	ui_bar_noone()

}

/*     */


/*  Реакция интерфейса на вход и выход пользователя  */


function vk_checkin(){

	console.log("Авторизация прошла");

	$(".login_button").hide(); $(".logout_button").show();

	/* Запрашиваем данные новоприбывшего */

	VK.Auth.getLoginStatus(vk_iam);

}

function vk_checkout(){

	console.log("Сессия завершена. Пока-пока");

	vk_iamnot();

}