<?php

// This will set the title of the page.
$title = 'Systems Architecture';
require 'header.php';
if (isset($_COOKIE['userID'])) { ?>

<!-- the code below will set out the cards on the course webpage. a for loop is used to generate the cards with the statements below to differentiate the data. -->
    <div class="container">
        <div class="row text-center">
            <?php
            for ($i = 1; $i < 7; $i++) {
                if ($i == 1) {
                    $img = 'images/image1.jpg';
                    $href = 'courses/SystemsArchitecture/1.php';
                    $ref = 'Image by <a href="https://pixabay.com/photos/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=336378">Free-Photos</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=336378">Pixabay</a>';
                } else if ($i == 2) {
                    $img = 'images/image2.jpg';
                    $href = 'courses/SystemsArchitecture/2.php';
                    $ref = 'Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3382507">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3382507">Pixabay</a>';
                } else if ($i == 3) {
                    $img = 'images/image3.jpg';
                    $href = 'courses/SystemsArchitecture/3.php';
                    $ref = 'Image by <a href="https://pixabay.com/users/DarkWorkX-1664300/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4261549">DarkWorkX</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4261549">Pixabay</a>';
                } else if ($i == 4) {
                    $img = 'images/image4.jpg';
                    $href = 'courses/SystemsArchitecture/4.php';
                    $ref = 'Image by <a href="https://pixabay.com/users/stevepb-282134/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836842">Steve Buissinne</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2836842">Pixabay</a>';
                } else if ($i == 5) {
                    $img = 'images/image5.jpg';
                    $href = 'courses/SystemsArchitecture/5.php';
                    $ref = 'Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3233653">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3233653">Pixabay</a>';
                } else if ($i == 6) {
                    $img = 'images/image6.jpg';
                    $ref = 'Image by <a href="https://pixabay.com/users/GraphicsSC-1426978/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1135176">GraphicsSC</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1135176">Pixabay</a>';
                    $href = 'courses/SystemsArchitecture/6.php';
                }
            ?>
                <div class="col-lg-4 col-sm-6 my-1 d-flex align-items-stretch">
                    <div class="card">
                        <img src="<?php echo $img ?>" class="card-img-top img-fluid" alt="project pic">
                        <p><?php echo $ref ?></p>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo 'Lecture ' . $i ?></h5>

                            <p> <a class="btn btn-success btn-sm" href="<?php echo $href ?>">Go to Notes!</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
}  ?>







































<?php
require 'footer.php';
?>