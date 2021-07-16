<?php
if (isset($_COOKIE['userID'])) { ?>

    <div class="container justify-content-center d-flex">

        <h4><?php echo 'Lecture #' . $lecture . ' of ' . $title ?><h4>

    </div>

    <main>
        <!-- the code below will give the page a responsive design adapting to different web sizes. -->

        <div class="container-fluid  px-0">

            <div class="row ">
                <!-- will display the lecture number -->
                <div class="col-12 col-xl-7  my-3 d-flex ">
                    <iframe src="<?php echo 'notes/' . $lecture . '.pdf' ?>" style="width:100%; min-height: 500px; height:auto;">
                    </iframe>
                </div>
                <!-- Title: The Web Development Bootcamp
                        Author: Colt Steele
                        Date: 
                        Code version: 
                        Availability: Udemy.com 
                        the beneath code has been adapted from the To-Do List section of the Udemy course-->

                <div class="putcenter col-12 col-xl-4 m-3 ">
                    <h3 id="notestitle" class="text-center"> NOTES <i class="fas fa-sticky-note"></i></h3>
                    <label id="noteslabel" for="text">Please type your notes here:</label>
                    <input id="inputnote" type="text" name="text" placeholder="Add Note">

                    <ol id="notesol">
                        <li class='linotes'><span><i class='fa fa-trash'></i></span>add your notes here</li>
                    </ol>
                </div>

            </div>
        </div>

    </main>


<?php
}  ?>
</div>
</div>
</div>
<?php if ($title === 'Systems Architecture') { ?>
    <p class="bottompage"> Disclaimer: Notes have been adapted from lecture slides of Systems Architecture by Professor George Spanoudakis from City University</p>
<?php } else if ($title === 'Operating Systems') { ?>
    <p class="bottompage"> Disclaimer: Notes have been adapted from Operating Systems Internals and Design Principles by William Stallings, 7th edition</p>

<?php } ?>

<!-- will link back to the lectures page of the current module -->

<p class="bottompage">For all lectures, click <a href="<?php echo '../../' . $subject . '.php' ?>">here</a></p>