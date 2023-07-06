<?php
  require './template/header.php';

 

  ?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-5 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Competition Mode
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-users.php">
                <span data-feather="file" class="align-text-bottom"></span>
                Mange Participant
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-admin.php">
                <span data-feather="users" class="align-text-bottom"></span>
                Manage Admin
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-categories.php">
                <span data-feather="layers" class="align-text-bottom"></span>
                Manage Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="manage-questions.php">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Questions
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="results.php">
                <span data-feather="file-text" class="align-text-bottom"></span>
                Results
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="edit-profile.php?current_user_id=<?= $current_user_id ?>">
                <div class="avatar">
                  <img src=" <?= ROOT_URL . 'img/admin-img/'.$cur_user['avatar']  ?>" alt="avatar">
                </div>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        
      <section class="form-section text-center" style="padding-top: 0;">
        <main class="form-signin w-100 m-auto" >
            <h3 class="h3 my-4 fw-normal">Edit Profile</h3>

            <form class="signup-form" action="../php/edit-profile-logic.php" enctype="multipart/form-data" method="POST" >
              <?php if(isset($_SESSION['invalid_edit'])) :?>
                <div class="form-floating">
                    <div class="error-text"><?php $_SESSION['invalid_edit'];
                                                unset($_SESSION['invalid_edit']);
                                                    ?></div>
                </div>
              <?php endif ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="hidden" name="id" value="<?= $cur_user['id'] ?>" class="form-control" id="id" placeholder="Id">
                            <input type="hidden" name="prev_avatar" value="<?= $cur_user['avatar'] ?>" class="form-control" id="prev_avatar" placeholder="prev Avatar">
                            <input type="hidden" name="prev_password" value="<?= $cur_user['userpassword'] ?>" class="form-control" id="prev_password" placeholder="prev Avatar">
                            
                            <input type="text" name="firstname" value="<?= $cur_user['firstname'] ?>" class="form-control" id="firstname" placeholder="Enter your First Name">
                            <label for="firstname">First Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="lastname" class="form-control" value="<?= $cur_user['lastname'] ?>" id="lastname" placeholder="Enter your Last Name">
                            <label for="lastname">Last Name:</label>
                        </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="username" class="form-control" value="<?= $cur_user['username'] ?>" id="username" placeholder="User Name">
                            <label for="username">User Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" name="avatar" class="form-control"  id="avatar" placeholder="Avatar">
                            <label for="avatar">Avatar:</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control"  id="password" placeholder="Password">
                    <label for="password">Password:</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="confirmpassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                    <label for="confirmPassword">Confirm Password:</label>
                </div>

                <button class="w-100 btn btn-lg btn-submit signup-btn" type="submit">Update Profile</button>
            
            </form>
        </main>
    </section>
        
        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <div class="col-md-4 d-flex align-items-center">
              <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img class="img-logo" src="../img/logo.png" alt="Sevenskies">
              </a>
              <span class="mb-3 mb-md-0 text-muted">&copy; 2023 International, School</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter" />
                  </svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram" />
                  </svg></a></li>
              <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook" />
                  </svg></a></li>
            </ul>
          </footer>
        </div>
      </main>

    </div>
  </div>

<?php
    require './template/footer.php';

  ?>