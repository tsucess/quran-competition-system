<?php
    require 'template/header.php';
    ?>




    <main>
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/banner.jpeg" class="d-block w-100" alt="First">
                </div>
                <div class="carousel-item">
                    <img src="./img/banner.jpeg" class="d-block w-100" alt="First">
                </div>
                <div class="carousel-item">
                    <img src="./img/banner.jpeg" class="d-block w-100" alt="First">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
        <div class="container my-4 " id="about">
            <div class=" rounded banner py-4">
                <!-- <img class="image-banner" src="./img/banner.jpeg" alt=""> -->
                <div class="col-sm-8 py-1 mx-auto text-center">
                    <h2 class=" fw-bold" style="color:#fff">About Seven Skies & Qur'an Recitation Competition </h2>
                </div>
                <div class="row py-4 px-5"> 
                  <h4>AN EXCLUSIVE ISLAMIC INTERNATIONAL SCHOOL IN MALAYSIA </h4> <br>
                    <p class="p- mx-auto">
                  Established in 2014, Seven Skies International School follows Early Years Foundation Stage (EYFS)
                  UK for Kindergarten, UK National Syllabus for Primary, and IGCSE Cambridge for Secondary O Levels.
                    We take pride in providing our students with a strong Islamic Education Curriculum focusing on the
                    three pillars: Qur’anic Studies, Islamic Studies, and the Arabic language. 
                    Our uniquely designed Character Development curriculum is enriched with strong character, 
                    personality & skills development that promotes self-resilience & leadership along with emotional stability.
                      Our campus is purpose-built with ample facilities designed to facilitate students’ learning experience.
                      It is equipped with spacious classrooms, indoor and outdoor sports facilities, science lab, ICT lab, library,
                        art room, sick bay, and prayer hall. With an internationally recognized curriculum pathway, we shape our
                        students into confident, responsible, reflective, innovative, and engaged individuals. They are to be
                          equipped with entrepreneurial skills and social & emotional stability, enabling them to become the
                          leaders in their fields of career.
                    </p>
                </div>
            </div>
        
        </div>

        <div class="container" id="faq">
          <section class="faq-section py-4 px-4 bg-white">
            <div class="row">
              <div class="col-12 text-center p-4"> <p class="h1">Frequently Asked Questions</p></div>
            </div>
          
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How do I register for the Competition
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin
                     adds the appropriate classes that we use to style each element. These classes control the overall appearance, 
                     as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                      our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                       though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What is the Duration for the Programme
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse 
                    plugin adds the appropriate classes that we use to style each element. These classes control the overall
                     appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom 
                     CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.
                      accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What are the requirements for registeration
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> 
                    It is hidden by default, until the collapse plugin adds the appropriate classes 
                    that we use to style each element. These classes control the overall appearance, 
                    as well as the showing and hiding via CSS transitions. You can modify any of this with
                    custom CSS or overriding our default variables. It's also worth noting that just about
                      any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    What preparations are made available for Participants
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> 
                    It is hidden by default, until the collapse plugin adds the appropriate classes 
                    that we use to style each element. These classes control the overall appearance, 
                    as well as the showing and hiding via CSS transitions. You can modify any of this with
                    custom CSS or overriding our default variables. It's also worth noting that just about
                      any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                  </div>
                </div>
              </div>
            </div>
            </section>
        </div>


        <div class="container" id="contact">
          <section class="faq-section p-4 my-2 bg-light">
            <div class="row">
              <div class="col-12 text-center p-4"> <p class="h1">Get in Touch with us</p></div>
            </div>

            <?php if(isset($_SESSION['success'])): ?>
                  <div class="form-floating">
                      <div class="error-text-valid">
                                <?php $_SESSION['success'];
                                    unset($_SESSION['success']);
                                      ?>
                      </div>
                  </div>
              <?php endif ?>
            <form id="contactForm" action="<?= ROOT_URL ?>php/mail.php" method="POST" class="col-md-8 mx-auto" >
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control p-3" id="name" name="fname" type="text" placeholder="Name" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control p-3" id="emailAddress" name="email" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
              </div>
              <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Form submission successful!</div>
              </div>
              <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-lg disabled col-md-4 mx-auto" name="submit" id="submitButton" type="submit">Send</button>
              </div>
          </form>
            </section>
        </div>
    </div>
</main>

<!-- SB Forms JS -->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <?php
        require 'template/footer.php';
    ?>