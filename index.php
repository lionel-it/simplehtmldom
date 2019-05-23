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
  // print_r($ret5);
echo "<pre/>";
// Find all element which class=foo
$ret5 = $html5->find('.foo');
// Find all element has attribute id
$ret5 = $html5->find('*[id]'); 
// Find all anchors and images 
$ret5 = $html5->find('a, img'); 
// Find all anchors and images with the "title" attribute
$ret5 = $html5->find('a[title], img[title]');
$html6 = new simple_html_dom();
$html6->load_file('test.html');
// Find all <li> in <ul> 
$es = $html6->find('ul li');
// Find Nested <div> tags
$es = $html6->find('div div div'); 
// Find all <td> in <table> which class=hello 
$es = $html6->find('table.hello td');
// Find all td tags with attribite align=center in table tags 
$es = $html6->find('table td[align=center]');
$html7 = new simple_html_dom();
$html7->load_file('test.html');
// Find all <li> in <ul> 
$i = 1;
foreach($html7->find('ul') as $ul) 
{
  foreach($ul->find('li') as $li) 
  {
      // echo $i.' - '.$li->innertext."<br/>";
      $i++;
  }
}
// Find first <li> in first <ul> 
// $es1 = $html7->find('ul', 0)->find('li', 0);
// echo $es1;
// Filter  Description
// [attribute] Matches elements that have the specified attribute.
// [!attribute]  Matches elements that don't have the specified attribute.
// [attribute=value] Matches elements that have the specified attribute with a certain value.
// [attribute!=value]  Matches elements that don't have the specified attribute with a certain value.
// [attribute^=value]  Matches elements that have the specified attribute and it starts with a certain value.
// [attribute$=value]  Matches elements that have the specified attribute and it ends with a certain value.
// [attribute*=value]  Matches elements that have the specified attribute and it contains a certain value.
// Find all text blocks 
$html8 = new simple_html_dom();
$html8->load_file('test.html');
// $es8 = $html8->find('text');
echo "<pre>";
  // print_r($es8);
echo "<pre/>";
// Find all comment (<!--...-->) blocks 
$es8  = $html8->find('comment');
echo "<pre>";
  // print_r($es8);
echo "<pre/>";
// Get, Set and Remove attributes
// Get a attribute ( If the attribute is non-value attribute (eg. checked, selected...), it will returns true or false)
$pi = new simple_html_dom();
$pi->load_file('test.html');
// $e = $pi->find('a',0);
// if(isset($e->href)) echo 'href exist!';
// $value = $e->href;
// Set a attribute(If the attribute is non-value attribute (eg. checked, selected...), set it's value as true or false)
// $e->href = 'my link';
// Remove a attribute, set it's value as null! 
// $e->href = null;
// Determine whether a attribute exist? 
// if(isset($e->href)) echo 'href exist!';
// Example
$html = str_get_html("
  <div>
    Foo
    <b>Bar</b>
  </div>
"); 
// $e = $html->find("div", 0);
// echo $e->tag .'<hr/>'; // Returns: " div"
// echo $e->outertext .'<hr/>'; // Returns: " <div>foo <b>bar</b></div>"
// echo $e->innertext .'<hr/>'; // Returns: " foo <b>bar</b>"
// echo $e->plaintext; // Returns: " foo bar"
// ================
// Extract contents from HTML 
$html10 = new simple_html_dom();
$html10->load_file('test.html');
// echo $html10->plaintext;
// Wrap a element
// $html10->outertext = '<div class="wrap">' . $html10->outertext . '<div>';
// echo $html10->outertext;
// Remove a element, set it's outertext as an empty string 
// $html10->outertext = '';
// Append a element
// $html10->outertext = $html10->outertext . '<div class="lionel">Foo</div>';
// echo $html10->outertext;
// Insert a element
// $html10->outertext = '<div>Foo</div>' . $html10->outertext;
// echo $html10->outertext;
// If you are not so familiar with HTML DOM, check this link to learn more... 
// Example
$html11 = new simple_html_dom();
$html11->load_file('test.html');
// echo $html11->find("#div1", 0)->children(1)->children(1)->children(2)->id;
echo "<br/>";
  // print_r($html11->find("#div1", 0)->children(1)->id);
echo "<br/>";
// span1.2
// or 
echo "<br/>";
  // echo $html11->getElementById("div1")->childNodes(1)->getAttribute('id');
echo "<br/>";
// span1.2
// $e->children ( [int $index] ) //	Returns the Nth child object if index is set, otherwise return an array of children.
// $e->parent ()	// Returns the parent of element.
// $e->first_child () //	Returns the first child of element, or null if not found.
// $e->last_child () //	Returns the last child of element, or null if not found.
// $e->next_sibling () //	Returns the next sibling of element, or null if not found.
// $e->prev_sibling ();
// Dumps the internal DOM tree back into string 
// $html12 = new simple_html_dom();
// $html12->load_file('test.html');
// $str = $html12->save();
// echo $str; 
// Dumps the internal DOM tree back into a file 
// $html12->save('result.html');
// Write a function with parameter "$element"
$html13 = new simple_html_dom();
$html13->load_file('test.html');
function my_callback($element) {
  // Hide all <b> tags 
  if ($element->tag=='b') $element->outertext = '';
} 
// Register the callback function with it's function name
$html13->set_callback('my_callback');

// Callback function will be invoked while dumping
echo $html13;