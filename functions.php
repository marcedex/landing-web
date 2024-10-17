<?php

define('LINK_WA', 'https://api.whatsapp.com/send?phone=');


/**
 * Esta función Devuelve un link de wa simple con numero pero sin texto.
 *
 * @param string $numero Numero de Celular.
 * @return string link wa.
 */
function whatsapp_link_simple(string $numero)
{
    return LINK_WA . $numero;
}


/**
 *  @param $imagen: array de imagenes.
 */
function slider_part(array $images)
{
    // Comenzamos el slider
    echo '<div id="carouselExampleIndicators" class="carousel slide">';

    // Indicadores del slider
    echo '<div class="carousel-indicators">';
    foreach ($images as $index => $image) {
        $active = $index === 0 ? 'active' : ''; // El primer elemento es el activo
        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-label="Slide ' . ($index + 1) . '"></button>';
    }
    echo '</div>';

    // Imágenes del slider
    echo '<div class="carousel-inner">';
    foreach ($images as $index => $image) {
        $active = $index === 0 ? 'active' : ''; // El primer elemento es el activo
        echo '<div class="carousel-item ' . $active . '">';
        echo '<img src="' . $image . '" class="d-block w-100" alt="Slide ' . ($index + 1) . '">';
        echo '</div>';
    }
    echo '</div>';

    // Controles de navegación
    echo '
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>';

    echo '</div>'; // Fin del slider
}

/**
 * @return style icono con css para agergar en line.
 */
function icon_mouse()
{
    $style_bullet = "
    background-image: url('./img/icon-mouse.png');
    height: 30px;
    background-repeat: no-repeat;
    background-position-x: center;
    background-position-y: bottom;
    background-size: 25px;
    background-color: transparent;
    border-top: 3px #fff solid;
  ";

    $style = 'style="' . $style_bullet . '"';

    return $style;
}

function bontones_solapa(array $array_content)
{

    $title1 = $array_content[0]['titulo'];
    $imagen1 = $array_content[0]['img'];
    $txt1 = $array_content[0]['texto'];
    $id2 = $array_content[1]['id'];
    $title2 = $array_content[1]['titulo'];
    $imagen2 = $array_content[1]['img'];
    $txt2 = $array_content[1]['texto'];
    $id3 = $array_content[2]['id'];
    $title3 = $array_content[2]['titulo'];
    $imagen3 = $array_content[2]['img'];
    $txt3 = $array_content[2]['texto'];


    echo '
    <ul class="nav nav-tabs mt-3 justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">' . $title1 . '</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#' . $id2 . '" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">' . $title2 . '</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#' . $id3 . '" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">' . $title3 . '</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" tabindex="0">
        <img src="./img/' . $imagen1 . '" class="card-img-top" alt="...">
        <p class="card-text my-3">' . $txt1 . '</p>
    </div>
    <div class="tab-pane fade" id="' . $id2 . '" role="tabpanel" tabindex="0">
        <img src="./img/' . $imagen2 . '" class="card-img-top" alt="...">
        <p class="card-text my-3">' . $txt2 . '</p>
    </div>
    <div class="tab-pane fade" id="' . $id3 . '" role="tabpanel" tabindex="0">
        <img src="./img/' . $imagen3 . '" class="card-img-top" alt="...">
        <p class="card-text my-3">' . $txt3 . '</p>
    </div>
    </div>
    
    ';
}
