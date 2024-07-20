<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <span>Isilah Form ini</span>
                    <hr>
                    <div class="mb-3">
                        <label for="text_nama">Nama Lengkap</label><br>
                        <input type="text" class="form-control" name="text_nama">
                    </div>
                    <div class="mb-3">
                        <label for="text_nama">Alamat</label><br>
                        <textarea name="text_alamat" class="form-control" id=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telp">No. Telepon</label><br>
                        <input type="number" name="number" class="form-control" id="telp">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label><br>
                        <input type="password" name="text_password" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="text_memasak" id="masak" class="form-check-input" />
                            <label for="masak" class="form-check-label">Memasak</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="text_futsal" id="basket" class="form-check-input" />
                            <label for="basket" class="form-check-label">Basket</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="text_basket" id="basket" class="form-check-input" />
                            <label for="futsal" class="form-check-label">Futsal</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="text_hiking" id="hiking" class="form-check-input" />
                            <label for="hiking" class="form-check-label">Hiking</label>
                        </div>
                    </div>

                    <p>Jenis Kelamin</p>
                    <div class="form-check">
                        <input type="radio" name="j_kel" value="pria" class="form-check-input">
                        <label for="pria" class="form-check-label">Pria</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="j_kel" value="wanita" class="form-check-input">
                        <label for="wanita" class="form-check-label">Wanita</label>
                    </div>
                    <hr>
                    <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
                    <input type="reset" value="Hapus" name="reset" class="btn btn-danger">
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                    <tr>
                        <thead>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. Telepon</th>
                            <th scope="col">Password</th>
                            <th scope="col">Hobby</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">action</th>
                        </thead>
                    </tr>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</body>

</html>