<?php require_once('header.php')?> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->
                                    <?php foreach($data as $value):?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="<?=URL.$value['Image']?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"><span><strong><?=$value['Name']?></strong></span></h2>
                                                <p class="tm-figure-description"><?=$value['Description']?></p>
                                                
                                                <a href="<?=URL.$value['Video']?>"></a>
                                                <!-- <a href="img/tm-img-01.jpg">View more</a> -->
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <?php endforeach?>                                                   
                                </div>                                 
                            </div>
                        </div>                                                    
                    </div>                    
                </li>
            </ul> <!-- .cd-hero-slider -->
<?php require_once('footer.php');?>