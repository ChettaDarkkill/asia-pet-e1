        <?php $a =  base_url(); ?>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข่าวสาร <small>จัดการข่าวสารของคลินิก</small>
                        </h1>
                    </div>
                </div>
                 <a href = "<?php echo $a.'index.php/News/News/addNews/'; ?>" class="btn btn-sm btn-info">เพิ่มข่าวสาร</a><br/><br/>
              <table id="example" class="display" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>ลำดับ</th>
                              <th>หัวข้อข่าว</th>
                              <th>สถานะ</th>
                              <th>จัดการ</th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>ลำดับ</th>
                              <th>หัวข้อข่าว</th>
                              <th>สถานะ</th>
                              <th>จัดการ</th>
                          </tr>
                      </tfoot>
                      <tbody>
                      <?php
                        if(count($data) > 0 ) {
                        $count = 0;
                        foreach ($data as $key => $value) {
                        $count ++ ;
                      ?>
                      <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $value['title']; ?></td>
                            <td>
                                <?php if($value['flag'] == 1) { ?>
                                  <span class="label label-success">ใช้งาน</span>
                                <?php } else { ?>
                                  <span class="label label-danger">ไม่ใช้งาน</span>
                                <?php }?>
                            </td>
                            <td>
                                <a href = "<?php echo $a.'index.php/News/News/editNews/'.$value['id']; ?>" class="btn btn-sm btn-success">แก้ไข</a>
                                <a href = "<?php echo $a.'index.php/News/News/deleteNews/'.$value['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('คุณต้องการที่จะลบหรือไม่');">ลบ</a>
                            </td>
                      </tr>
                      <?php } } ?>
                      </tbody>
              </table>
            </div>
            <!-- /.container-fluid -->

        </div>
<script src="<?php echo $a; ?>assets/admin/js/jquery.js"></script>
<script>

    /* API method to get paging information */
    'use strict';
  var $ = jQuery;
  $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
       
            $('#example').DataTable( {
                "paging":   true,
                "ordering": true,
                "info":     false
            } );
  });
</script>
<style>
@import  url('https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css');
table.dataTable {
    width: 100%;
    margin: 0 auto;
    clear: both;
    border-collapse: separate;
    border-spacing: 0;
    color: black;
}
header .container {
    padding-top: 130px!important;
    padding-bottom: 250px;
}
</style>