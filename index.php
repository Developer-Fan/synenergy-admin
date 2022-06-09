<?php 
$conn = new SQLite3("./db/database.sqlite");
$sql = "
CREATE TABLE IF NOT EXISTS usrs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    password TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
";
$res = $conn->exec($sql);
if (!$res) {
    echo "Error creating table: " . $conn->lastErrorMsg();
}
$conn -> close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synenergy Admin</title>
    <link rel = "stylesheet" href = "styles/index.css" type = "text/css">
</head>
<body>
    <div class = "main">
    <div class = "menu">
        <h3>Synenergy official administration website</h3>
        <a id = "current">Home</a>
        <a href = "login.php">Login</a>
    </div>
    <div class = "body">
        <h1>Synenergy Admin</h1>
    </div>
    </div>
</body>
</html>