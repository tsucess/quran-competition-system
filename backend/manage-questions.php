<?php
  require './template/header.php';


// get available categries 
  $query = "SELECT * FROM category";
  $categories = mysqli_query($dbconnect, $query);

  $categ = mysqli_query($dbconnect, $query);

  $cat_links = mysqli_query($dbconnect, $query);





  // get available question 
    $query = "SELECT * FROM question";
    $questions = mysqli_query($dbconnect, $query);

    $questionNo = 0;
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
              <a class="nav-link active" href="manage-questions.php">
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
          <h2>Manage Questions</h2> <button class="btn btn-success" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalLink">Upload Question Link</button> <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSignin">Add Question</button>
        </div>



        <!-- <h2>Questions</h2> -->
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Question No.</th>
                <th scope="col">Question</th>
                <th scope="col">Category</th>
                <!-- <th scope="col">Display</th> -->
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
            <?php if (mysqli_num_rows($questions) > 0) : ?>
                        <?php while ($question = mysqli_fetch_assoc($questions)) : ?>
                              <tr>
                                  <td><?= ++$questionNo ?></td>
                                  <td><?php if ($question['question'] === 'NULL') {
                                          echo $question['question_url'];
                                        }else {
                                          echo $question['question'];
                                  } ?> </td>
                                  <td><?php
                                  
                                  $cat_id = $question['category_id'];

                                  // get available categries 
                                  $query = "SELECT * FROM category WHERE id = $cat_id";
                                  $cate = mysqli_query($dbconnect, $query);
                                   if (mysqli_num_rows($cate) > 0){
                                    $cat = mysqli_fetch_assoc($cate);
                                     echo $cat['category_title'];
                                   }
                                   ?></td>        
                                  <!-- <td><button class="btn btn-primary">View</button></td> -->
                                  <td><button class="btn btn-primary edit-question-btn" id="<?= $question['id'] ?>" data-bs-toggle="modal" data-bs-target="#modalSigninEdit">Edit</button></td>
                                  <td><a onclick="validate(this)" href="<?= ROOT_URL ?>php/delete-question.php?id=<?= $question['id'] ?>"  class="btn btn-danger">Delete</a></td>
                              </tr>
                        <?php endwhile ?>
                    <?php else :  ?>
                        <tr>
                            <td colspan="6" class="text-center p-2"> No question added</td>
                        </tr>
                    <?php endif  ?>
             

            </tbody>
          </table>
        </div>
      </main>




 <!--************** Modal Section  **************************-->


 <div class="modal" tabindex="-1" id="modalLink">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Iframe: Upload Question url</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="add-question-url-modal">
                    <div class="form-floating text-center">
                        <div class="error-txtmodal"></div>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="text" name="question-url" id="question1" rows="3" placeholder="Upload url only">
                    </div>
                    <div class="col-lg-12 my-2">
                        <div class="form-floating">
                          <select class="form-control p-3 my-2 rounded" name="category" id="category">
                            <?php if (mysqli_num_rows($cat_links) > 0) : ?>
                              <option selected disabled >Category</option>
                                <?php while ($cat_link = mysqli_fetch_assoc($cat_links)) : ?>
                                  <option value="<?= $cat_link['id'] ?>"><?= $cat_link['category_title'] ?></option>
                                  <?php endwhile ?>
                                  <?php else :  ?>
                                      <option value="">No category found</option>
                                <?php endif  ?>
                              
                          </select>   
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary add-url-btn" type="submit">Create Question </button>
          </form>
        </div>
    </div>
  </div>
</div>
 <div class="modal" tabindex="-1" id="modalSignin">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="add-question-modal">
                    <div class="form-floating text-center">
                        <div class="error-txtmodal"></div>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control" name="question" id="question" rows="3" placeholder="Type your question here.."></textarea>
                    </div>
                    <div class="col-lg-12 my-2">
                        <div class="form-floating">
                          <select class="form-control p-3 my-2 rounded" name="category" id="category">
                            <?php if (mysqli_num_rows($categories) > 0) : ?>
                              <option selected disabled >Category</option>
                                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                  <option value="<?= $category['id'] ?>"><?= $category['category_title'] ?></option>
                                  <?php endwhile ?>
                                  <?php else :  ?>
                                      <option value="">No category found</option>
                                <?php endif  ?>
                              
                          </select>   
                        </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary add-question-btn" type="submit">Create Question </button>
          </form>
        </div>
    </div>
  </div>
</div>


 <div class="modal" tabindex="-1" id="modalSigninEdit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="edit-question-modal">
                <div class="form-floating text-center">
                    <div class="error-txtmodal"></div>
                </div>
                <div class="form-group mb-3">
                  <input type="hidden" class="form-control p-3 mt-2" name="prev_id" id="prev_question_id" placeholder="">
                  <textarea class="form-control" name="questionEdit" id="question2" rows="3" ></textarea>
                  <input class="form-control" type="text" name="question-url-edit" id="question-url" rows="3" placeholder="Upload url only">
                </div>
                <div class="col-lg-12 my-2">
                    <div class="form-floating">
                      <select class="form-control p-3 my-2 rounded" name="categoryEdit" id="category2">
                      <?php if (mysqli_num_rows($categ) > 0) : ?>
                          <option  selected disabled >Category</option>
                            <?php while ($category = mysqli_fetch_assoc($categ)) : ?>
                              <option value="<?= $category['id'] ?>"><?= $category['category_title'] ?></option>
                              <?php endwhile ?>
                              <?php else :  ?>
                                  <option value="">No category found</option>
                            <?php endif  ?>
                      </select>   
                    </div>
                </div>
                <button class="w-100 btn btn-lg btn-primary update-question-btn" type="submit">Update Question </button>
          </form>
      </div>
    </div>
  </div>
</div>





      <!--************** Footer Section  **************************-->
      <!-- <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 footer-section">
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
      </div> -->
    </div>
  </div>

  <script src="../assets/ckeditor/ckeditor.js"></script>
  <script>
    // CKEDITOR.replace('question');
    // CKEDITOR.replace('questionEdit');
  </script>
<script src="../js/edit-question.js"></script>
<script src="../js/add-question.js"></script>
<script src="../js/add-question-url.js"></script>
<?php
  require './template/footer.php';

?>