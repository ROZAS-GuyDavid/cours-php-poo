<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP : Exemple d'héritage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
    require 'class/Autoloader.php';
    Autoloader::register();
    $form = new BootstrapForm($_POST);
    ?>
    <form action="#" method="post">
        <?php
        echo $form->input('username');
        echo $form->input('password');
        echo $form->submit();
        ?>
    </form>
</body>
</html>