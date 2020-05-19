﻿<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="user-scalable=yes"> -->
	<meta name="viewport" content="width=device-width" content="user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/media320.css"> -->
	<link rel="stylesheet" type="text/css" href="css/mediaMyPhone.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<script src="js/script.js"/>
	<title>Дом престарелых "Филипыч"</title>

	<!-- /*Адаптив*/ -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- /*Анимация форм*/ -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
	<!-- /*Скролл меню*/ -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- /*Телефон*/ -->
	<!-- Подключение библиотеки jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Подключение jQuery плагина Masked Input -->
	<script src="js/jquery.maskedinput.min.js"></script>
</head>
<body>

<div class="header">
	<div class="progress-container">
		<div class="progress-bar" id="myBar"></div>
	</div>
</div>

<!-------------- Шапка ------------------->
<header class="header_">
		<div class="container">
			<div class="header_inner">
				<a href="index.php"><img class="header_item_logo" src="img/logo/logo.png" alt="HTML5"></a>
				<div class="header_item">
					<p class="header_text header_text1" >
						Московская область, Одинцовский<br>район, дер. Марьино, ул. Южная, д.3
					</p>
				</div>
											
				<div class="header_item">
					<p class="header_text2">
						<img  class="header_text_image"src="img/logo/phone.png" alt="HTML5" width=45px; height=45px;>
						+7(915)212-28-18
					</p>
				</div>			
											
				<div class="header_item">
					<p class="header_text3">
						<img  class="header_text_image" src="img/logo/clock.png" alt="HTML5"> 
						Часы работы <br> Круглосуточно
					</p>
				</div>					
			</div>
			
			<div class = "strip_header"></div>				
					<div class="header_text4">
						Московская область, Одинцовский<br>район, дер. Марьино, ул. Южная, д.3
					</div>
		</div>
</header>

<!-- Фиксация Меню -->
<div id= "scroll">
	<!-- Меню -->
<div class="menu-main">
	<div class="container">
		<nav class="menu">
			<ul id="top-menu">
				<li><a class= "top_" href="index.php">Главная</a></li>
				<li><a class= "top_" href="photo.html">Фото</a></li>
				<li><div class= "top1" href="">Услуги▾
					<div class="sub-menu1"></div>
						<div class="sub-menu">
							<a class= "top_0" href="1.html">Медицинский уход</a>
							<a class= "top_0" href="2.html">Пансионат для инвалидов по зрению</a>
							<a class= "top_0" href="3.html">Психоневрологический пансионат</a>
							<a class= "top_0" href="4.html">Сестринский уход за пожилыми людьми</a>
						</div>
					</div>
				</li>
				<li><a class= "top_" href="prices.html">Цены</a></li>
				<li><a class= "top_" href="oformlenie.html">Оформление</a></li>
				<li><a class= "top_" href="contacts.html">Контакты</a></li>
				<li><a class="active-button" href="request.php">Отправить заявку</a></li>
				<li><a class= "top_" href="reviews.php">Отзывы</a></li>
			</ul>
		</nav>
	</div>	
</div>
</div>

<!--------------------Гамбургер меню------------------>
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
	<div class="menu_btn"><img src="img/hamburger-menu/Ellipse.png" alt="HTML5" style="vertical-align: middle;"/></div>
    <label class="menu__btn" for="menu__toggle"></label>

	<ul class="menu__box">
	
	<input id="menu__toggle" type="checkbox" />
	<div class="menu_b"><img src="img/hamburger-menu/close_menu.png" alt="HTML5" style="vertical-align: middle;"/></div>
    <label class="menu__b" for="menu__toggle"></label>
	
	<img src="img/hamburger-menu/close_menu.png" class="menu__box_img_close" onclick="myFunction()" alt="HTML5" style="vertical-align: middle;"/>
		
		<li><a class="menu__item" href="index.php">Главная</a></li>
		<li><a class= "menu__item" href="photo.html">Фото</a></li>
			<li>
				<a class="top1_mediaMyPhone" href="javascript:void(0);" tabindex="1">Услуги▾</a>
				<div class="podmenu">
					<div class="sub-menu1_mediaMyPhone"></div>
						<div class="sub-menu_mediaMyPhone">
							<a class= "top_0" href="1.html">Медицинский уход</a>
							<a class= "top_0" href="2.html">Пансионат для инвалидов по зрению</a>
							<a class= "top_0" href="3.html">Психоневрологический пансионат</a>
							<a class= "top_0" href="4.html">Сестринский уход за пожилыми людьми</a>
						</div>
				</div>
			</li>
			<li><a class= "menu__item" href="prices.html">Цены</a></li>
			<li><a class= "menu__item" href="oformlenie.html">Оформление</a></li>
			<li><a class= "menu__item" href="contacts.html">Контакты</a></li>
			<li><a class= "menu__item" href="request.php">Отправить заявку</a></li>
			<li><a class= "menu__item" href="reviews.php">Отзывы</a></li>		
   <table>
		<tr>
			<td>
				<div class="menu__box_icon1"><img src="img/hamburger-menu/1.png" alt="HTML5" style="vertical-align: middle;"/></div>
				<a href="https://www.facebook.com/grandpa.filipych"></a>

				<div class="menu__box_icon2"><img src="img/hamburger-menu/2.png" alt="HTML5" style="vertical-align: middle;"/></div>
				<a href="https://vk.com/club155151679"></a>

				<div class="menu__box_icon3"><img src="img/hamburger-menu/3.png" alt="HTML5" style="vertical-align: middle;"/></div>
				<a href="https://ok.ru/filipych"></a>
			</td>
		</tr>
	</table>
	</ul>
</div>

<div class = "message">
	<div class="container">
		<div class="message_text">Отправить заявку</div>
	</div>
</div>

<div class = "message_phone">
	<div class="container">
		<div class="message_text_media">Отправить<br>заявку
		<img src="img/message_media_phone.png" alt="HTML5" style="vertical-align: middle;" width="320" height="60"/></div>
		
		<div class="message_img_phone">
		<img  src="img/message_media_phone.png" alt="HTML5" style="vertical-align: middle;" /></div> 
		<div class="message_text_phone">Отправить<br>заявку</div>
	</div>
</div>

<div class="form">
	<table>
		<th>
			<form id="form" method="post" action="send.php">
				<div class="form_box">				
					<div class="group">      
						<input type="text" id="name" placeholder="Имя" name="name" onblur="if(this.value.length == 0) this.value = 'Имя'"
						onfocus="if(this.value == 'Имя') this.value = '' " required
						oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"/>
					</div>
					
					<div class="group">      
						<input type="email" id="email" name="email" value="E-mail" onblur="if(this.value.length == 0) this.value = 'E-mail'" 
						onfocus="if(this.value == 'E-mail') this.value = '' " required 
						oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"/>
					</div>
					
					<script src="js/jquery.maskedinput.min.js"></script>
					<div class="group">      
						<input type="text" id="user_phone"  placeholder="+7(999)999-99-99" name="phone_number" onblur="if(this.value.length == 0) this.value = '+7(999)999-99-99'"
						onfocus="if(this.value == 'tel') this.value = '' " required 
						oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"/>
					</div>
					
					 <script>
						$(document).ready(function() {
						$("#user_phone").mask("+7(999)999-99-99");
					  });
					</script>
					
					<div class="group">
						<div class="group1">
							<textarea class="mess" id="message" name="msg" onblur="if(this.value.length == 0) this.value = 'Сообщение'" onfocus="if(this.value == 'Сообщение') this.value=''">Сообщение</textarea>
						</div>	
					</div>		

					<button id="button" class="button2" class="btn_submit disabled" type="submit" value="Отправить">Отправить</button>
					
					
					<script>
					$(document).ready(function(){
					$(".popup-fade").magnificPopup();
					)};
					</script>
					
					<script>
					$(.form).submit(function(){
					$.ajax({
						type: "POST",
						url: "mail.php",
						data: $(this).serialize()
					}).done(function(){
						alert("С");
						setTimeout(function() {
						}, 1000);
					});
					return false;
					});
					</script>
					
					
					<!-- req формы -->
					<script type="text/javascript">
						$('group').ready(function() {
						  $('#button').on('click', function() {
							$('input[required]').addClass('req');
						  });
						});
					</script>
					
					<script type="text/javascript">
					$('#form').submit(function(e) {
					  var empty = $(this).parent().find("input").filter(function() {
						return this.value === "";	
					  });
					  if (!empty.length) {
					  document.getElementById(".group").reset();
						//Если все графы заполнены, то показываем popup
						$('.popup-fade').show();
						form.submit();
						//очищаем все данные текстовых полей, кроме кнопок	
							$('#form').trigger('reset'); // очистка формы				
						// $('.group').value('').change();
						// $(".group").reset();
					  }
					  	
					  e.preventDefault();
					  
					});
					</script>
					
					<!----------------------------------------------------------------------- Открытие popup valid -->
					<!-- <script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script> -->
					<!-- <script> -->
					<!-- $(document).ready(function($) { -->
						<!-- $('#button').click(function() { -->
							<!-- $('.popup-fade').fadeIn(); -->
							<!-- return false; -->
						<!-- });	 -->
						
						<!-- $('.popup-close_valid').click(function() { -->
							<!-- $(this).parents('.popup-fade').fadeOut(); -->
							<!-- return false; -->
						<!-- });		 -->
					 
						<!-- $(document).keydown(function(e) { -->
							<!-- if (e.keyCode === 27) { -->
								<!-- e.stopPropagation(); -->
								<!-- $('.popup-fade').fadeOut(); -->
							<!-- } -->
						<!-- }); -->
						
						<!-- $('.popup-fade').click(function(e) { -->
							<!-- if ($(e.target).closest('.popup_valid').length == 0) { -->
								<!-- $(this).fadeOut();					 -->
							<!-- } -->
						<!-- }); -->
					<!-- }); -->
					<!-- </script> -->
					
					<!-- Закрытие popup valid -->
					<script>
					$(document).ready(function($) {
						// Клик по ссылке "Закрыть".
						$('.popup-close_valid').click(function() {
							$(this).parents('.popup-fade').fadeOut();
							return false;
						});        
					 
						// Закрытие по клавише Esc.
						$(document).keydown(function(e) {
							if (e.keyCode === 27) {
								e.stopPropagation();
								$('.popup-fade').fadeOut();
							}
						});
						
						// Клик по фону, но не по окну.
						$('.popup-fade').click(function(e) {
							if ($(e.target).closest('.popup_valid').length == 0) {
								$(this).fadeOut();					
							}
						});	
					});
					</script>
					
					<!------------------------------------------------------------------- Открытие popup invalid -->
					<!-- <script src="https://yandex.st/jquery/2.1.1/jquery.min.js"></script> -->
					<!-- <script> -->
					<!-- $(document).ready(function($) { -->
						<!-- $('#button').click(function() { -->
							<!-- $('.popup_invalid').fadeIn(); -->
							<!-- return false; -->
						<!-- });	 -->
						
						<!-- $('.popup-close_invalid').click(function() { -->
							<!-- $(this).parents('.popup_invalid').fadeOut(); -->
							<!-- return false; -->
						<!-- });		 -->
					 
						<!-- $(document).keydown(function(e) { -->
							<!-- if (e.keyCode === 27) { -->
								<!-- e.stopPropagation(); -->
								<!-- $('.popup-fade').fadeOut(); -->
							<!-- } -->
						<!-- }); -->
						
						<!-- $('.popup_invalid').click(function(e) { -->
							<!-- if ($(e.target).closest('.red').length == 0) { -->
								<!-- $(this).fadeOut();					 -->
							<!-- } -->
						<!-- }); -->
					<!-- }); -->
					<!-- </script> -->
					<!-- Закрытие popup invalid -->
					<!-- <script> -->
					<!-- $(document).ready(function($) { -->
						<!-- // Клик по ссылке "Закрыть". -->
						<!-- $('.popup-close_invalid').click(function() { -->
							<!-- $(this).parents('.popup_invalid').fadeOut(); -->
							<!-- return false; -->
						<!-- });         -->
					 
						<!-- // Закрытие по клавише Esc. -->
						<!-- $(document).keydown(function(e) { -->
							<!-- if (e.keyCode === 27) { -->
								<!-- e.stopPropagation(); -->
								<!-- $('.popup_invalid').fadeOut(); -->
							<!-- } -->
						<!-- }); -->
						
						<!-- // Клик по фону, но не по окну. -->
						<!-- $('.popup-fade').click(function(e) { -->
							<!-- if ($(e.target).closest('.red').length == 0) { -->
								<!-- $(this).fadeOut();					 -->
							<!-- } -->
						<!-- });	 -->
					<!-- }); -->
					<!-- </script> -->
					
					<div class="popup_invalid">
						<div class="red">
							<table>
								<tr>	
									<div class="popup-close_invalid"><img src="img/close_invalid.png"></div>	
								</tr>
								<tr>
									<div class="text_okno_invalid">Пожалуйста, заполните все обязательные поля</div>	
								</tr>
							</table>	
						</div>
					</div>
					
					<div href="#form" class="popup-fade">
						<div class="popup_valid" id="popup_valid">
							<div class="popup-close_valid" href="#"><img src="img/close_valid.png"/></div>
							<div class="img_ready"><img src="img/ready.png"/></div>
							<div class="text_okno_valid">Спасибо! Данные успешно<br>отправлены.</div>
						</div>	
					</div>	
				</div>
			</form>
		</th>
		<th>
			<div class="img_form">
			<img src="img/form.png" alt="HTML5" style="vertical-align: middle;"/>
			</div>
		</th>			
	</table>	
</div>

<!---- Доп кнопки ----->
<!---- Кн поднятия ---->
<div id="button_up"><img src="img/up.png"/></div>
<script type="text/javascript">
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('#button_up').fadeIn();
} else {
$('#button_up').fadeOut();
}
});
$('#button_up').click(function() {
$('body,html').animate({scrollTop:0},800);
});
});
</script>
<!---- Скролл меню ---->
<script> 
  var h_hght = 110; // высота шапки
  var h_mrg = 0;    // отступ когда шапка уже не видна
  $(function(){
   $(window).scroll(function(){
      var top = $(this).scrollTop();
      var elem = $('#scroll');
      if (top+h_mrg < h_hght) {
       elem.css('top', (h_hght-top));
      } else {
       elem.css('top', h_mrg);
      }
    });
  });
</script>
<script type="text/javascript">
var h_hght = 110; // высота шапки
  var h_mrg = 0;    // отступ когда шапка уже не видна
     $(function(){
     $(window).scroll(function() {
      var top = $(this).scrollTop();
       if (top < 110) $('.menu-main').css("box-shadow", "none");
       else $(".menu-main").css("box-shadow", "0 0 3px rgba(0,0,0,0.5)");
     });
    });
</script>
<!---- Скролл полоски  ---->
<script type="text/javascript">
var h_hght1 = 0; // высота шапки
  var h_mrg1 = 0;    // отступ когда шапка уже не видна
     $(function(){
     $(window).scroll(function() {
      var top = $(this).scrollTop();
       if (top < 110) $('.progress-container').css("background-color", "#fff");
       else $(".progress-container").css("background-color", "#ebe2e8");
     });
    });
</script>
<!---- Скролл видимости полоски  ---->
<script>
var h_hght1 = 0; // высота шапки
  var h_mrg1 = 0;    // отступ когда шапка уже не видна
     $(function(){
     $(window).scroll(function() {
      var top = $(this).scrollTop();
       if (top > 110) $('.progress-container').css("opacity", "1");
       else $(".progress-container").css("opacity", "1");
     });
    });
</script>


<!---- Подвал ---->
<div class = "footer_prices">
<div class="container">		
		<table width="100%" height="300px">
			<tr>
				<th rowspan="3" width="300px" height="297px">
				
					<div class = "img_ma">
					<a href="https://www.instagram.com/moskvina.a_/?hl=rusrc="/>
					<img src="img/footer/ma.png" alt="HTML5"/></div>
				</th>
				<th width="350px">
					<div class = "TheMainThing_footer">
						<div class = "text_footer1">Контакты</div></div>
				</th>
				<th width="270px">
					<div class = "TheMainThing_footer">
						<div class = "text_footer2">Меню</div></div>
				</th>
				<th>	
					<div class = "TheMainThing_footer">
						<div class = "text_footer3">Мы в соц сетях</div></div>
				</th>
			</tr>
			
			<tr>
			<td>
				<div class = "img_strip">
					<img src="img/footer/strip.png" alt="HTML5"/></div>
			</td>
			<td>
				<div class = "img_strip">
					<img src="img/footer/strip.png"alt="HTML5"/></div>
			</td>
			<td>
				<div class = "img_strip">
					<img src="img/footer/strip.png" alt="HTML5"/></div>
			</td>
			</tr>
			
			<tr>
				<td>
					<table class="contacts_footer">
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/gps.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
								<div class="_">
								<span style="vertical-align: middle;">Московская область,<br>Одинцовский район, дер.<br>Марьино, ул. Южная, д.3</span></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/phone.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
							<div class="_1">
								<span style="vertical-align: middle;">Моб: +7 (915) 212-28-19</span></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/1message.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
							<div class="_">
								<span style="vertical-align: middle;">dom-prestarelyh@bk.ru</span></div>
								</div>
							</td>
						</tr>	
					</table>
				</td>
				<td>
					<div class = "menu_footer">
					<div class="menu_footer_anim">
						<a href="">Цены</a>
					</div>
						<p>- - - - - - - - - - - - - - - - - - - - - - -</p>
					<div class="menu_footer_anim">	
						<a href="">Оформление</a>
					</div>	
						<p>- - - - - - - - - - - - - - - - - - - - - - -</p>
					<div class="menu_footer_anim">	
						<a href="">Оставить заявку</a>
					</div>	
						<p>- - - - - - - - - - - - - - - - - - - - - - -</p>
					</div>
				</td>
				<td>
					<div class = "social_footer">
						<div class="img_icon_footer">
						<a href="https://www.facebook.com/grandpa.filipych">
							<img src="img/footer/f_icon.png"/></a>
						<a href="https://vk.com/club155151679">
							<img src="img/footer/vk_icon.png"/></a>
						<a href="https://ok.ru/filipych">
							<img src="img/footer/o_icon.png"/></a>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class = "footer_request_phone">
	<div class="container">	
		<table>
			<tr>
				<div class = "img_ma_phone">
					<a href="https://www.instagram.com/moskvina.a_/?hl=rusrc="></a>
					<img src="img/footer/ma.png" width="75x" height="86px" alt="HTML5"/></div>
			</tr>	
		</table>
		
		<table>
			<tr>
				<td>
					<div class = "TheMainThing_footer_phone1">Контакты</div>
				</td>
			</tr>
		</table>
		<table>	
			<tr>
				<td>
					<div class = "img_strip_phone">
					<img src="img/footer/strip.png" alt="HTML5"/></div>
				</td>
			</tr>
		</table>
		
		<table class="contacts_footer_phone">
			<tr>		
				<td>
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/gps.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
								<div class="_phone">
								<span style="vertical-align: middle;">Московская область,<br>Одинцовский район, дер.<br>Марьино, ул. Южная, д.</span></div>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/phone.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
							<div class="_phone1">
								<span style="vertical-align: middle;">Моб: +7 (915) 212-28-19</span></div>
									</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="img_footer">
								<img src="img/footer/1message.png" alt="HTML5" style="vertical-align: middle;"/>
							</td>
							<td>
							<div class="_phone">
								<span style="vertical-align: middle;">dom-prestarelyh@bk.ru</span></div>
								</div>
							</td>
						</tr>	
				</td>
			</tr>
		</table>
		
		<table>		
			<tr>
				<td>
					<div class = "TheMainThing_footer_phone2">Мы в соц сетях</div></div>
				</td>
			</tr>
			<tr>
				<td>
					<div class = "img_strip1_phone">
					<img src="img/footer/strip.png" alt="HTML5"/></div>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td>
					<div class = "social_footer_phone">
						<div class="img_icon_footer_phone">
						<a href="https://www.facebook.com/grandpa.filipych">
							<img src="img/footer/f_icon.png" width="35x" height="35px"/></a>
						<a href="https://vk.com/club155151679">
							<img src="img/footer/vk_icon.png" width="35x" height="35px"/></a>
						<a href="https://ok.ru/filipych">
							<img src="img/footer/o_icon.png" width="35x" height="35px"/></a>
						</div>
					</div>
				</td>
			</tr>	
		</table>
	</div>
</div>

<div class = "black_width">
<div class="black_footer_request">
	<div class="container">©2020 Частный дом престарелых «Филипыч»</div>
</div>
</div>

</body>
</html> 