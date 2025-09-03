<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/functions.php';

[$length, $error] = validateLength($_GET['length'] ?? null);

if ($error === null && $length !== null) {
    // parametro valido → genera, salva in sessione e REDIRECT alla pagina risultato
    $_SESSION['password'] = generatePassword($length);
    $_SESSION['length']   = $length;
    header('Location: result.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Password Generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Generatore di password sicure</h1>
  <div class="card">
    <form action="" method="GET">
      <label for="length">Lunghezza password (5–20)</label>
      <input
        type="number"
        name="length"
        id="length"
        min="5"
        max="20"
        required
        value="<?php echo $length !== null ? htmlspecialchars((string)$length) : ''; ?>"
        placeholder="es. 12"
      />
      <button type="submit">Genera</button>
    </form>

    <?php if ($error): ?>
      <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
