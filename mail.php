<?
//error_reporting(0);
function complete_mail() {
		if(empty($_POST)) { $sendemail = 'No'; }
		
        $empty_input[] = 'ФИО';
        $empty_input[] = 'Компания';
        $empty_input[] = 'e-mail';
        for ($i=0; $i<count($_POST['input_name']); $i++) {
              $_POST['input_name'][$i] = substr(htmlspecialchars(trim($_POST['input_name'][$i])), 0, 100000);
              if(substr(htmlspecialchars(trim($_POST['check'][$i])), 0, 1) == 1) {
                 if(empty($_POST['input_name'][$i]) || $_POST['input_name'][$i] == 'ФИО' || $_POST['input_name'][$i] == 'Компания' || $_POST['input_name'][$i] == 'e-mail' || $_POST['input_name'][$i] == 'Сайт компании' || $_POST['input_name'][$i] == 'Должность') {
                         $sendemail = 'No';
                         echo '<br /><b>Необходимо заполнить поле '.$empty_input[$i].'!</b>';
                 }
              }
        }
$mess = '';
$mess .= '<b>ФИО: </b>'.$_POST['input_name'][0].'<br />';
$mess .= '<b>Компания: </b>'.$_POST['input_name'][1].'<br />';
$mess .= '<b>e-mail: </b>'.$_POST['input_name'][2].'<br />';
// подключаем файл класса для отправки почты
// если Вы забыли его скачать - http://www.php-mail.ru/class.phpmailer.zip
		require 'class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->From = 'info@p3cfo.ru';      // от кого email
        $mail->FromName = 'p3cfo';   // от кого имя
        $mail->AddAddress('press@p3info.ru', 'press@p3info.ru'); // кому - адрес, Имя
        $mail->AddAddress('info@p3cfo.ru', 'info@p3cfo.ru'); // кому - адрес, Имя
        $mail->AddAddress('ad@rokeen.com', 'ad@rokeen.com'); // кому - адрес, Имя
        //$mail->AddAddress('nkb@dezcom.org', 'nkb@dezcom.org'); // кому - адрес, Имя
        $mail->IsHTML(true);        // выставляем формат письма HTML
        $mail->Subject = 'Новая подписка на рассылку P3cfo!';  // тема письма
        $mail->Body = $mess;

        if($sendemail != 'No'){
              // отправляем наше письмо
              if (!$mail->Send()) die ('Mailer Error: '.$mail->ErrorInfo);
              echo '<br/><b>Спасибо! Заявка отправлена.</b>';
        } else {
			echo '<br/><b>Not sended!</b>';
		}
}
//if (!empty($_POST['submit'])) 
complete_mail();
?>

