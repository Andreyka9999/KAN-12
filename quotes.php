<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
</head>
<body>
    <div id="quote">
        <?php include 'generate_quote.php'; ?>
    </div>
    <form method="post">
        <button type="submit">Refresh</button>
    </form>
</body>
</html>