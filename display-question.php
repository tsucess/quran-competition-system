<?php
    require 'template/header.php';

    if (isset($_GET['id'])) {
        $questionId = $_GET['id'];
        $query = "SELECT * FROM question WHERE id = $questionId";
        $users = mysqli_query($dbconnect, $query);
        $user = mysqli_fetch_assoc($users);
       
    
    
    }
?>

    <main>
        <div class="container ">
            <div class=" rounded d-question">
                <div class="col-sm-8 py-1 mx-auto text-center">
                    <h2 class=" fw-bold" style="color:#fff">
                    Question <?php if(isset($_SESSION['questionNo'])){
                                            echo $_SESSION['questionNo'];
                                            } ?></h2>

                                            <?php if($user['question'] === 'NULL') :?>
                                                <iframe src="<?= $user['question_url'] ?>" class="iframe-display" frameborder="1"></iframe>
                                                <?php else :?>
                                                    <p class="queFormat"><?= $user['question'] ?></p>
                                                <?php endif?>
                </div>
            </div>
        
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                 <a href="backend/index.php" class="btn btn-primary px-5">Back</a>
            </div>
        </div>
    </main>

    <?php
    require 'template/footer.php';
?>