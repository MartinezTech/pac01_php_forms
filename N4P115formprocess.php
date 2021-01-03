<?php 
$result = "";
class calculator
{
    var $a;
    var $b;
    var $c;

    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        return $this->a + $this->b + $this->c;
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['n3']);
}



?>
<h3><?php echo $_POST['n1'] . ' + ' . $_POST['n2']. ' + ' .$_POST['n3'].' = ' . $result?></h3>