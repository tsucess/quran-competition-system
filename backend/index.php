<?php
  require './template/header.php';

  $query = "SELECT * FROM category";
  $categories = mysqli_query($dbconnect, $query);


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
                  <img src=" <?= ROOT_URL . 'img/admin-img/'.$cur_user['avatar'] ?>" alt="avatar">
                </div>
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              <?php if(isset($_SESSION['valid'])): ?>
                  <div class="form-floating">
                      <div class="error-text-valid">
                                <?php $_SESSION['valid'];
                                    unset($_SESSION['valid']);
                                      ?></div>
                      </div>
              <?php endif ?>
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-1 mb-3 border-bottom">
          <h2>Competition Mode</h2><a href="../php/reset-questions.php" class="btn btn-warning px-5">Reset</a>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
            <h4 class="display-6 fw-normal text-center">Please Select Your Category</h4>
          </div>
        </div>

        <div class="row mb-5 pb-5">
            <?php if (mysqli_num_rows($categories) > 0) : ?>
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <div class="col-md-6 rounded gy-4">
                            <a href="questions.php?category_id=<?= $category['id'] ?>">
                            <div class="card shadow-sm cate-card">
                                <div class="card-body">
                                    <p class="card-text text-center"><?= $category['category_title'] ?></p>
                                </div>
                            </div>
                            </a>              
                        </div>
                        <?php endwhile ?>
                    <?php endif   ?>
              </div>




            </main>
            
          </div>
        </div>
        <!-- <div class="container mt-5" >
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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
        </div> -->

        <?php
  require './template/footer.php';

?>