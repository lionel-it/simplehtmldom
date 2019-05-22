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
// Create a DOM object from a string
$html = str_get_html('
  <html>
    <body>Hello!</body>
  </html>
');
// Create a DOM object from a URL
$html = file_get_html('http://2school.vn/');
// Create a DOM object from a HTML file
$html = file_get_html('test.html');
// echo $html;
// Create a DOM object
$html1 = new simple_html_dom();
// Load HTML from a string
// $html1->load('
//   <html>
//     <body>Hello every body!</body>
//   </html>
// ');
// Load HTML from a URL 
// $html1->load_file('http://2school.vn/');
// Load HTML from a HTML file 
$html1->load_file('test.html');
// echo $html1;
$html = file_get_html('http://2school.vn/');
// Find all anchors, returns a array of element objects
$html2 = new simple_html_dom();
$html2->load_file('test.html');
$ret = $html2->find('a');
echo "<pre>";
  // print_r($ret);
echo "<pre/>";
// Find (N)th anchor, returns element object or null if not found (zero based)
$html3 = new simple_html_dom();
$html3->load_file('test.html');
$ret3 = $html3->find('a', 0);
echo "<pre>";
  // print_r($ret3);
echo "<pre/>";
// Find lastest anchor, returns element object or null if not found (zero based)
$html4 = new simple_html_dom();
$html4->load_file('test.html');
$ret4 = $html4->find('a', -1);
echo "<pre>";
  // print_r($ret4);
echo "<pre/>";
// Find all <div> with the id attribute
// $ret = $html->find('div[id]');
// Find all <div> which attribute id=foo
// $ret = $html->find('div[id=foo]'); 
// Find all element which id=foo
$html5 = new simple_html_dom();
$html5->load_file('test.html');
$ret5 = $html5->find('#foo');
echo "<pre>";
  print_r($ret5);
echo "<pre/>";
// Find all element which class=foo
$ret5 = $html5->find('.foo');
// Find all element has attribute id
$ret5 = $html5->find('*[id]'); 
// Find all anchors and images 
$ret5 = $html5->find('a, img'); 
// Find all anchors and images with the "title" attribute
$ret5 = $html5->find('a[title], img[title]');