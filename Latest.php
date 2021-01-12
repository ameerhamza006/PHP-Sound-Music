<?php
error_reporting(0);
require 'header.php'; $page = "Latest";

if($_GET['Music-Player'])
{

?>

<style>

	.imggg{
		background-image: url("assets/img/demo/b.jpg");
	}


</style>

<div class="container-fluid relative animatedParent animateOnce p-0">
    <div class="animated fadeInUpShort">
		
     <?php Single_song_play(); ?>

    </div>
</div>




<?php }else if($_GET["Ganre"]){ ?>

<?php all_song_ganre(); ?>

<?php }else if($_GET["Language"]) { ?>

<?php all_song_language(); ?>


<?php }else { ?>



<?php Song_view_Languages(); ?>


<?php Song_view_ganre(); ?>







<?php
	
}
	
require 'footer.php';
?>