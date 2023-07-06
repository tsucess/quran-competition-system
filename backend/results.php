<?php
  require './template/header.php';
  include "../php/all-filter-func.php";

  // $query = "SELECT * FROM participant";
  // $users = mysqli_query($dbconnect, $query);



  $query2 = "SELECT * FROM category";
  $categories = mysqli_query($dbconnect, $query2);




  ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky pt-5 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">
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
              <a class="nav-link active" href="results.php">
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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Result</h2>
                </div>
              <div class="container">
                <h4>Filter</h4>
                <form action="" enctype="multipart/form-data">
                    <div class="row my-4">
                        <div class="col-md-3 col-lg-2">
                        <div class="form_control">
                        <select name="filter" id="filter" class="form-select form-select-md mb-2" aria-label=".form-select-md">
                            <option value="" disabled hidden selected>FILTER</option>
                            <option value="default">ALL</option>
                            <option value="year">YEAR ONLY</option>
                            <option value="yearcategory">YEAR AND CATEGORIES</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-md-3 col-lg-2">
                          <select name="year" id="years" class="form-select form-select-md mb-2" aria-label=".form-select-md">
                                  <option disabled hidden selected>YEAR</option>
                                  <option value="2023">2023</option>
                                  <option value="2024">2024</option>
                                  <option value="2025">2025</option>
                                  <option value="2026">2026</option>
                                  <option value="2027">2027</option>
                                  <option value="2028">2028</option>
                                  <option value="2029">2029</option>
                                  <option value="2020">2020</option>
                                  <option value="2030">2030</option>
                                  <option value="2031">2031</option>
                                  <option value="2032">2032</option>
                              </select> 
                        </div>
                        <div class="col-md-4 col-lg-3">
                          <select class="form-select form-select-md mb-2" name="category" id="categorys" aria-label=".form-select-md">
                              <?php if (mysqli_num_rows($categories) > 0) : ?>
                                <option selected disabled selected>Category</option>
                                  <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['category_title'] ?></option>
                                    <?php endwhile ?>
                                <?php else :  ?>
                                    <option value="">No category found</option>
                              <?php endif  ?>
                            </select> 
                        </div>
                      </div>
                  </form>
                <div class="table-responsive">
                    <table class="table table-striped table-sm" id="edit-feature">
                        <thead>
                            <tr>
                                <th scope="col">Names</th>
                                <th scope="col">Score</th>
                                <th scope="col">Comment</th>
                                <!-- <th scope="col">Delete</th> -->
                            </tr>
                        </thead>
                        <tbody id="table_body">
                        <?php

                        $participants = getAllData();
                        if ($participants) {
                            foreach ($participants as $participant) {

                                $student_id = $participant['id'];

                                $user_query = "SELECT score, comments FROM results WHERE participant_id = $student_id";
                                $user_result = mysqli_query($dbconnect, $user_query);
                                $results = mysqli_fetch_assoc($user_result);
                        ?>
                                <tr id="<?= $participant['id']?>">
                                    <th style="width: 40%;"><?= "{$participant['firstname']} {$participant['lastname']}" ?></th>
                                    <td id="score" style="width: 20%;"> <?php if(!empty($results['score'])){
                                      echo $results['score'];
                                    }
                                    ?></td>
                                    <td id="comment" style="width: 50%;"><?php if(!empty($results['comments'])){
                                      echo $results['comments'];
                                    }
                                    ?></</td>
                                </tr>
                            <?php
                            }
                        } else {

                            ?>
                            <tr>
                                <td colspan="3"> No Student Registered</td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                      
                    </table>
                </div>
              </div>
            </main>







            <!--************** Footer Section  **************************-->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 footer-section">
                <footer class="footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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
        </div>
    </div>
    <script src="../js/filter.js"></script>
<script src="../js/add-edit-table.js"></script>
<?php
  require './template/footer.php';

  ?>