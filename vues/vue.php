<!DOCTYPE html>
<html>
<head>
    <title>Test Makeo</title>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <form action="controller.php" method="post">
            <div class="name">
                <span>Nom et prénom</span>
                <input type="text" class="short-txt" name="name" required/>
            </div>
            <div class="mail">
                <span>Adresse email</span>
                <input type="email" class="short-txt" name="mail" required/>
            </div>
            <div class="msg">
                <span>Message</span>
                <textarea class="long-txt" name="message"></textarea>
            </div>
            <div class="submit-button">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>