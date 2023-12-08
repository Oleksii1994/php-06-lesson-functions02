<?php

///////функції для роботи з рядками
//trim
//ltrim 
//rtrim
//strip_tags
//htmlspecialchars
//htmlspecialchars_decode 
//htmlentities
//str_replace 
//str_ireplace
//strtoupper
//strtolower
//strlen / mb_strlen
// strpos / mb_strpos
//substr / mb_substr




//trim
//ltrim //видаляє зліва
//rtrim //видаляє зправа

$message = "    <h2><strong>Hello</strong> World         !</h2><script>alert('Test')</script>.";

$trimedMessage = rtrim($message, ".");

// echo $trimedMessage . "<br>";


//strip_tags //забороняє вивід html тегів, 
//наприклад в коментарях але другим параметром можна передати дозволені теги 
//strip_tags($trimedMessage, '<b>') або 
//strip_tags($trimedMessage, ['b', 'i']) якщо массив то без кутових дужок


$withoutTagsMessage = strip_tags($trimedMessage);

echo $withoutTagsMessage . "<br>";


//htmlspecialchars //підміняє валідні html теги на cпеціальні символи які не інтерпретуються браузером,
//для уникнення від xss атак


$res = htmlspecialchars($trimedMessage);
echo $res . "<br>";

//htmlspecialchars_decode //робить навпаки

$newRes = htmlspecialchars_decode("&lt;strong&gt;Text&lt;/strong&gt;");

echo $newRes . "<br>";



//htmlentities аналог htmlspecialchars, але другим параметром може очікувати налаштування


//str_replace //щось знаходить і заміняє
//str_ireplace //те саме але не регістрозалежна

$message = "Hello, [b]World[/b]";

$res = str_replace('[b]', '<b>', $message);
$res = str_replace('[/b]', '</b>', $res);

echo $message . "<br>";
echo $res . "<br>";


$message = "[i]Hello[/i], [b]World[/b]";

echo $message . "<br>";

$bb_code = ['[b]', '[/b]', '[i]', '[/i]'];
$html_code =
  ['<b>', '</b>', '<em>', '</em>']; //порядок важливий!

$res = str_replace($bb_code, $html_code, $message);
echo $res . "<br>";


//strtoupper //перетворює всі символи на великий регістр

//strtolower //навпаки

//strlen //рахує символи як один символ = 1байт але латиницею, якщо кирилиця то символ = 2байти

//mb_strlen  //завжди один символ = 1 байт не залежно латиниця або кирилицяб другим параметром можно прередати кодування 'utf-8'


// strpos / mb_strpos  //можемо шукати позицію символа або слова у рядку тоді початкова позиція,
// рахунок починається з нуля


//substr / mb_substr // в параметри очікує рядок і позицію другим параметромб 
//третій параметр опціональний кількість символів для повернення
// повертає слово якщо третього парметра немає
 // також приймає відʼємні значення
