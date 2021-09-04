    <?php echo view('admin/v_head') ?>
    <?php echo view('admin/v_header') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <div class="container">
            <a href="<?= base_url('news_add') ?>" class="btn btn-primary">Tambah Data</a>
            <table id="example1" class="table table-striped table-bordered" style="width:100%">
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
                                <a href="<?= base_url('admin_detail_news/' . $a->id_news) ?>" class="btn btn-primary">Edit</a>
                                <a href="<?= base_url('admin_delete_news/' . $a->id_news) ?>" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "../server_side/scripts/server_processing.php"
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <?php echo view('admin/v_footer') ?>