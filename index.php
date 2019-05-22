<!-- https://simplehtmldom.sourceforge.io/manual.htm -->
<?php
include_once('simplehtmldom/simple_html_dom.php');
// Create DOM from URL or file
$html = file_get_html('http://2school.vn/');
// Find all images 
$img = array();
foreach($html->find('img') as $element) {
  $img[] = '<img src="'.$element->src.'" alt="'.$element->alt.'">';
}
print_r($img);
?>
<!-- // Find all links 
// foreach($html->find('a') as $element) echo $element->href . '<br>'; -->