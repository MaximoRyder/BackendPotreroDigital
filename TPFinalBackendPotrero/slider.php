<?php
include_once("db_connect.php");
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "rydertech");
$consulta = 'SELECT * FROM productos LIMIT 4';
// $sql = "SELECT id, image FROM productos LIMIT 4";
$image_count = 0;
$button_html = '';
$slider_html = '';
$thumb_html = '';
while( $rows = mysqli_fetch_assoc($resultset)){
$active_class = "";
if(!$image_count) {
$active_class = 'active';
$image_count = 1;
}
$image_count++;
$thumb_image = "nature_thumb_".$rows['id'].".jpg";
// slider image html
$slider_html.= "<div class='item ".$active_class."'>";
$slider_html.= "<img src='images/".$rows['imagenProducto']."' alt='' class='img-responsive'>";
$slider_html.= "<div class='carousel-caption'></div></div>";
// Thumbnail html
$thumb_html.= "<li><img src='images/".$thumb_image."' alt='$thumb_image'></li>";
// Button html
$button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
}
?>