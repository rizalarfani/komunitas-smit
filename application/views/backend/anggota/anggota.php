<h3 class="title m-3">Data Anggota</h3>
<div class="container">
    <!-- Untuk alert -->
    <?php if($this->session->flashdata('info')){ ?>
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('info'); ?>
        </div>
    <?php } ?>
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim anggota</th>
                                <th>Nama anggota</th>
                                <th>Email</th>
                                <th>Jenis Kelamin</th>
                                <th>Prodi</th>
                                <th>No Wa</th>
                                <th>Motivasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach($anggota as $dt) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $dt->nim ?></td>
                                <td><?php echo $dt->full_name ?></td>
                                <td><?php echo $dt->email ?></td>
                                <?php if($dt->jenis_kelamin == "l"): ?>
                                    <td><span class="badge badge-primary">Laki - Laki</span></td>
                                <?php else: ?>
                                    <td><span class="badge badge-info">Perempuan</span></td>
                                <?php endif; ?>
                                <td><?php echo $dt->prodi ?></td>
                                <td><?php echo $dt->no_wa ?></td>
                                <td><?php echo $dt->motivasi ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </div> 
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $("#menu-data").addClass("active");
        $("#collapseTwo").addClass("show");
        $("#anggota").addClass("active");

        $('#dataTable1').DataTable({
            'ScrollX' : true
        });
    });
    
</script>