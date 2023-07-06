<?php
  require './template/header.php';

  ?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
        <div class="position-sticky pt-5 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">
                <span data-feather="home" class="align-text-bottom"></span>
                Competition Mode
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-user.php">
                <span data-feather="file" class="align-text-bottom"></span>
                Mange Participant
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="manage-admin.php">
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
              <a class="nav-link" href="edit-profile.php">
                <div class="avatar">
                  <img src=" <?= ROOT_URL . 'img/admin-img/'.$cur_user['avatar']  ?>" alt="avatar">
                </div>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Add Admin</h2> <a href="manage-admin.php" class="btn btn-success px-5">Back</a>
                </div>
      <!-- <section class="form-section text-center"> -->
        <main class="form-signin w-100 m-auto my-2">
            <form class="admin-form">
                <div class="form-floating">
                    <div class="error-txt">This is an error message</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="fname" id="floatingFistName"
                                placeholder="Enter your First Name">
                            <label for="floatingFistName">First Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="lname" id="floatingLastName"
                                placeholder="Enter your Last Name">
                            <label for="floatingLastName">Last Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="uname" id="floatingUserName" placeholder="User Name">
                            <label for="floatingUserName">User Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="avatar" id="avatar" placeholder="Avatar">
                            <label for="avatar">Avatar:</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control"  name="password" id="" placeholder="Password">
                    <label for="floatingPassword">Password:</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="confirmpassword" id="confirmPassword" placeholder="Password">
                    <label for="confirmPassword">Confirm Password:</label>
                </div>

                <button class="w-100 btn btn-lg mb-5 btn-submit add-admin-btn" type="submit">Create account</button>
            </form>
        </main>


   
        

        <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-5 border-top">
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

  <script src="../js/add-admin.js"></script>

<?php
    require './template/footer.php';

  ?>

