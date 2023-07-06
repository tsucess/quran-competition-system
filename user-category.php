<?php
    require 'template/header.php';

    $query = "SELECT * FROM category";
    $categories = mysqli_query($dbconnect, $query);
  
?>

    <main>
        <div class="container ">
            <div class="row ">
                <div class="col-md-12">
                    <h4 class="display-6 fw-bold text-center">Select your Category</h4>
                </div>
            </div>

            <!-- <h2>Questions</h2> -->
            <div class="row mb-5">
            <?php if (mysqli_num_rows($categories) > 0) : ?>
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <div class="col-md-6 rounded gy-4">
                            <a href="questions-page.php?category_id=<?= $category['id'] ?>">
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

    <?php
    require 'template/footer.php';
?>