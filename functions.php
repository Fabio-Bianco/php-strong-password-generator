<?php
declare(strict_types=1);

function validateLength(?string $raw): array {
    if ($raw === null || $raw === '') {
        return [null, null]; // nessun parametro passato: nessun errore
    }
    $len = filter_var($raw, FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 5, 'max_range' => 20]
    ]);
    if ($len === false) {
        return [null, "La lunghezza deve essere un intero tra 5 e 20."];
    }
    return [$len, null];
}

function generatePassword(int $length): string {
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers   = "0123456789";
    $symbols   = "!@#$%^&*()_+-=[]{}|;:,.<>?";

    $allChars = $uppercase . $lowercase . $numbers . $symbols;

    $pwd = '';
    $max = strlen($allChars) - 1;
    for ($i = 0; $i < $length; $i++) {
        $idx = random_int(0, $max);
        $pwd .= $allChars[$idx];
    }
    return $pwd;
}
