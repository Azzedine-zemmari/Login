<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
        include "./dbConn.php"
    ?>
    <form action="Register.php" method="post">
        <label for="name">User name :</label>
        <input type="text" id="name" name="name" class="bg-slate-100">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="bg-slate-100">
        <label for="password">password</label>
        <input type="password" id="password" name="password" class="bg-slate-100">
        <input type="submit" value="submit">
    </form>
</body>
</html>