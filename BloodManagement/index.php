<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="BMS | About"; ?>
<?php require 'head.php'; ?>
<body>
    <!--- Header section --->
    <?php require 'header.php'; ?>

    <!--- Carousel section --->
    <?php require 'carousel.php'; ?>


    <!--- Blood section --->

  <div class="container">
    <div class="row py-5">
        <div class="col-md-3 col-sm-6 col-12 mb-2">
            <div class="box1 py-3 box-cards">
                <div class="text-center"><i class="bi bi-droplet-fill"></i></div>
                <a class="text-decoration-none" href="bavailability.php"><h4 class="mb-2 text-center">Blood<br>Availability<br>Search</h4></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-2">
            <div class="box2 py-3 box-cards">
            <div class="text-center"><i class="bi bi-droplet-half"></i></div>
                <a class="text-decoration-none" href="#"><h4 class="mb-2 text-center">Blood<br>Bank<br>Directory</h4></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-2">
            <div class="box3 py-3 box-cards">
            <div class="text-center"><i class="bi bi-clock-fill"></i></div>
                <a class="text-decoration-none" href="#"><h4 class="mb-2 text-center">Blood<br>Donation<br>Camps</h4></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-2">
            <div class="box4 py-3 box-cards">
            <div class="text-center"><i class="bi bi-person-circle"></i></div>
                <a class="text-decoration-none" href="donoteblood.php"><h4 class="mb-2 text-center">Donor<br>Login<br><br></h4></a>
            </div>
        </div>
    
        
    </div>
  </div>

  <!--- Learn about section --->
  <div class="container">
    <div class="about-donation-section">
        <h4 class="heading mb-1 text-uppercase text-center">
                        Learn About Donation
        </h4>
        <div class="line mx-auto">
        </div>
        <div class="row pt-4">
            <div class="col-md-6 img-donation">
                <img src="assets/images/donationFact.webp" alt="" width="500">
                <blockquote>
                    <p style='font-family:Segoe UI'>After donating blood, the body works to replenish the blood loss. This
              stimulates the production of new blood cells and in turn, helps in maintaining good health.
                    <p>
                </blockquote>
            </div>
            <div class="col-md-6">
                <table class="table table-responsive">
                    <tbody>
                    <tr>
                <th colspan="3" style='color:white;background-color:red;'>Compatible Blood Type Donors</th>
              </tr>
              <tr>
                <td><b>Blood Type</b></td>
                <td><b>Donate Blood To</b></td>
                <td><b>Receive Blood From</b></td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>A+</b></span></td>
                <td>A+ AB+</td>
                <td>A+ A- O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O+</b></span></td>
                <td>O+ A+ B+ AB+</td>
                <td>O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B+</b></span></td>
                <td>B+ AB+</td>
                <td>B+ B- O+ O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB+</b></span></td>
                <td>AB+</td>
                <td>Everyone</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>A-</b></span></td>
                <td>A+ A- AB+ AB-</td>
                <td>A- O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>O-</b></span></td>
                <td>Everyone</td>
                <td>O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>B-</b></span></td>
                <td>B+ B- AB+ AB-</td>
                <td>B- O-</td>
              </tr>
              <tr>
                <td><span style="color: #961e1b;"><b>AB-</b></span></td>
                <td>AB+ AB-</td>
                <td>AB- A- B- O-</td>
              </tr>
                    </tbody>
                </table>
            </div>
        </div>
                    
    </div>

  </div>

  <!--- Types of donation section --->
  <div class="container">
        <div class="types-of-donation">
            <h4 class="heading mb-1 text-uppercase pt-4 text-center">
                        Types of Donation
            </h4>
            <div class="line mx-auto">
            </div>
            <div class="paragraph pt-3">
            <p>The human body contains five liters of blood, which is made of several useful components i.e.<b>Whole blood</b>, <b>Platelet</b>, and <b>Plasma</b>.

            Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.

             For <b>plasma</b> and <b>platelet</b> donation you must have donated whole blood in past two years.</p>
            </div>    
        </div>
  </div>

  <!--- Footer section --->
<?php require 'footer.php'; ?>
</body>
</html>    