<?php
/**
 * Created by PhpStorm.
 * User: Пользователь
 * Date: 3/5/2019
 * Time: 12:19 AM
 */

require_once "classes/Translator.php";

$originText = $_GET['originText'];
$rule2 = isset($_GET['rule2']) ? $_GET['rule2'] : 'way';
$rule3 = isset($_GET['rule3']) ? $_GET['rule3'] : 'with-e';

$pigTranslate = new Translator($rule2,$rule3);

echo $pigTranslate->translateSentence($originText);
