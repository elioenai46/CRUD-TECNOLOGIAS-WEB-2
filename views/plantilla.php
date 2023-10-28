<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <header>
        <h1>LOGOTIPO</h1>
    </header>
    <?php
    include "modulos/navegacion.php";
    ?>
    <section>
        <?php
        $varobj = new Mvccontroller();
        $varobj -> enlacesPagController();
        ?>
    </section>
</body>
</html>