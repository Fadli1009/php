<?php
    $selectAc = mysqli_query($conn, "SELECT * FROM accordion");
    $rowAc=mysqli_fetch_all($selectAc,MYSQLI_ASSOC);
    $id = $row['id'];
    $selectAcro = mysqli_query($conn,"SELECT * FROM accordion WHERE id_intro=$id");
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
                <?php
                if(mysqli_num_rows($selectAc)>0):
                    foreach ($rowAc as $rowAcs):     
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo<?=$rowAcs['id']?>" aria-expanded="false"
                            aria-controls="collapseTwo<?=$rowAcs['id']?>">
                            <?=$rowAcs['judul']?>
                        </button>
                    </h2>
                    <div id="collapseTwo<?=$rowAcs['id']?>" class="accordion-collapse collapse"
                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?=$rowAcs['descs']?>
                        </div>
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
    </div>
</div>