<?php 
// $getReviews = mysqli_query($conn, "SELECT * FROM review");
$id = $row['id'];
$getReviewsbyID = mysqli_query($conn,"SELECT * FROM review WHERE id_intro=$id");
$fetchReview = mysqli_fetch_all($getReviewsbyID,MYSQLI_ASSOC);

function renderStar($rating){
    
    $fullstars = floor($rating);
    $halfstars = ($rating - $fullstars)>= 0.5 ? true :false;
    $starHtml = str_repeat('<i class="bi bi-star-fill"></i>',$fullstars);
    if($halfstars){
        
        $starHtml.='<i class="bi bi-star-half"></i>';
    }
    $starHtml.= str_repeat('<i class="bi bi-star"></i>',5-$fullstars - ($halfstars ? 1:0));
    return $starHtml;
}
?>

<div class="bg-light" id="reviews">
    <div class="container p-5">
        <div class="text-center">
            <h1 class="display-6 text-bold fw-2"><i class="bi bi-stars"></i> Book Reviews</h1>
            <p class="lead">What My Students have said about the book...</p>
        </div>
        <div>
            <?php
            if(mysqli_num_rows($getReviewsbyID)>0):
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
                            <?=renderStar($fetchReviews['rating'])?>
                            <!-- <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i> -->
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