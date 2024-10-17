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
            <link rel="stylesheet" href="/styles/style.css">
            <link rel="stylesheet" href="/styles/output.css">
            <link rel="stylesheet" href="/styles/font.css">
            <link rel="stylesheet" href="/styles/persian-datepicker.min.css">
            <link rel="stylesheet" href="/styles/dataTables.dataTables.min.css">
            <script src="/js/jquery.js"></script>
            <script src="/js/persian-date.min.js"></script>
            <script src="/js/persian-datepicker.js"></script>
            <script src="/js/dataTables.min.js"></script>
            <script src="/js/axios.js"></script>
        </head>

        <body>

            <main class="min-h-screen flex-col bg-fixed flex justify-center items-center"
                style="background: url('./images/background.jpg') no-repeat center; background-size: cover;">
            <?php
        }

        function foot()
        {
            ?>
                <footer class="fixed z-0 bottom-0 bg-black bg-opacity-50 w-full p-4 backdrop-blur rounded-t-2xl text-green-200 justify-center md:flex hidden" style="box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.2);">
                    ساخته شده توسط
                    <a class="text-white mx-2" href="#">احمد بیرانوند</a>
                    در استودیو طراحی
                    <a class="text-white mx-2" href="#">هاویر وب</a>
                </footer>
            </main>
            <script src="/js/main.js"></script>
        </body>

        </html>
<?php
        }
    }


?>