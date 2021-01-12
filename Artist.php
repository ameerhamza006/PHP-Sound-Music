<?php 
error_reporting(0);
require 'header.php'; $page = "Artist";

if($_GET['Album'])
	
{
	$name = $_GET['Album'];
?>


<div class="wrapper">
<div class="container-fluid relative animatedParent animateOnce">
        <div class="animated fadeInUpShort p-5 ml-lg-5 mr-lg-5">
            <section>
                <div class="relative my-5">
                    <h1 class="mb-2 text-primary"><?php echo $name ?> Albums</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis
                        consectetur</p>
                </div>
                <div class="wrapper">
                    <div class="row has-items-overlay">
                       <?php Artist_All_Album(); Lyrical_All_Album(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



<?php } else{  ?>

   <div class="container-fluid relative animatedParent animateOnce">
    <div class="wrapper animated fadeInUpShort p-md-5 p-3">
        <div class="relative mb-5">
            <h1 class="mb-2 text-primary">Artists</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Architecto atque aut blanditiis consectetur
            </p>
        </div>
        <div class="lightSlider mb-5" data-pager="false" data-item="26" data-item-lg="13" data-item-md="13"
             data-item-sm="6">
            <div><a href="#a" class="btn btn-outline-primary btn btn-sm r-5">A</a></div>
            <div><a href="#b" class="btn btn-outline-primary btn btn-sm r-5">B</a></div>
            <div><a href="#c" class="btn btn-outline-primary btn btn-sm r-5">C</a></div>
            <div><a href="#d" class="btn btn-outline-primary btn btn-sm r-5">D</a></div>
            <div><a href="#e" class="btn btn-outline-primary btn btn-sm r-5">E</a></div>
            <div><a href="#f" class="btn btn-outline-primary btn btn-sm r-5">F</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">G</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">H</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">I</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">J</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">K</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">L</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">M</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">N</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">O</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">P</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">Q</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">R</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">S</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">T</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">U</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">V</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">W</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">X</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">Y</a></div>
            <div><a href="#" class="btn btn-outline-primary btn btn-sm r-5">Z</a></div>
        </div>
        <br>

        <div class="avatar avatar-md  mb-5 primary-color" style="width: 150px;">Singers</div>
        <div class="row mb-5">
		<?php All_Artist(); ?>
			
        </div>
		 <div class="avatar avatar-md  mb-5 primary-color" style="width: 150px;">Lyrical</div>
        <div class="row mb-5">
		<?php All_Lyrical(); ?>
			
        </div>
        
    </div>
</div>



   
               




<?php
}
require 'footer.php';
?>