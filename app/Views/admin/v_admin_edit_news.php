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

        <div class="col-lg-6" style="float:none;margin:auto;">

            <form action="<?= base_url('admin_update_news/' . $id_news['id_news']) ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis</label>
                    <input value="<?php echo $id_news['penulis'] ?>" type="text" name="penulis" class="form-control">

                </div>
                <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Update</label>
            <input type="date" name="tanggal" class="form-control">
        </div> -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Content</label>
                    <input value="<?php echo $id_news['content_news'] ?>" type=" text" name="content" class="form-control">
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword1" class="form-label">Image</label> -->
                    <img src="<?= base_url('image/' . $id_news['image'])  ?>" width="100px" height="100px">
                    

                        <input value="<?php echo $id_news['image'] ?>" type="file" name="image" class="form-control">
                    
                </div>

                <button type="submit" class="btn btn-primary">Insert Data</button>
            </form>
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