<!DOCTYPE html>
<html>

<?php 
require 'db.php';
require 'spawn.php';
?>


<?php 
if(isset($_POST['spawn'])){
    if(isset($_POST['id']) && !(empty($_POST['id']))){
        $new_spawn = new_spawn($db,$_POST['id']);
    }else{ 
        $new_spawn = new_spawn($db,-1);
    }
    $name = $new_spawn['name'];
    $image = $new_spawn['image'];
    $id = $new_spawn['id'];
    $spawn = "<p>nom:$name id:$id</p>";


}
?>
<body>
    <form action="index.php" method='POST'>
        <?=$spawn;?>
        <img src="images/<?=$image?>" style="max-width:400px;max-height:400px;" />
        <input name='id' type='hidden' value="<?php echo($id)?>" />
        <button name=" spawn" type='submit'>SPAWN</button>
    </form>
</body>

</html>