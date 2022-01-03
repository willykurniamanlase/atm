<p></p>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content" data-url="<?= base_url('editmobil') ?>">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="float-left">
                    <p></p>
                    <div class="row no-gutters align-items-center">
                        <h3> Form Edit Mobil</h3>
                    </div>
                </div>
            </div>
            <hr>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php elseif ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('error') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif ?>


            <div class="row">
                <!-- Pending Requests Card Example -->
                <!-- Small boxes (Stat box) -->

                <div class="col-lg-3 col-6">
                    <form action="<?= base_url('Mobil/fungsiEdit/' . $query->id) ?>" method="post">
                        <!--Form edit Mobil-->
                        <div class="form-group">
                            <label>Kode Mobil</label>
                            <input type="text" name="id" class="form-control" value="<?= $query->id ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" name="namamobil" class="form-control" value="<?= $query->namamobil ?>">
                        </div>
                        <div class="form-group">
                            <label>Plat nomor Mobil</label>
                            <input type="text" name="platnomor" class="form-control" value="<?= $query->platnomor ?>">
                        </div>
                        <div class="form-group">
                            <label>Seri Mobil</label>
                            <input type="text" name="serimobil" class="form-control" value="<?= $query->serimobil ?>">
                        </div>
                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <input type="text" name="warnamobil" class="form-control" value="<?= $query->warnamobil ?>">
                        </div>
                        <div class="form-group">
                            <label>status Mobil</label>
                            <input type="text" name="statusmobil" class="form-control" value="<?= $query->statusmobil ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>



            </div>


        </div>

    </div>




</div>