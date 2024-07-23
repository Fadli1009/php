<?php
    $selectAc = mysqli_query($conn, "SELECT * FROM accordion");
    $id = $row['id'];
    $selectAcro = mysqli_query($conn,"SELECT * FROM accordion WHERE id_intro=$id");
    $rowAc=mysqli_fetch_all($selectAcro,MYSQLI_ASSOC);
    $selectReview = mysqli_query($conn, "SELECT * FROM review WHERE id_intro = $id");
    $rowReviews=mysqli_fetch_all($selectReview, MYSQLI_ASSOC);
?>

<div class="container py-5">
    <div class="text-center py-4">
        <h1 class="display-6   text-bold fw-2">Inside The Box ...</h1>
        <p class="lead">A Quick glance at the topics you'll learn</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm mb-2">
            <img src="../asset/img/<?=$row['gambar']?>" alt=" <?=$row['gambar2']?>" width="100%">
        </div>
        <div class="col-sm">
            <div class="accordion" id="accordionExample">
                <?php if(mysqli_num_rows($selectAcro) > 0): ?>
                <?php foreach ($rowAc as $rowAcs): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?=$rowAcs['id']?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse<?=$rowAcs['id']?>" aria-expanded="false"
                            aria-controls="collapse<?=$rowAcs['id']?>">
                            <?=$rowAcs['judul']?>
                        </button>
                    </h2>
                    <div id="collapse<?=$rowAcs['id']?>" class="accordion-collapse collapse"
                        aria-labelledby="heading<?=$rowAcs['id']?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?=$rowAcs['descs']?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="alert alert-warning" role="alert">
                    No data available
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>