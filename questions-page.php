<?php
    require 'template/header.php';

if (isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    $question_fetch_query = "SELECT * FROM question WHERE category_id = $categoryId";
    $question_fetch_result = mysqli_query($dbconnect, $question_fetch_query);
    

    $questionNo = 0;
}
?>
 
 
 <main>
     <div class="container ">
            <a href="user-category.php" class="btn btn-primary px-5">Back</a>

            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-5 fw-bold text-center">Questions</h1>
                </div>
            </div>

            
            <?php if (mysqli_num_rows($question_fetch_result) > 0): ?>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                    <?php while ($question = mysqli_fetch_assoc($question_fetch_result)) : ?> 
                        <div class="col">
                                <button class="shadow-sm q-card question_no" id="<?= $question['id'] ?>"><?php 
                                
                                echo ++$questionNo ;
                                
                                $_SESSION['questionNo'] = $questionNo; ?></button>
                        </div>
                    <?php endwhile ?>
                </div>
                    <?php else :   ?> 
                        <div class="col-md-12 rounded text-center my-5 p-5 gy-4">
                            <div class="card shadow-sm cat-card">
                                <div class="card-body p-5">
                                    <p class="card-text text-center p-2">No Questions Available for this Category </p>
                                    <a class="btn btn-primary px-5" href="user-category.php">Back</a>
                                    
                                </div>
                            </div>             
                        </div>
                    <?php endif   ?> 
        </div>
    </main>

    <script src="js/custom.js"></script>
    <script src="js/fetch-is_selected.js"></script>
    <?php
    require 'template/footer.php';
?>