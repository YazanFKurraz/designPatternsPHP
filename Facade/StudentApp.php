<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });

 class StudentApp {
    public static function main($args) {
        $aMaker = StudentMaker::getaMaker();
        $aMaker->viewART();
        $aMaker->viewIT();
    }
}
?>
</body>
</html>
