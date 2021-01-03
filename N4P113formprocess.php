<?php
// Make sure the user complete all fields.
// If not, then send them back to the first form.
   if ($_POST['n1'] == '' || $_POST['n2'] == '' || $_POST['n3'] == '') {
       header('Location: N4P112form.php');
   }
?>
<html>
 <head>
  <title>Students register</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
   <?php
    //SET THE VARIABLES WITH THE NAMES OF THE STUDENTS THAT WE PASSED ON PREVIOUS PAGE BY $POST
    $value_1 = $_POST['n1'];
    $value_2 = $_POST['n2'];
    $value_3 = $_POST['n3'];
    //THEN CREATE THE HTML FORM with the custom select fields.
   ?>
    <form>
        <label for="studentname">Choose the student</label>
        <select id="studentname" name="studentname" form="studentname">
        <?php echo '<option value="' . $value_1 . '">' . $value_1 . '</option>'?>
        <?php echo '<option value="' . $value_2 . '">' . $value_2 . '</option>'?>
        <?php echo '<option value="' . $value_3 . '">' . $value_3 . '</option>'?>
        </select>
        <input type="submit">
    </form>
 </body>
</html>