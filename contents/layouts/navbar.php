<?php
// $array = [[
//     "nama"=>"Fadli",
//     "kelas"=>3
// ],[
//     "nama"=>"Andi",
//     "kelas"=>4
// ]];
// var_dump ($array[0]);
?>


<div class="navbar navbar-expand-md navbar-light position-fixed bg-white" style="width: 100%;z-index: 1000;">
    <div class="container-xxl">
        <a href="#intro" class="navbar-brand">
            <span class="fw-bold text-secondary">
                <?= isset($row['judulWebsite'])?  $row['judulWebsite'] : null?><i class="bi bi-book"></i>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
            aria-label="Toggle Navigation" aria-controls="main-nav" aria-expanded="false">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#intro" class="nav-link ">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#reviews" class="nav-link">
                        Reviews
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#getInTouch" class="nav-link">
                        Get In Touch
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">
                        Pricing
                    </a>
                </li>
                <li class="nav-item m2 d-none d-md-inline">
                    <a href="" class="btn btn-secondary">Buy Now</a>
                </li>
            </ul>
            <!-- <div class="d-flex align-items-center">
                <a href="#" class="btn btn-primary me-2">
                    Sign Up
                </a>
                <a href="#" class="btn btn-outline-primary">
                    Login
                </a>

            </div> -->
        </div>
    </div>
</div>
<section id="intro" class="border p-5  bg-white">
    <div class="container-lg">
        <div class="row justify-content-center align-item-center">
            <div class="col-md-5 text-center text-md-start">
                <div class="display-1">
                    <?= isset($row['judul']) ?$row['judul']:null ?>
                </div>
                <div class="display-5 text-muted">
                    <?= isset($row['subJudul']) ?$row['subJudul']:null ?>
                </div>
                <p class="lead my-4 text-muted">
                <p> <?= isset($row['isiKonten']) ?$row['isiKonten']:null ?></p>
                </p>
                <a href="" class="btn btn-secondary btn-lg">Buy Now</a>
                <a href="Explore My Other Books" class="d-block mt-5">Explore my Other Books</a>
            </div>
            <div class="col-md-5 text-center text-md-start align-item-center">
                <img src="../asset/img/<?= isset($row['gambar2']) ? $row['gambar2'] : null ?>" width="300" class=""
                    alt="<?= isset($row['gambar2']) ? $row['gambar2'] : null ?>">
            </div>
        </div>
    </div>
</section>