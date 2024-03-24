<?php get_header() ?>

<div class="sign-up-popup">
    <div id="popup-content">
        <h1>SIGN UP TO OUR VIP BEER CLUB</h1>
        <p>to get the latest news on our brews, updates on the brewery build, merchandise drops, exclusive invites to our regular tastings and more.</p>
        <img src="/wp-content/uploads/2023/06/SIGN-UP-Gate-Layout-1.webp" alt="grafton-brewery">
       
        <label>YEAH, SIGN ME UP!</label>
        <div class="popup-form">
            <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]') ?>
        </div>
        <div class="input">
            <input type="checkbox" id="nah" name="nah" value="nah" onclick="scrollToSignup()">
            <label for="nah">NAH, THANKS, I'M GOOD</label><br>
        </div>
    </div>
</div>

<div class="main-content">

<div id="modal-overlay">
  <div id="modal">
    <div class="modal-footer">
        <h1>ARE YOU OLD ENOUGH TO BUY ALCOHOL?</h1>
        <div id="modal-buttons">
            <button id="close-modal">YES</button>
            <button><a href="https://google.com.au">NO</a></button>
        </div>
    </div>

  </div>
</div>

<section class="container-fluid landing-gate">
    <div class="container">
        <div class="row">
            <div class="col"><img src="/wp-content/uploads/2023/06/grafton-brewery-logo.png" alt="grafton-brewery"></div>
        </div>
    </div>
</section>


<section class="about-heritage-brewery">
    <div class="container-fluid intro-grafton">
        <div class="container">
            <div class="row">
               <img src="/wp-content/uploads/2023/06/a-new-heritage-brewery.svg" alt="grafton-brewery">
            </div>
        </div>
    </div>

    <div class="container-fluid intro-text">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php the_field('opening_text')?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid intro-slider">
        <div class="row">
            <div class="col">
                <?php
                    if( have_rows('image_carousel') ):
                        $i = 1; 
                        $elements = get_field('image_carousel');
                        $element_count = count($elements);

                        echo '<div id="image-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#image-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                ';
                             
                                for ($x = 1; $x < $element_count; $x++) {
                                    echo '<button type="button" data-bs-target="#image-carousel" data-bs-slide-to="' . $x . '" aria-label="Slide ' . ($x + 1) . '"></button>';
                                }
                                
                              echo  '
                                    
                                </div>
                                
                                <div class="carousel-inner">';
                        
                        while ( have_rows('image_carousel') ) : the_row();
                            
                            $image = get_sub_field('carousel_image');

                        ?>
                        
                        <div class="carousel-item <?php if($i == 1) echo 'active';?>">
                        <img class="d-block w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                        </div>
                        
                                    
                        <?php   $i++; 

                        endwhile; 
                        
                        echo '
                            </div>
                           
                            </div>';

                    else :

                        // no rows found

                    endif; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid intro-text-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div id="pride">
                            <img src="/wp-content/uploads/2023/06/Pride-of-the-North-title.png" alt="grafton-brewery">
                        </div>
                        <div>
                            <?php the_field('body_text')?>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="brews">
    <div class="container-fluid heading">
        <div class="container">
            <div class="row">
                <div class="col"> <h1><span>NOW THE COMPLEX IS READY TO TAKE ON&nbsp;</span><span>A NEW LIFE AS AN ARTISAN BREWERY</span></h1></div>
            </div>
        </div>
    </div>

    <div class="container-fluid brew-tabs">
        <div class="container">
            <div class="row">
                <div class="col">

                <h1 id="our-brews">OUR BREWS</h1>
                <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist"><!-- tabs to accordion -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="lager-tab" data-bs-toggle="tab" data-bs-target="#lager-tab-pane" type="button" role="tab" aria-controls="lager-tab-pane" aria-selected="true">Lager</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ipa-tab" data-bs-toggle="tab" data-bs-target="#ipa-tab-pane" type="button" role="tab" aria-controls="ipa-tab-pane" aria-selected="false">IPA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="old-tab" data-bs-toggle="tab" data-bs-target="#old-tab-pane" type="button" role="tab" aria-controls="old-tab-pane" aria-selected="false">OLD</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="special-tab" data-bs-toggle="tab" data-bs-target="#special-tab-pane" type="button" role="tab" aria-controls="special-tab-pane" aria-selected="false">SPECIAL</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pale-tab" data-bs-toggle="tab" data-bs-target="#pale-tab-pane" type="button" role="tab" aria-controls="pale-tab-pane" aria-selected="false">PALE ALE</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pilsener-tab" data-bs-toggle="tab" data-bs-target="#pilsener-tab-pane" type="button" role="tab" aria-controls="pilsener-tab-pane" aria-selected="false">PILSENER</button>
                    </li>
                    </ul>
                    <div class="tab-content accordion" id="myTabContent">

                    <div class="tab-pane fade show active accordion-item" id="lager-tab-pane" role="tabpanel" aria-labelledby="lager-tab" tabindex="0">

                        <h2 class="accordion-header d-lg-none" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Lager</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/LAGER-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>Named after our iconic five storey Red Brick Tower, this lager is a blend of noble and New Zealand hops creating a perfectly well-balanced beer with smooth bitterness and bready malt undertones with slight ester flavour to round off its backbone. Traditionally lagered, our Bricktower Lager gives a quick and clean finish - the way a good lager should.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade accordion-item" id="ipa-tab-pane" role="tabpanel" aria-labelledby="ipa-tab" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            IPA
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/IPA-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>A hoppy yet malt driven IPA that’s as big as the mighty Clarence River (also known as the Big River to locals), this IPA gives you an enjoyable biscuity backbone to compliment the piney, tropical fruit and citrusy flavours and aromas that a beer of this standing should.</p>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade accordion-item" id="old-tab-pane" role="tabpanel" aria-labelledby="old-tab" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            OLD
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingThree" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/OLD-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>Paying homage to the original Grafton Old brewed in the 1950s, our Brewhouse Old is a malt driven ale that is pleasantly rounded out with smooth chocolate biscuit flavours. The combination of fruit like esters and subtle hoppiness makes this ale quite refreshing and befitting as the Brewhouse Village’s signature beer.</p>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade accordion-item" id="special-tab-pane" role="tabpanel" aria-labelledby="special-tab" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            SPECIAL
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/SPECIAL-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>A local river that meets the mighty Clarence, and a road that winds through the farmlands around the town of Ulmarra, our Coldstream Special is a light, crisp refreshing mid-lager with a smooth mouthfeel and slight citrus finish. This mid strength, or as we call it ‘Special’, has plenty of flavour and often called the Pride of the North.</p>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade accordion-item" id="pale-tab-pane" role="tabpanel" aria-labelledby="pale-tab" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            PALE ALE
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingFive" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/PALE-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>Named after the road that ran adjacent to the Firth family farm near the small town of Tucabia, our Somervale Pale Ale delivers tropical and citrus zest aromas bursting with pine needle and tangerine flavours, making this pale a perfect balance of bitterness and aroma.</p>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade accordion-item" id="pilsener-tab-pane" role="tabpanel" aria-labelledby="pilsener-tab" tabindex="0">
                        <h2 class="accordion-header d-lg-none" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            PILSENER
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingSix" data-bs-parent="#myTabContent">
                        <div class="accordion-body">
                            <div class="row">
                                    <div class="col-md-4 col-lg-2"><img src="/wp-content/uploads/2023/06/PILSENER-1.png" alt="grafton-brewery" class="brews-img"></div>
                                    <div class="col-md-8 col-lg-10">             
                                        <p>Very well balanced with a subtle body and delicate aromas of herb, spice and slight citrus, our Export Pilsener is named in honour of the original Export Pilsener brewed by Grafton Brewing Co. back in the 1950s. Very drinkable yet full of the same special character that gave the original brewery Flavour in its Favour.</p>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    

                    </div> <!-- tabs to accordion -->
                </div>
            </div>
        </div>
    </div>


</section>




<section class="beers-with-flavours">
   <div class="container heading">
    <div class="row"> 
        <div class="col"><img src="/wp-content/uploads/2023/06/beer-with-flavour-in-its-flavour.png" alt="grafton-brewery"></div>
    </div>
   </div>

   <div class="container-fluid lr-txt-img">
    <div class="row">
        <div class="col-lg-6"><?php the_field('brewery_copy') ?></div>
        <div class="col-lg-6"><img src="<?php $image = get_field('brewery_image_1'); echo $image['url'];?>" alt="grafton-brewery"></div>
    </div>
   </div>

   <div class="container-fluid rl-img-txt">
    <div class="row">
        <div class="col-lg-6"><img src="<?php $image = get_field('brewery_image_2'); echo $image['url'];?>" alt="grafton-brewery"></div>
        <div class="col-lg-6"><?php the_field('brewery_copy_2') ?></div>
    </div>
   </div>

   <div class="container-fluid full-img">
        <img src="<?php $image = get_field('brewery_image_3'); echo $image['url'];?>" alt="">
   </div>


</section>

<section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <div>
                        <h1>SIGN UP</h1>
                    </div>
                    <div>
                        <p>to our VIP beer club to get the latest news on our brews, updates on the brewery build, merchandise drops, exclusive invites to our regular tastings and more.</p>
                    </div>
                </div>
                <?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]') ?>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer() ?>