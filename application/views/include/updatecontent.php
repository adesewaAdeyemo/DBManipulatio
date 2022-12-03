<?php
$value= "Update";
$_id=$error=$content='';    
$album=$artist=$band=$rating=$id='';
$errors= array('album'=>'', 'artist'=>'', 'band'=>'', 'rating'=>'');
$content="<legend>Enter the unique ID of the record row to be Edited...<legend>";
$content.= "<input type='text' name='record_id' Value='". $_id ."'>";
$content.= "<input type='submit' name='confirmid' id='confirmid' value='Confirmid'>";
if (isset($_POST['confirmid'])){
    $_id= $_POST['record_id'];
    $content= 'EDIT ID = '. $_id;  
}
if(!empty($_POST['record_id'])){
    $_id= $_POST['record_id'];
    global $_id;
    if (!is_numeric($_POST['record_id'])){
        $error= "Invalid ID";
    }
}

    echo '<center>';?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
    <?php echo "<p class='content'>". $content ."<p>";
    echo "<div class='hero-error'>". $error ."</div>";
    echo "</form>";
    echo '</center>';



        ?>
