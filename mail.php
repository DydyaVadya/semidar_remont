<?php
/*$woman = trim(strip_tags($_POST['woman'])); //количество женщин
$man = trim(strip_tags($_POST['man']));  //количество мужчин
$child = trim(strip_tags($_POST['child'])); //количество детей
$infant = trim(strip_tags($_POST['infant'])); //количество малышей
$wishes = implode(',', $_POST['predp']); // массив Пожелания по отдыху
$dt = date("Y-m-d H:i:s"); // Вывод даты и времени

$country = stripslashes($_POST['country']); //Страна
$days = trim(strip_tags($_POST['days'])); // количество дней
$from = trim(strip_tags($_POST['from'])); // дата начала отдыха
$toData = trim(strip_tags($_POST['to'])); // дата окончания отдыха
$moreChoice = implode(',', $_POST['morechoose']); // горящий тур или раннее бронирование

$stars =trim(strip_tags($_POST['stars'])); //количество звезд
$rooms = trim(strip_tags($_POST['rooms'])); //количество номеров
$meal = implode(',', $_POST['meal']); //Предпочтения по кузне
$valuta = stripslashes($_POST['valuta']); //валюта
$budget = trim(strip_tags($_POST['budget'])); //бюджет
$email = trim(strip_tags($_POST['email']));
$komments = trim(strip_tags($_POST['komments']));
$name = trim(strip_tags($_POST['name']));
$phone =  trim(strip_tags($_POST['phone']));*/
$sale = trim(strip_tags($_POST['sale']));
$housePlace = trim(strip_tags($_POST['housePlace']));
$wishes = implode(',', $_POST['WwindowPlace']);
$houseType = trim(strip_tags($_POST['homeConstruction']));
$level = trim(strip_tags($_POST['flatEtazh']));
$window1 = trim(strip_tags($_POST['window1']));
$window2 = trim(strip_tags($_POST['window2']));
$window3 = trim(strip_tags($_POST['window3']));
$window4 = trim(strip_tags($_POST['window4']));
$typeOfProfile = implode(',', $_POST['WwindowProfil']);
$complectation = implode(',', $_POST['WwindowDopkomplekt']);
$name = trim(strip_tags($_POST['name']));
$phone =  trim(strip_tags($_POST['phone']));


if((isset($phone)&&$_POST['phone']!='')){
//    $to = 'semidar_ss@ukr.net';
//    $to = 'vider2015adw@gmail.com';
    $subject = 'Семидар Ремонт!';
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>                      
                        <p>Имя: '.$name.'</p>
                        <p>Телефон: '.$phone.'</p>                         
                        <p>Особенности помещения: '.$houseType.'</p>
                        <p>Площадь помещения: '.$level.'</p>
                        <p>Где собираетесь делать ремонт?  '.$housePlace.'</p>
                        <p>У вас уже есть дизайн проект? - '.$wishes.'</p>
                        <p>Необходимость перепланировки: '.$typeOfProfile.'</p>
                        
                       <!-- <p>Рзмер скидки: '.$sale.'</p> -->     
                       <p>Рзмер скидки: 5%</p>                                                                               
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <semidar_ss@ukr.net>\r\n";
    $response = [];
    if(mail($to, $subject, $message, $headers)){
        $response = ['success'=> true,'name'=>$name,'phone'=>$phone];
    } else {
        $response = ['success'=> false,'message'=>'Что-то пошло не так! Попробуйте отправить сообщение позже !'];
    }
    $response['success'] ? header('HTTP/1.1 200 OK') : header('HTTP/1.1 500 Internal Server Error') ;
    header('Content-Type: application/json');
    echo json_encode($response);
}

$msg = "Семидра Ремонт"."%0A"."Имя: $name"."%0A"."Телефон: $phone"."%0A"."Где собираетесь делать ремонт? - $housePlace"."%0A"."У вас уже есть дизайн проект? - $wishes"."%0A"."Особенности помещения: $houseType"."%0A"."Площадь помещения: $level"."%0A"."Необходимость перепланировки: $typeOfProfile"."%0A"."Размер скидки: 5%";
file_get_contents("https://api.telegram.org/bot570437910:AAEwPpGQmtVYaeRsLwiUSVr1crfjdjQ8WY4/sendMessage?chat_id=-1001176845800&text=$msg");
