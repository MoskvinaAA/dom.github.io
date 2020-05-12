// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
//---------------------------------
// кнопка поднятия
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

// окно popup
$('#okno, #bg_layer').hide();
$('input').click(function(){
    $('#okno, #bg_layer').show();
});
//---------------------------------
$('form').submit(function(e) {
  var empty = $(this).parent().find("input").filter(function() {
    return this.value === "";
  });
  if (!empty.length) {
    //Если все графы заполнены, то показываем popup
    $('.form').show();
    //очищаем все данные текстовых полей, кроме кнопок
    $('form input').not(':button, :submit').val('');
  }
  e.preventDefault();
});
//---------------------------------
	//Код jQuery, установливающий маску для ввода телефона элементу input
	//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
	$(function(){
	  //2. Получить элемент, к которому необходимо добавить маску
	  $("#user_phone").mask("8(999) 999-9999");
	});
	
	
	
	
	
	
	
	
	
	
	function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}    


