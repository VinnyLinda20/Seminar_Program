<section class="content">

<div class="row" style="margin-bottom:5px;">


    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($conn, "select * from data_anggota order by id desc");
                $total = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total"; ?></span>
                Total Anggota
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($conn, "select * from data_buku order by id desc");
                $total1 = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total1"; ?></span>
                Total Buku
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-blue"><i class="fa fa-user"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($conn, "select * from admin order by user_id desc");
                $total2 = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total2"; ?></span>
                Total Admin
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="sm-st clearfix">
            <span class="sm-st-icon st-green"><i class="fa fa-group"></i></span>
            <div class="sm-st-info">
                <?php $tampil = mysqli_query($conn, "select * from pengunjung order by id desc");
                $total3 = mysqli_num_rows($tampil);
                ?>
                <span><?php echo "$total3"; ?></span>
                Total Pengunjung
            </div>
        </div>
    </div>
</div>
