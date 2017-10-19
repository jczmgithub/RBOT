<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<header>
    @include('includes.header')
</header>
<body>
<div class="container">
    <h1>Bienvenido, <?php echo $_POST['nombre'];?></h1>
    <?php
    /**
     * Created by PhpStorm.
     * User: xenlord
     * Date: 25/09/17
     * Time: 11:32
     */

    echo "Tu edad es ".$_POST["edad"]."<br/>";
    ?>
    <strong>Tus datos han sido guardados en la BBDD</strong>



</div>
</body>
@include('includes.footer')
</html>