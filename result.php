<?php
declare(strict_types=1);
session_start();

$password = $_SESSION['password'] ?? null;
$length   = $_SESSION['length'] ?? null;

if ($password === null || $length === null) {
    // se non hai una password in sessione, torna alla home
    header('Location: index.php');
    exit;
}

// opzionale: puliamo i dati dalla sessione, così refresh non ripete
unset($_SESSION['password'], $_SESSION['length']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Password generata</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Password generata</h1>
  <div class="card">
    <p>Lunghezza: <strong><?php echo htmlspecialchars((string)$length); ?></strong></p>
    <div class="success"><?php echo htmlspecialchars($password); ?></div>
    <p><a href="index.php">↩︎ Torna al generatore</a></p>
  </div>
</body>
</html>
