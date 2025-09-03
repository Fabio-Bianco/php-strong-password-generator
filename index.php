<?php 
require_once __DIR__ . '/functions.php';
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
        value="<?php echo $length !== null && $length !== false ? htmlspecialchars((string)$length) : '';?>"
        placeholder="es. 12"
      />
      <button type="submit">Genera</button>
    </form>

    <?php if ($error): ?>
      <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <?php if ($generated): ?>
      <p>La tua password:</p>
      <div class="success"><?php echo htmlspecialchars($generated); ?></div>
    <?php endif; ?>
  </div>
</body>
</html>
