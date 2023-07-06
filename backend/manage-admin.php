<?php
  require './template/header.php';

  

  $query = "SELECT * FROM admins WHERE NOT id = $current_user_id";
  $admins = mysqli_query($dbconnect, $query);
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
                    <h2>Manage Administrators</h2> <a href="add-admin.php" class="btn btn-success px-4">Add Admin</a>
                </div>



                <!-- <h2>Questions</h2> -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">UserName</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if (mysqli_num_rows($admins) > 0) : ?>
                                <?php while ($admin = mysqli_fetch_assoc($admins)) : ?>
                                  <tr>
                                    <td><?= "{$admin['firstname']} {$admin['lastname']}"  ?></td>             
                                    <td><?= $admin['username'] ?></td>        
                                    <td><button class="btn btn-primary edit-admin-btn" id="<?= $admin['id'] ?>" data-bs-toggle="modal" data-bs-target="#modalSigninEdit">Edit</button></td>
                                    <td><a onclick="validate(this)" href="<?= ROOT_URL ?>php/delete-admin.php?id=<?= $admin['id'] ?>"  class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php endwhile ?>
                    <?php else :  ?>
                        <tr>
                            <td colspan="4" class="text-center p-2"> No admin Created</td>
                        </tr>
                    <?php endif  ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="container"> -->

                </main>


<div class="modal" tabindex="-1" id="modalSigninEdit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="edit-admin-modal">
                <div class="form-floating">
                    <div class="error-txtmodal"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 my-2">
                        <div class="form-floating">
                            <input type="hidden" class="form-control" name="prev_id" id="prev_admin_id" placeholder="Admin PREV Id">
                            <input type="hidden" class="form-control" name="prev_password" id="prev_admin_password" placeholder="Admin PREV Password">
                            <input type="hidden" class="form-control" name="prev_avatar" id="prev_avatar" placeholder="Prev Avatar Name">

                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter your First Name">
                            <label for="firstname">First Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6 my-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Enter your Last Name">
                            <label for="lastname">Last Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                            <label for="username">User Name:</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="avatar" id="avatar" placeholder="Avatar">
                            <label for="avatar">Avatar:</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="floatingPassword">Password:</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" class="form-control" name="confirmpassword" id="confirmPassword" placeholder="Confirm Password">
                    <label for="confirmPassword">Confirm Password:</label>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-success update-admin-btn"  type="submit" >Update admin</button>
          </form>
      </div>
    </div>
  </div>
</div>
                
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
                <!-- </div> -->
            </div>
        </div>
        <script src="../js/edit-admin.js"></script>
<?php
  require './template/footer.php';

?>