<?php
require 'markdown.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>README.md</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="syntax.css">
    <link href="GitHub.css" rel="stylesheet">
    <script src="http://use.edgefonts.net/open-sans.js"></script>
    <script src="highlight.pack.js"></script>
  </head>

  <body>
    <?php

    function compileMD ($src)
    {
      $text = Markdown ($src);
      $text = preg_replace_callback ('/\{\$(\w+)\}/', function ($m) {
        global $context;
        return $context[$m[1]];
      }, $text);
      return $text;
    }

    $file = dirname (__DIR__) . "/README.md";
    echo file_exists ($file) ? compileMD (file_get_contents ($file)) : "<code>$file</code> was not found.";

    ?>
    <script>hljs.initHighlightingOnLoad ();</script>
  </body>
</html>
