<?php
  require './template/header.php';
  
  if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    $question_fetch_query = "SELECT * FROM question WHERE category_id = $categoryId";
    $question_fetch_result = mysqli_query($dbconnect, $question_fetch_query);
    

    $questionNo = 0;
}

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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Competition Mode</h2> <a href="index.php" class="btn btn-primary px-5">Back</a>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                      <h4 class="display-6 fw-normal text-center">Click to view any Question</h4>
                    </div>
                  </div>

                <!-- <h2>Questions</h2> -->
                
                <?php if (mysqli_num_rows($question_fetch_result) > 0): ?>
            <div class="row">
                <?php while ($question = mysqli_fetch_assoc($question_fetch_result)) : ?> 
                    <div class="col-md-6 rounded gy-4">
                    <a href="../display-question.php?id=<?= $question['id'] ?>">
                          <button class="card px-5 m-auto shadow-sm selected " id="<?= $question['id'] ?>">
                              <div class="card-body">
                                  <p class="card-text text-center px-5">Question <?= ++$questionNo ?></p>
                              </div>
                          </button>
                    </a>
                    </div>
                <?php endwhile ?>
                </div>
                    <?php else :   ?> 
                        <div class="col-md-12 rounded text-center my-5 p-5 gy-4">
                            <div class="card shadow-sm cat-card">
                                <div class="card-body p-5">
                                    <p class="card-text text-center p-2">No Questions Available for this Category </p>
                                    <!-- <a class="btn btn-primary px-5" href="user-category.php">Back</a> -->
                                    
                                </div>
                            </div>             
                        </div>
                    <?php endif   ?> 

                    
            </main>
        </div>
    </div>

<script src="../js/is-selected.js"></script>
<?php
  require './template/footer.php';

?>