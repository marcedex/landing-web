<nav class="navbar custom-nav">
    <!-- Elementos del menú centrados debajo del logo -->
    <div class="navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Presupuesto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Que hacemos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/contacto.php">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Logo centrado -->
<div class="img-logo">
    <a class="navbar-brand" href="#">
        <div>
            <img src="./img/logo_lw_blanco.png" alt="Logo">
        </div>
    </a>
</div>


<?php
$texto = 'Soluciones web';
$cont = strlen($texto);
?>
<div class="container-fluid">
    <div class="alert" role="alert">
        <h1 style="width: <?php echo $cont + 0.5; ?>ch; animation: typing 2s steps(<?php echo $cont; ?>), blink .5s infinite step-end alternate;">
            <?php
            echo $texto;
            ?>
        </h1>
    </div>
</div>

<div class="container" style="margin-right: 0px; padding-right: 0px; width: 15%;">
    <div class="row justify-content-end">
        <img src="./img/lion-transparente.png" alt="Logo">
    </div>
</div>