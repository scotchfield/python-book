<?php

function get_array( $array, $key, $default ) {
    return isset( $array[ $key ] ) ? $array[ $key ] : $default;
}

function print_if_active( $current_section, $active_section ) {
    if ( $current_section == $active_section ) {
        echo ' class="active"';
    }
}

$section = get_array( $_GET, 's', '' );

?><html>
<head>
<title>Learn Python, Break Python: A Beginner's Guide to Programming, by Breaking Stuff Books</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style type="text/css">
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}

/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
</style>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Learn Python, Break Python</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.amazon.com/Learn-Python-Break-Beginners-Programming-ebook/dp/B00IGF3E36">Amazon</a></li>
            <li><a href="?s=about">About</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li<?php print_if_active( '', $section ); ?>><a href="/">Home</a></li>
            <li><a href="http://www.amazon.com/Learn-Python-Break-Beginners-Programming-ebook/dp/B00IGF3E36">Amazon</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li<?php print_if_active( 'c1', $section ); ?>><a href="?s=c1">1. Introduction</a></li>
            <li<?php print_if_active( 'c2', $section ); ?>><a href="?s=c2">2. Getting Started</a></li>
            <li<?php print_if_active( 'c3', $section ); ?>><a href="?s=c3">3. Variables and Data Types</a></li>
            <li<?php print_if_active( 'c4', $section ); ?>><a href="?s=c4">4. Input and Output</a></li>
            <li<?php print_if_active( 'c5', $section ); ?>><a href="?s=c5">5. Strings</a></li>
            <li<?php print_if_active( 'c6', $section ); ?>><a href="?s=c6">6. If-Statements</a></li>
            <li<?php print_if_active( 'c7', $section ); ?>><a href="?s=c7">7. Loops</a></li>
            <li<?php print_if_active( 'c8', $section ); ?>><a href="?s=c8">8. Lists</a></li>
            <li<?php print_if_active( 'c9', $section ); ?>><a href="?s=c9">9. Dictionaries</a></li>
            <li<?php print_if_active( 'c10', $section ); ?>><a href="?s=c10">10. Reading and Writing from Text Files</a></li>
            <li<?php print_if_active( 'c11', $section ); ?>><a href="?s=c11">11. Simple Error Handling</a></li>
            <li<?php print_if_active( 'c12', $section ); ?>><a href="?s=c12">12. Functions</a></li>
            <li<?php print_if_active( 'c13', $section ); ?>><a href="?s=c13">13. Modules</a></li>
            <li<?php print_if_active( 'c14', $section ); ?>><a href="?s=c14">14. Classes</a></li>
            <li<?php print_if_active( 'c15', $section ); ?>><a href="?s=c15">15. Moving Forward</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php

switch ( $section ) {
    case 'about': include 'section/about.html'; break;
    case 'c1': include 'section/c1.html'; break;
    case 'c2': include 'section/c2.html'; break;
    case 'c3': include 'section/c3.html'; break;
    case 'c4': include 'section/c4.html'; break;
    case 'c5': include 'section/c5.html'; break;
    case 'c6': include 'section/c6.html'; break;
    case 'c7': include 'section/c7.html'; break;
    case 'c8': include 'section/c8.html'; break;
    case 'c9': include 'section/c9.html'; break;
    case 'c10': include 'section/c10.html'; break;
    case 'c11': include 'section/c11.html'; break;
    case 'c12': include 'section/c12.html'; break;
    case 'c13': include 'section/c13.html'; break;
    case 'c14': include 'section/c14.html'; break;
    case 'c15': include 'section/c15.html'; break;
    default: include 'section/default.html'; break;
}

?>

        </div>
      </div>
    </div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1685371-11', 'breakingstuffbooks.com');
  ga('send', 'pageview');

</script>

</body>
</html>
