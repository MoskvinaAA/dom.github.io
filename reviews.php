<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="user-scalable=yes"> -->
	<meta name="viewport" content="width=device-width" content="user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/media320.css"> -->
	<link rel="stylesheet" type="text/css" href="css/mediaMyPhone.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
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
<!-- <div class="header_phone"> -->
	<!-- <div class="progress-container1"> -->
		<!-- <div class="progress-bar1" id="myBar"></div> -->
	<!-- </div> -->
<!-- </div> -->

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
			
				<div class ="strip_header"></div>					
					<div class="header_text4">
						Московская область, Одинцовский<br>район, дер. Марьино, ул. Южная, д.3
					</div>
		</div>
</header>

<!----------------- Фиксация Меню ---------------------->
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
				<li><a class= "top_" href="request.php">Отправить заявку</a></li>
				<li><a class="active-button" href="reviews.php">Отзывы</a></li>
			</ul>
		</nav>
	</div>	
</div>
</div>
<!--------------------Гамбургер меню------------------>
<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
	<div class="menu_btn"><img src="img/hamburger-menu/Ellipse1.png" alt="HTML5" style="vertical-align: middle;"/></div>
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
			<li><a class= "menu__item" href="request.php">Отправить заявку</a></li><li>
			<li><a class= "menu__item" href="reviews.php">Отзывы</a></li>				
   <table>
		<tr>
			<td>
				<a class="menu__box_icon1" href="https://www.facebook.com/grandpa.filipych"><img src="img/hamburger-menu/1.png" alt="HTML5" style="vertical-align: middle;"/>
				</a>

				<a class="menu__box_icon2" href="https://vk.com/club155151679"><img src="img/hamburger-menu/2.png" alt="HTML5" style="vertical-align: middle;"/></a>

				<a class="menu__box_icon3" href="https://ok.ru/filipych"><img src="img/hamburger-menu/3.png" alt="HTML5" style="vertical-align: middle;"/></a>
			</td>
		</tr>
	</table>
	</ul>
</div>


<!----------------------- 1 блок Отзывы оглавление-------------------------------->
<div class = "reviews">
	<div class="container">
		<div class="message_text1">Отзывы</div>
			
		<div class="message1_img_phone">
		<img  src="img/message_media_phone.png" alt="HTML5" style="vertical-align: middle;"/></div> 
		<div class="message1_text_phone">Отзывы</div>
	</div>
</div>

<!-- 2 блок Отзывы Форма-->
<div class = "reviews_">
	<div class="container">
		<form name="comment" action="sendReviews.php" method="post" enctype="multipart/form-data">
		<div class="form_box">				
					<div class="group_reviews">      
						<input for="name" type="text" id="name" placeholder="Ф.И.О" name="name" onblur="if(this.value.length == 0) this.value = 'Ф.И.О'"
						onfocus="if(this.value == 'Ф.И.О') this.value = '' " required
						oninvalid="this.setCustomValidity(' ')" oninput="setCustomValidity('')"/>
					</div>
					
					<div class="group_reviews">
						<div class="group1">
							<textarea class="mess" id="message" name="msg" onblur="if(this.value.length == 0) this.value = 'Комментарий'" onfocus="if(this.value == 'Комментарий') this.value=''">Комментарий</textarea>
						</div>	
					</div>		
					<!--<div class="reviews_photo"><input type="file" name="photo"></div>-->
				
					<button id="button" class="button_reviews" class="btn_submit disabled" type="submit" value="Отправить">Отправить</button>
					<!-- <div id="button" class="button2" class="btn_submit disabled" type="submit" value="Отправить">Отправить</div>  -->
		</div>
		</form>
	</div>
</div>

<!--------------------- 2 блок Отзывы Комментарии ------------------>

<div class = "reviews__">
	<div class="container">
		<div class="reviews_back">
			<table class="reviews__reviews">
				<div class="reviews_img"></div>

				<?php 

				// Параметры для подключения
				$db_host = "localhost"; 
				$db_user = "root"; // Логин БД
				$db_password = ""; // Пароль БД
				$db_base = 'filipich'; // Имя БД
				$db_table = "reviews"; // Имя Таблицы БД

				// Подключение к базе данных
				$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

				// Если есть ошибка соединения, выводим её и убиваем подключение
				if ($mysqli->connect_error) {
				die('Ошибка : ('. $mysqli->connect_error .') '. $mysqli->connect_error);
				}

				$result = $mysqli->query("SELECT username,usertext,reviewdate FROM reviews");
				$rows = mysqli_num_rows($result);

					for ($i = 0 ; $i < $rows ; ++$i)
				    {
				        $row = mysqli_fetch_row($result);
				        echo "<tr>";
				            for ($j = 0 ; $j < 3 ; ++$j)
				            {
				             echo " <td><div class='reviews_name'>$row[$j]</div></td>";
				            }
				        echo "</tr>";
				    }
				     
				    // очищаем результат
				    mysqli_free_result($result);
				
				 
					mysqli_close($mysqli);
				?>	
			</table>
		</div>
	</div>
</div>





<!---- Подвал ---->
<div class = "footer_reviews" width="100%">
	<div class="container">		
		<table>
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

<div class = "footer_reviews_phone" width="100%">
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

<div class = "black_width_reviews">
	<div class="black_footer_reviews" width="100%">
		<div class="container">©2020 Частный дом престарелых «Филипыч»
		</div>
	</div>
</div>


<!------------------ Доп кнопки -------------------->
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
<!---------- Кн звонка ---------->
<a href="tel: 89005553535" id="button_bell"><img src="img/bell1.png"/></a>
<!-- <div id="button_bell"><a href="tel: 89005553535"></div> -->
</body>
</html>