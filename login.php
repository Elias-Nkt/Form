<!DOCTYPE html>
<html>
    <head>
        <title>First site on PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(isset($_POST['firstname']) && isset($_POST['sex']) && isset($_POST['comment']) && isset($_POST['courses']))
            {
                $name = htmlentities($_POST['firstname']);
                $sex = htmlentities($_POST['sex']);
                $hostel = "net";
                if(isset($_POST['newbie'])) $newbie = "да";
                $comment = htmlentities($_POST['comment']);
                $courses = $_POST['courses'];
                $output ="
                <html>
                <head>
                <title>Анкетные данные</title>
                </head>
                <body>
                Вас зовут: $name<br />
                Форма обучения: $sex<br />
                Новенький: $newbie<br />
                Комментарий: $comment <br>
                Выбранные курсы:
                <ul>";
                foreach($courses as $item)
                    $output.="<li>" . htmlentities($item) . "</li>";
                $output.="</ul></body></html>";
                echo $output;
            }
            else
            {   
                echo "Введенные данные некорректны";
            }
        ?>
    </body>
</html>