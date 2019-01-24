<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Domande frequenti - Privacy e termini - Google</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="header">
            <div class="header-top">
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
                <h1>Privacy e termini</h1>
            </div>
            <div class="header-bottom">
                <ul>
                    <li>
                        <a href="#">Introduzione</a>
                    </li>
                    <li>
                        <a href="#">Norme sulla privacy</a>
                    </li>
                    <li>
                        <a href="#">Termini di Servizio</a>
                    </li>
                    <li>
                        <a href="#">Tecnologie</a>
                    </li>
                    <li class="active">
                        <a href="#">Domande Frequenti</a>
                    </li>
                    <li class="fl-r">
                        <a href="#">Account Google</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <?php foreach ($faqs as $faq) { ?>
                    <div class="faq">
                        <h2><?php echo $faq['question']; ?></h2>
                        <p><?php echo $faq['answer']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>
