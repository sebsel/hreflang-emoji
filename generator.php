<?php

$langs = [
  'de' => 'DE',
  'en' => 'GB',
  'en-US' => 'US',
  'it' => 'IT',
  'jp' => 'JP',
  'nl' => 'NL',
];

$ris = ['A'=>'E6','B'=>'E7','C'=>'E8','D'=>'E9','E'=>'EA','F'=>'EB','G'=>'EC','H'=>'ED','I'=>'EE','J'=>'EF','K'=>'F0','L'=>'F1','M'=>'F2','N'=>'F3','O'=>'F4','P'=>'F5','Q'=>'F6','R'=>'F7','S'=>'F8','T'=>'F9','U'=>'FA','V'=>'FB','W'=>'FC','X'=>'FD','Y'=>'FE','Z'=>'FF'];

$css = '';
$html = '<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Testing hreflang emoji</title>
    <link rel="stylesheet" href="hreflang-emoji.min.css">
  </head>
  <body>
    <ul>
';

foreach($langs as $lang => $flag) {
  $c1 = $ris[$flag[0]];
  $c2 = $ris[$flag[1]];
  $css .= "a[hreflang|=$lang]::after{content:' \\01F1$c1\\01F1$c2';}";
  $html .= "      <li><a href=\"#\" hreflang=\"$lang\">This is a link with $lang</a></li>\n";
}

$html .= '  </body>
</html>';

file_put_contents('hreflang-emoji.min.css', $css);
file_put_contents('test.html', $html);