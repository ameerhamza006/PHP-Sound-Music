<?php
error_reporting(0);
require 'header.php'; $page = "Album";

if($_GET['Albums'])
{

?>

<style>

	.imggg{
		background-image: url("assets/img/demo/b.jpg");
	}


</style>
 
<div class="container-fluid relative animatedParent animateOnce p-0">
    <div class="animated fadeInUpShort">
     <?php Single_View_Album(); Single_View_video_Album(); ?>

    </div>
</div>

<?php }else { ?>

<div class="wrapper">
<div class="container-fluid relative animatedParent animateOnce">
        <div class="animated fadeInUpShort p-5 ml-lg-5 mr-lg-5">
            <section>
                <div class="relative my-5">
                    <h1 class="mb-2 text-primary">Audio Songs Albums</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis
                        consectetur</p>
                </div>
                <div class="wrapper">
                    <div class="row has-items-overlay">
                       <?php View_All_Album(); ?>
                    </div>
                </div>
            </section>
        </div>
    

	 


        <div class="animated fadeInUpShort p-5 ml-lg-5 mr-lg-5">
            <section>
                <div class="relative my-5">
                    <h1 class="mb-2 text-primary">Video Songs  Albums</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis
                        consectetur</p>
                </div>
                <div class="wrapper">
                    <div class="row has-items-overlay">
                       <?php Videos_song_All_Album(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>




<?php
}
require 'footer.php';
?>