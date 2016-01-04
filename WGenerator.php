<?php

$condition = $argv[1];
$filename = $argv[2];

if ($condition == "default") {
  $folders = [
    'js'=> [
      'script.js',
      'jquery-1.11.3.min.js'
    ],
    'css' => [
      'style.css',
      'reset.css'
    ],
    'models' => [
      'function.php'
    ]
  ];

  $pathFolder = $filename."/";
  mkdir($filename, 0777);
  foreach ($folders as $folder => $files) {
    mkdir($pathFiles = $pathFolder.$folder);
    foreach ($files as $file) {
      fopen($pathFiles."/".$file, "w+");
    }
  }
  $indexPath = $pathFolder."index.php";
  $stylePath = $pathFolder."css/style.css";
  $resetPath = $pathFolder."css/reset.css";
  $jsPath = $pathFolder."js/jquery-1.11.3.min.js";
  fopen($indexPath, "w+");

  $resetContent = fopen($resetPath, "a");
  fwrite($resetContent, "
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
    	margin: 0;
    	padding: 0;
    	border: 0;
    	font-size: 100%;
    	font: inherit;
    	vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
    	display: block;
    }
    body {
    	line-height: 1;
    }
    ol, ul {
    	list-style: none;
    }
    blockquote, q {
    	quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
    	content: '';
    	content: none;
    }
    table {
    	border-collapse: collapse;
    	border-spacing: 0;
    }");
  fclose($resetContent);

  // Ecriture dans style.css
  $styleContent = fopen($stylePath, "a");
  fwrite($styleContent, "
    html, body{
      height: 100%;
      background-color: #e3e3e3;
    }");
  fclose($styleContent);

  // Ecriture dans index.php
  $indexContent = fopen($indexPath, "a");
  fwrite($indexContent, "
    <html lang='en'>
      <head>
      <meta charset='UTF-8'>
      <meta name='viewport'>
      <title></title>
      <link rel='stylesheet' type='text/css' href='css/reset.css'>
      <link rel='stylesheet' type='text/css' href='css/style.css'>
      <link rel='icon' type='image/png' href='/favicon.png'/>
      <script src='js/jquery-2.1.3.min.js'></script>
      </head>
      <body>
      </body>
    </html>");
  fclose($indexContent);

  // Ecriture dans jquery
  $jsContent = fopen($jsPath, "a");
  fwrite($jsContent, "
  ");
  fclose($jsContent);
}

elseif ($condition == "mean") {
  $folders = [
    "myApp" => [
      "controller" => [
        "home.js",
        "header.js",
        "nav.js",
        "footer.js"
      ],
      "css" => [
        "reset.css",
        "style.css"
      ],
      "js" => [
        "home.js"
      ],
      "template" => [
        "home.html",
        "header.html",
        "nav.html",
        "footer.html"
      ]
    ]
  ];

  $pathMean = $filename."/";
  mkdir($filename, 0777);
  foreach ($folders as $folder => $subFolders) {
    mkdir($pathMSF = $pathMean.$folder, 0777);
    foreach ($subFolders as $subFolder => $files) {
      mkdir($pathMfiles = $pathMSF."/".$subFolder, 0777);
      foreach ($files as $file) {
        fopen($pathMfiles."/".$file, "w+");
      }
    }
  }

  $pathApp = $pathMean."myApp/app.js";
  $pathIndex = $pathMean."myApp/index.html";
  $pathStyle = $pathMean."myApp/css/style.css";
  $pathReset = $pathMean."myApp/css/reset.css";

  fopen($pathApp, "w+");
  fopen($pathIndex, "w+");

  $resetContent = fopen($pathReset, "a");
  fwrite($resetContent, "
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
    	margin: 0;
    	padding: 0;
    	border: 0;
    	font-size: 100%;
    	font: inherit;
    	vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
    	display: block;
    }
    body {
    	line-height: 1;
    }
    ol, ul {
    	list-style: none;
    }
    blockquote, q {
    	quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
    	content: '';
    	content: none;
    }
    table {
    	border-collapse: collapse;
    	border-spacing: 0;
    }");
  fclose($resetContent);

  $styleContent = fopen($pathStyle, "a");
  fwrite($styleContent, "
    html, body{
      height: 100%;
    }
    ");
  fclose($styleContent);
}
