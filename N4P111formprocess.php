<html>
 <head>
  <title>Film comments</title>
 </head>
 <body>
<?php
echo '<h1>This film has been rated with ' . $_POST['star'] . ' stars.</h1>';
echo '<p>'. $_POST['comments'] . '</p>';
if (isset($_POST['debug'])) {
    echo '<pre><strong>DEBUG:</strong>' . "\n";
    print_r($_POST);
    echo '</pre>';
}
?>
 </body>
</html>
