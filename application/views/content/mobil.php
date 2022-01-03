<p></p>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content" data-url="<?= base_url('mobil') ?>">
        <div class="container-fluid">
            <div class="clearfix">
                <div class="float-left">
                    <p></p>
                    <div class="row no-gutters align-items-center">
                        <h3>Mobil</h3>
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

            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa=plus"></i>
                tambah data </button>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama mobil</th>
                            <th scope="col">plat mobil</th>
                            <th scope="col">seri mobil</th>
                            <th scope="col">warna mobil</th>
                            <th scope="col">status mobil</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($queryData as $row) : $count = 0 ?>
                            <td><?= $count++ ?></td>
                            <td><?= $row->id ?></td>
                            <td><?= $row->namamobil ?></td>
                            <td><?= $row->platnomor ?></td>
                            <td><?= $row->serimobil ?></td>
                            <td><?= $row->warnamobil ?></td>
                            <td><?= $row->statusmobil ?></td>
                            <td><a href="<?= base_url('Mobil/fungsiDelete') ?>/<?php echo $row->id ?>">Delete</a></td>
                            </td>
                            <td>
                                <a href="<?= base_url('Mobil/EditMobil/' . $row->id) ?>">Edit</a>
                            </td>
                        <?php endforeach ?>

                    </tbody>
                </table>

            </div>


            <!-- Modal -->
            <!-- button tambah data mobil -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Input Data Mobil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= base_url('Mobil/saveData') ?>">
                                <!--Form Inpu Mobil-->
                                <div class="form-group">
                                    <label>Kode Mobil</label>
                                    <input type="text" name="id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text" name="namamobil" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Plat nomor Mobil</label>
                                    <input type="text" name="platnomor" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Seri Mobil</label>
                                    <input type="text" name="serimobil" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Warna Mobil</label>
                                    <input type="text" name="warnamobil" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>status Mobil</label>
                                    <input type="text" name="statusmobil" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">reset</button>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>




</div>