<?php 
$getReviews = mysqli_query($conn, "SELECT * FROM review");
$fetchReview = mysqli_fetch_all($getReviews,MYSQLI_ASSOC);
$id = $row['id'];
$getReviewsbyID = mysqli_query($conn,"SELECT * FROM review WHERE id_intro=$id");
?>

<div class="bg-light" id="reviews">
    <div class="container p-5">
        <div class="text-center">
            <h1 class="display-6 text-bold fw-2"><i class="bi bi-stars"></i> Book Reviews</h1>
            <p class="lead">What My Students have said about the book...</p>
        </div>
        <div>
            <?php
            if(mysqli_num_rows($getReviews)>0):
                foreach ($fetchReview as $fetchReviews) :
            ?>
            <div class="review-card bg-white border rounded shadow-sm ">
                <div class="p-4">

                    <div>
                        <p class="my-1 fs-4"><strong><?=$fetchReviews['nama']?></strong></p>
                    </div>
                    <div>
                        <p class="mb-0"><strong><?=$fetchReviews['judul']?></strong></p>
                    </div>
                    <p class="mt-2"><?=$fetchReviews['deskripsi']?></p>
                    <small class="text-muted"><?=$fetchReviews['nama']?>
                        <div>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                    </small>
                </div>
            </div>
            <?php
            endforeach;
                else:
                    echo "No data available";
                endif;
            ?>
        </div>
    </div>