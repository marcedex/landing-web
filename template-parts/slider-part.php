<?php
function slider_part($images) {
    $html_slide = '';
    // Comenzamos el slider
    $html_slide .= '<div id="carouselExampleIndicators" class="carousel slide">';
    
    // Indicadores del slider
    $html_slide .= '<div class="carousel-indicators">';
    foreach ($images as $index => $image) {
        $active = $index === 0 ? 'active' : ''; // El primer elemento es el activo
        echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-label="Slide ' . ($index + 1) . '"></button>';
    }
    $html_slide .= '</div>';
    
    // Imágenes del slider
    $html_slide .= '<div class="carousel-inner">';
    foreach ($images as $index => $image) {
        $active = $index === 0 ? 'active' : ''; // El primer elemento es el activo
        echo '<div class="carousel-item ' . $active . '">';
        echo '<img src="' . $image . '" class="d-block w-100" alt="Slide ' . ($index + 1) . '">';
        echo '</div>';
    }
    $html_slide .= '</div>';
    
    // Controles de navegación
    $html_slide .= '
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>';
    
    $html_slide .= '</div>'; // Fin del slider
}

// Ejemplo de uso
$images = [
    'img/sd2f12asd.jpg',
    'img/sd2f12tr.jpg',
    'img/sd2f12hfg.jpg'
];

slider_part($images);
?>
