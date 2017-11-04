<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h2>Анкета</h2>
    <form action="login.php" method="POST">
    <p>Введите имя:<br> 
    <input type="text" name="firstname" /></p>
    <p>Выберите пол: <br> 
    <input type="radio" name="sex" value="мужской" />мужской <br>
    <input type="radio" name="sex" value="женский" />женский </p>
    <p>Вы новичок?:<br>
    <input type="checkbox" name="newbie" />Да</p>
    <p>Выберите курсы: <br>
    <select name="courses[]" size="5" multiple="multiple">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
    </select></p>
    <p>Краткий комментарий: <br>
    <textarea name="comment" maxlength="200"></textarea></p>
    <input type="submit" value="Выбрать">
    </form>
</body>
</html>