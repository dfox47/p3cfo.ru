<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Форма заказа стенограмм p3operator.ru</title>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<script src="../include/jquery-1.11.3.min.js"></script>

<script src="../include/jquery-validation/jquery.validate.min.js"></script>
<script src="../include/jquery-validation/messages_ru.min.js"></script>

<style>
*{margin: 0; padding: 0;font-family: 'PT Sans', sans-serif;}
input[type="text"],input[type="email"]{width:370px;height:38px;background:#ebebeb !important;border:#898989 1px solid;border-radius:7px;text-align:center;color:#898989;margin-top:30px;text-transform:uppercase;}
input[type="submit"]{border:none;color:#fff;background-color:#81a71b;border-radius:7px;width:250px;height:50px;font-size:15.55pt;text-transform:uppercase;cursor:pointer;margin:40px 0 10px;}

input.error{border:1px dotted #FF0000}

</style>

<script>
$(document).ready(function() {
	var fio = $("#fio");
	var org = $("#org");
	var pos = $("#pos");
	var email = $("#email");
	var site = $("#site");
	
	fio.focus(function(){if (fio.val()=='ФИО') fio.val('');}); 
	fio.blur(function(){if (fio.val()=='') fio.val('ФИО');}); 
	
	org.focus(function(){if (org.val()=='Организация') org.val('');}); 
	org.blur(function(){if (org.val()=='') org.val('Организация');}); 
	
	pos.focus(function(){if (pos.val()=='Должность') pos.val('');}); 
	pos.blur(function(){if (pos.val()=='') pos.val('Должность');}); 
	
	email.focus(function(){if (email.val()=='e-mail') email.val('');}); 
	email.blur(function(){if (email.val()=='') email.val('e-mail');}); 
	
	site.focus(function(){if (site.val()=='Сайт компании') site.val('');}); 
	site.blur(function(){if (site.val()=='') site.val('Сайт компании');}); 
	
	/*jQuery.validator.setDefaults({
		debug: true,
		success: "valid"
	});*/
	jQuery.validator.addMethod("notFIO", function(value, element) {
		//alert(value);
		return value != 'ФИО'
	}, "ФИО");
	jQuery.validator.addMethod("notOrg", function(value, element) {
		//alert(value);
		return value != 'Организация'
	}, "Организация");
	jQuery.validator.addMethod("notPosition", function(value, element) {
		//alert(value);
		return value != 'Должность'
	}, "Должность");
	jQuery.validator.addMethod("notSite", function(value, element) {
		//alert(value);
		return value != 'Сайт компании'
	}, "Сайт компании");

	$("#stenoForm").validate({
		rules: {
			'input_name[0]': {
				required: true,
				notFIO: true
			},
			'input_name[1]': {
				required: true,
				notOrg: true
			},
			'input_name[2]': {
				required: true,
				notPosition: true
			},
			'input_name[3]': {
				required: true
			},
			'input_name[4]': {
				required: true,
				notSite: true
			}
		},
		errorPlacement: function( error, element ) {
			/*error.insertAfter( element.parent() );*/
		}
	});
		/*inputError*/
});
</script>
</head>

<body>
<div style="width:750px;text-align:center;">
<p style="font-size: 18.6pt;text-transform: uppercase;color: #81a71b;font-weight: bold;margin:10px 0 0px;">Чтобы получить стенограммы заседаний Форума,<br/>укажите свои ФИО, организацию и e-mail,<br/>и мы отправим их вам на почту</p>

<?
error_reporting(0);
function show_form()
{
?>

<form action="mail2.php" method="post" id="stenoForm">
<div>
<? # if (!$_POST['input_name'][0]) echo "fio - 00"; else echo "fio - 1"; ?>
<input id="fio" type="text" name="input_name[0]" size="39" value="<? if (!empty($_POST['input_name'][0])) echo substr(htmlspecialchars(trim($_POST['input_name'][0])), 0, 500); else echo "ФИО"; ?>" required>
<input type="hidden" name="check[]" value="1"></b>
</div>

<div>
<input id="org" type="text" name="input_name[1]" size="39" value="<? if (!empty($_POST['input_name'][1])) echo substr(htmlspecialchars(trim($_POST['input_name'][1])), 0, 500); else echo "Организация"; ?>" required>
<input type="hidden" name="check[]" value="1"></b>
</div>

<div>
<input id="pos" type="text" name="input_name[2]" size="39" value="<? if (!empty($_POST['input_name'][2])) echo substr(htmlspecialchars(trim($_POST['input_name'][2])), 0, 500); else echo "Должность"; ?>" required>
<input type="hidden" name="check[]" value="1"></b>
</div>

<div>
<input id="email" type="email" name="input_name[3]" size="39" value="<? if (!empty($_POST['input_name'][3])) echo substr(htmlspecialchars(trim($_POST['input_name'][3])), 0, 500); else echo "e-mail"; ?>" required>
<input type="hidden" name="check[]" value="1"></b>
</div>

<div>
<input id="site" type="text" name="input_name[4]" size="39" value="<? if (!empty($_POST['input_name'][4])) echo substr(htmlspecialchars(trim($_POST['input_name'][4])), 0, 500); else echo "Сайт компании"; ?>" required>
<input type="hidden" name="check[]" value="1"></b>
</div>

<div>
<input type="submit" value="Отправить" name="submit">
</div>

</form>
</div>

<?
}
function complete_mail() {


        $empty_input[] = 'ФИО';
        $empty_input[] = 'Организация';
        $empty_input[] = 'Должность';
        $empty_input[] = 'e-mail';
        $empty_input[] = 'Сайт компании';
        for ($i=0; $i<count($_POST['input_name']); $i++) {
              $_POST['input_name'][$i] = substr(htmlspecialchars(trim($_POST['input_name'][$i])), 0, 100000);
              if(substr(htmlspecialchars(trim($_POST['check'][$i])), 0, 1) == 1) {
                 if(empty($_POST['input_name'][$i]) || $_POST['input_name'][$i] == 'ФИО' || $_POST['input_name'][$i] == 'Организация' || $_POST['input_name'][$i] == 'e-mail' || $_POST['input_name'][$i] == 'Должность' || $_POST['input_name'][$i] == 'Сайт компании') {
                         $sendemail = 'No';
                         echo '<br><b>Необходимо заполнить поле '.$empty_input[$i].'!</b>';

                 }
              }
        }
        if($sendemail == 'No') show_form();
        $mess = '';
$mess .= '<b>ФИО: </b>'.$_POST['input_name'][0].'<br>';
$mess .= '<b>Организация: </b>'.$_POST['input_name'][1].'<br>';
$mess .= '<b>Должность: </b>'.$_POST['input_name'][2].'<br>';
$mess .= '<b>e-mail: </b>'.$_POST['input_name'][3].'<br>';
$mess .= '<b>Сайт компании: </b>'.$_POST['input_name'][4].'<br>';
// подключаем файл класса для отправки почты
// если Вы забыли его скачать - http://www.php-mail.ru/class.phpmailer.zip
        require 'class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->From = 'info@p3operator.ru';      // от кого email 
        $mail->FromName = 'Форма заказа стенограмм 2016 p3operator.ru';   // от кого имя
        $mail->AddAddress('info@p3operator.ru', 'info@p3operator.ru'); // кому - адрес, Имя
        //$mail->AddAddress('v.ivanova@p3info.ru', 'v.ivanova@p3info.ru'); // кому - адрес, Имя
        //$mail->AddAddress('ad@rokeen.com', 'ad@rokeen.com'); // кому - адрес, Имя
        //$mail->AddAddress('nkb@dezcom.org', 'nkb@dezcom.org'); // кому - адрес, Имя
        $mail->IsHTML(true);        // выставляем формат письма HTML
        $mail->Subject = 'Форма заказа стенограмм 2016 p3operator.ru';  // тема письма
        $mail->Body = $mess;

        

        if($sendemail != 'No'){
              // отправляем наше письмо
              if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
              echo '<br/><b>Спасибо! Ваше письмо отправлено.</b>';
        }
}
if (!empty($_POST['submit'])) complete_mail();
else show_form();
?>
















</body>
</html>
