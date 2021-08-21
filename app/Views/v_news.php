<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <a href="<?= base_url('insert_news') ?>" class="btn btn-primary">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tgl. News</th>
                    <th scope="col">Content</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($item as $key => $a) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?php echo $a->penulis ?></td>
                        <td><?php echo $a->tgl_news ?></td>
                        <td><?php echo $a->content_news ?></td>
                        <td><img src="<?= base_url('image/' . $a->image)  ?>" width="60px"></td>
                        <td class="text-center">
                            <a href="<?= base_url('detail_news/' . $a->id_news) ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= base_url('delete_news/' . $a->id_news) ?>" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>