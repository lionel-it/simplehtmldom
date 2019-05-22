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
// print_r($img);
?>
<?php
// Create DOM from string
$html = str_get_html('
  <div id="hello">Hello</div>
  <div id="world">World</div>
');
$html->find('div[id=hello]', 0)->innertext = 'Foo';
$html->find('div', 1)->class = 'bar';
// echo $html; 
// Output: <div id="hello">foo</div><div id="world" class="bar">World</div>
// echo file_get_html('http://2school.vn/')->plaintext; 
// Create DOM from URL
$html = file_get_html('http://2school.vn/');
// Find all article blocks
$articles = array();
foreach($html->find('div.list-lession') as $article) {
    $item['intro']    = $article->find('ul', 0) -> plaintext;
    $articles[] = $item;
}
echo '<pre>';
  // print_r($articles);
echo '</pre>';