<?php

if (!defined("PHP_EOL")) {
    define("PHP_EOL", strtoupper(substr(PHP_OS, 0, 3) == "WIN") ? "\r\n" : "\n");
}

$hasError = false;
$hasSpam = false;

if (!isset($_POST['nimi'])) {
    $hasError = true;
} else {
    $nimi = trim($_POST['nimi']);
    if ($nimi == '' || preg_match("/[\r\n]/", $nimi)) {
        $hasError = true;
    }
}

if (!isset($_POST['aihe'])) {
    $hasError = true;
} else {
    $aihe = trim($_POST['aihe']);
    if ($aihe == '') {
        $hasError = true;
    }
}

if (!isset($_POST['email'])) {
    $hasError = true;
} else {
    $email = trim($_POST['email']);
    if (preg_match("/[\r\n]/", $email)) {
        $hasError = true;
    }
}

if (!isset($_POST['viesti'])) {
    $hasError = true;
} else {
    if (strlen($_POST['viesti']) < 3000) {
        $viesti = trim($_POST['viesti']);
    } else {
        $hasError = true;
    }
}

if (isset($_POST['info']) && $_POST['info'] !== '') {
    $hasSpam = true;
}

$redirectPart = 'Location: yhteys.php?message=';

if (!$hasError && !$hasSpam) {
    $to = "pelkonen.sirkka@gmail.com";
    $body = "From: $nimi ($email) \nSubject: $aihe \n\n $viesti";
    $header = 'From: ' . $email . "\n"
            . "Content-Type: text/plain; charset=UTF-8\n"
            . "Content-Transfer-Encoding: 8bit\n";

    
    if (mail($to, $aihe, $body, $header)) {
        $message = '<h2>Kiitos viestistäsi</h2>' .
                'Kiitos viestistäsi!<br /><br />' .
                '<a href="index.php" title="Etusivu" class="underline">Palaa sivustolle&#62;&#62;&#62;</a>';
        header($redirectPart . base64_encode($message));
    } else {
        $message = '<h2>Viestin lähettäminen epäonnistui</h2>' .
                'Pahoittelen, mutta viestin lähettäminen epäonnistui. Yritä myöhemmmin uudelleen.<br /><br />' .
                'Voit myös lähettää sähköpostia Sirkka Pelkoselle osoitteeseen <a href="mailto:pelkonen.sirkka(at)gmail.com" class="underline">pelkonen.sirkka(at)gmail.com</a>.<br /><br />' .
                '<a href="index.php" title="Etusivu" class="underline">Palaa sivustolle&#62;&#62;&#62;</a>';
        header($redirectPart . base64_encode($message));
    }
} else if ($hasError && !$hasSpam) {
    $message = '<h2>Viestin lähettäminen epäonnistui</h2>' .
            'Viestin lähettämisessä tapahtui virhe. <br /><br />' .
            'Voit myös lähettää sähköpostia Sirkka Pelkoselle osoitteeseen <a href="mailto:pelkonen.sirkka(at)gmail.com" class="underline">pelkonen.sirkka(at)gmail.com</a>.<br /><br />' .
            '<a href="index.php" title="Etusivu" class="underline">Palaa sivustolle&#62;&#62;&#62;</a>';
    header($redirectPart . base64_encode($message));
} else if ($hasSpam == true) {
    $message = '<h2>Viestin lähettäminen epäonnistui</h2>' .
            'Tämä sähköpostiosoite on suojattu roskapostia vastaan. Jos näet tämän viestin, kyseessä on tekninen häiriö ja viestin lähettäminen ei tällä hetkellä onnistu. <br /><br />' .
            'Pahoittelemmme häiriötä. Yritä myöhemmin uudelleen.<br /><br />' .
            '<a href="index.php" title="Etusivu" class="underline">Palaa sivustolle&#62;&#62;&#62;</a>';
    header($redirectPart . base64_encode($message));
}