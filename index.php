<?php
session_start();
$title = 'Computer Science';
include 'header.php';?>

           <?php if (isset($_COOKIE['userID']))  { ?>
           <!-- the code below will give the page a responsive design adapting to different web sizes. -->
            <main >
<div id = "courses" class="container">
    <div class="row text-center">
        <div class="col-lg-4 col-md-6 my-3 d-flex align-items-stretch">
            <div class="card">
                <img src="images/i1.jpg" class="card-img-top img-fluid" alt="project pic">
               <p> Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1044090">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1044090">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Discrete Maths</h5>
                    <p> <a class="btn btn-success btn-sm" href="DiscreteMaths.php">Go to course</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 d-flex align-items-stretch">
            <div class="card">
                <img src="images/i2.jpg"  class="card-img-top img-fluid" alt="project pic">
                <p>  Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2450152">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2450152">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Operating Systems</h5>
                 
                    <p> <a class="btn btn-success btn-sm" href="OS.php">Go to course</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 d-flex align-items-stretch">
            <div class="card">
                <img src="images/i3.png" class="card-img-top img-fluid" alt="project pic">
                <p>Image by <a href="https://pixabay.com/users/b1-foto-2445766/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2327538">b1-foto</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2327538">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Java</h5>
                    <p> <a class="btn btn-success btn-sm" href="Java.php">Go to course</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 d-flex align-items-stretch">
            <div class="card">
                <img src="images/i4.jpg"  class="card-img-top img-fluid" alt="project pic">
                <p>Image by <a href="https://pixabay.com/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=63527">Gerd Altmann</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=63527">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Systems Architecture</h5>
                    <p> <a class="btn btn-success btn-sm" href="SystemsArchitecture.php">Go to course</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3  d-flex align-items-stretch">
            <div class="card">
                <img src="images/i5.jpg" class="card-img-top img-fluid" alt="project pic">
                <p>Image by <a href="https://pixabay.com/photos/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1209008">Free-Photos</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1209008">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Algorithms</h5>
                    <p> <a class="btn btn-success btn-sm" href="Algorithms.php">Go to course</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3 d-flex align-items-stretch">
            <div class="card">
                <img src="images/i6.png" class="card-img-top img-fluid" alt="project pic">
                <p>Image by <a href="https://pixabay.com/users/Boskampi-3788146/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1873854">Boskampi</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1873854">Pixabay</a></p>
                <div class="card-body">
                    <h5 class="card-title">Web Development</h5>
                    <p> <a class="btn btn-success btn-sm" href="WebDevelopment.php">Go to course</a></p>
                </div>
            </div>
        </div>
   

    </div>
</div>
</main> 
<?php
         

 } else {?>
 <!-- the code below will give the page a responsive design adapting to different web sizes. -->
 <article class="container-fluid  px-0">
     <div class="row align-items-top ">

     <div class = "col-lg-5 m-3">
     <img src="images/bg3.jpg" class="rwd" alt="project pic">
     <p>Photo by Tanner Van Dera on <a href="https://unsplash.com/photos/oaQ2mTeaP7o">Unsplash</a></p>
     </div>
     <div id ="articletext" class = "col-lg-6 m-3">
         <h4 class ="articlestyle ">"The Impact Of Computers In Our Daily Lives"</h4>
     <p >
     "Computers are commonly used items in many fields in our present world as will be in the future. Since the ages of the fathers of computers like Blaise Pascal and Charles Babbage. These machines have proven to be very essential or important and significant especially for people who run large organizations and industries, but also to the individuals themselves.</p>

<p>Computers have affected our lives in a great deal in that almost every thing now is either run by or made by computers. For instance, in large industries, cars and space exploration devices and machines are designed by the use of computers, in hospitals where medical billings, patient admittance and other medical equipments are run and made by computers; traffic lights that run the city traffic are run by computers. One of the major impacts of computer is communication. The level of communication has gone higher through computer as now you can be connected with friends and family around the world, many business deals and conference is now made through the help of computer. Nevertheless the entertainment world would not have been as successful as it is if it weren`t for computers, because movies these days require a lot of animations and use of graphics to create effects. So basically the whole universe is a computerized universe as it is right now.</p>

<p>Even back in the late years of 1600 to 1800, the people saw that life was becoming complex and so they needed to create something that would help them solve the complex problems and mathematics so they wouldn`t have to solve them manually. And so they came up with calculators which could only add and subtract mathematical problems. And the more the technology grew the more computers became important in their daily lives to the present. Computers have changed man a lot. It has helped man to step in to the future. Though computers have been said to take away man power, still computers have managed to make the impossible possible. In today`s life computers have impacted many fields such as the business fields. Many business organizations need computer to keep track of accounts, money and other stuff that they need. It has been noticed that business people use computers a lot both at their homes and at their working places. One may see that these people make pie charts and graphs that they use for presentations during business meetings where most of these charts were made by the help of computers. The business field uses computers a lot in their activities. </p>

<p>Nevertheless, business organization nowadays use online marketing to advertise and contact with their consumers from different parts of the world without direct contact. For instance in www.amazon.com, this is an efficient way of business since it does not limit the area of supplies and consumers. It is through the use of computers that they are able to perform these activities."

<p class = "articlestyle">(Reference: UKEssays. November 2018. The Impact Of Computers In Our Daily Lives Computer Science Essay. [online]. Available from: https://www.ukessays.com/essays/computer-science/the-impact-of-computers-in-our-daily-lives-computer-science-essay.php?vref=1 [Accessed 4 April 2020].)
</p>
     </div>
     
       
     </div>
  
  
     
 </article>
 <?php } ?>
 

<?php
include 'footer.php';
?>