<?php
// $a = '<a href="./">MASTER RECORD</a>';
// $b = '<a href="./edit">EDIT RECORD</a>';
// $c = '<a href="./add">ADD TO RECORD</a>';
// $d = '<a href="./update">UPDATE RECORD</a>';
// $e = '<a href="./delete">DELETE RECORD</a>';
echo '<nav style="background-color:rgb(32, 157, 157);">';
// echo '<pre>';
//     printf("% 55s", $a);
//     printf("% 60s", $b);
//     printf("% 60s", $c);
//     printf("% 60s", $d);
//     printf("% 60s", $e);
// echo '</pre>';
?>
<a href="<?php echo base_url()?>index.php/">MASTER RECORD</a>
<a href="<?php echo base_url()?>index.php/record/edit">EDIT RECORD</a>
<a href="<?php echo base_url()?>index.php/record/add">ADD TO RECORD</a>
<a href="<?php echo base_url()?>index.php/record/update">UPDATE RECORD</a>
<a href="<?php echo base_url()?>index.php/record/delete">DELETE RECORD</a>
<?php
echo '</nav>';
?>