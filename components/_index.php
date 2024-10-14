<?php
class IndexTheme
{
    function head($title)
    {
    ?>
        <!DOCTYPE html>
        <html lang="fa">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $title ?></title>
            <link rel="stylesheet" href="styles/style.css">
            <link rel="stylesheet" href="styles/output.css">
            <link rel="stylesheet" href="styles/font.css">
        </head>

        <body>

            <main class="min-h-screen flex-col bg-fixed flex justify-center items-center"
                style="background: url('./images/background.jpg') no-repeat center; background-size: cover;">
        <?php
        }

        function foot()
        {
        ?>
            </main>
        </body>
        </html>
        <?php
        }
    }


?>