<script>
$(document).ready(function() {

$('body').append('<div class="button-up" style="display: none;opacity: 0.7;width: 100px;height:100%;position: fixed;left: 0px;top: 0px;cursor: pointer;text-align: center;line-height: 120px;color: #dce2e8; font-size: 12.5px; font-weight: bold;">Наверх</div>'); //dce2e8
// color: #f4f984 отвечает за цвет надписи
$ (window).scroll (function () {
if ($ (this).scrollTop () > 2500) {
$ ('.button-up').fadeIn();
} else {
$ ('.button-up').fadeOut();
}
});

$('.button-up').click(function(){
$('body,html').animate({
scrollTop: 0
}, 100);
return false;
});

$('.button-up').hover(function() {
$(this).animate({
'opacity':'1',
}).css({'background-color':'#E1E7ED','color':'#45688E'}); //1 цвет за полосу. 2 цвет надписи при наведении курсора Наверх
}, function(){
$(this).animate({
'opacity':'0.7' //прозрачность надписи
}).css({'background':'none','color':'#45688E'});;
});

});  
</script>