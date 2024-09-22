<?php


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

function bontones_content ( Array $array_content )
{

    $title1 = $array_content[0]['titulo'];
    $content1 = $array_content[0]['contenido'];
    $title2 = $array_content[1]['titulo'];
    $content2 = $array_content[1]['contenido'];
    $title3 = $array_content[2]['titulo'];
    $content3 = $array_content[2]['contenido'];


    echo '
    <ul class="nav nav-tabs mt-3 justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">' . $title1 . '</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">' . $title2 . '</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">' . $title3 . '</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" tabindex="0">' . $content1 . '</div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" tabindex="0">' . $content2 . '</div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" tabindex="0">' . $content3 . '</div>
    </div>
    
    ';
}
