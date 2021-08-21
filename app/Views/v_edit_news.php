<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-lg-6" style="float:none;margin:auto;">

        <form action="<?= base_url('edit_news') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                <input value="<?php echo $detail->penulis ?>" type="text" name="penulis" class="form-control">

            </div>
            <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Update</label>
            <input type="date" name="tanggal" class="form-control">
        </div> -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Content</label>
                <input value="<?php echo $detail->content_news ?>" type=" text" name="content" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <!-- <img src="<?= base_url('image/' . $detail->image)  ?>"> -->
                <div class="col-lg-6">

                    <input value="<?php echo $detail->image ?>" type="text" name="image" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Insert Data</button>
        </form>
    </div>
</body>

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">