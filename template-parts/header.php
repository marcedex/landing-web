<!-- test @borrar -->
<style type="text/css">
   header{
    background-color: #222;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: .5rem 2rem;
}
.logo-header img{
    width: 50px;
}
.nav-menu ul{
    display: flex;
    align-items: center;
}
.nav-menu li{
    margin-right: 1rem;
}
.nav-menu a{
    color: #fff;
}
.nav-menu li:last-child{
    background:#4ad295;
    padding: .25rem .75rem;
    border-radius: .2rem;
}
.menu-icon img{
    width: 30px;
    height: 30px;
    border-radius: 2px;
}
.menu-icon, #check{
    display: none;
}

@media (max-width:768px){
    .checkbtn{
        display: block;
    }
    .menu-icon{
        display: block;
        position: fixed;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }
    .nav-menu ul{
        display: block;
        position: fixed;
        top:70px;
        left:-100%;
        background: #222;
        width: 100%;
        height: 100vh;
        right: 0;
    }
    .nav-menu ul li{
        padding: 2rem;
        display: flex;
        justify-content: center;
        margin: 0;
    }
    .nav-menu ul li:last-child{
        background: none;
        padding: 1rem;
    }
    #check:checked ~ ul{
        left: 0;
        transition: all .25s;
    }
}
</style>

<!-- Logo centrado -->
<div class="img-logo">
    <a class="navbar-brand" href="#">
        <div>
            <img src="./img/new/logo-box.jpg" alt="Logo">
        </div>
    </a>
</div>

<?php

include 'template-parts/nav.php';



#$texto = 'Soluciones y Diseño Digital';
#texto = 'Qué buscas para tu Sitio Web ? ';
$texto1 = 'Obtené Tu Página ya!';
$texto2 = null;

$cont = strlen($texto1);
#$cont2 = strlen($texto2);
?>
<div class="container-fluid">
    <div class="alert my-3" role="alert">
        <h2 class="text-typing" style="width: <?php echo $cont + 0.5; ?>ch; animation: typing 2s steps(<?php echo $cont; ?>), blink .5s infinite step-end alternate;">
            <?php
            echo $texto1;
            ?>
        </h2>
        <?php if ($texto2): ?>
            <h2 class="text-typing" style="width: <?php echo $cont2 + 0.5; ?>ch; animation: typing 2s steps(<?php echo $cont2; ?>);">
                <?php
                echo $texto2;
                ?>
            </h2>
        <?php endif; ?>
    </div>
</div>