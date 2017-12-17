        <?php $a =  base_url(); ?>
        <div class="col-md-3">
            <nav class="menu" id="cssmenu">
                    <ul>
                        <li><a href='<?php echo $a; ?>index.php/Dashboard/Dashboard'>หน้าหลัก</a></li>
                        <li <?php echo $this->uri->segment(3) == "get_appointment" ? "class = 'active'" : '';?>><a href='<?php echo $a; ?>index.php/Customer/Customer/get_appointment'>ตรวจสอบการนัดหมาย</a></li>
                        <li <?php echo $this->uri->segment(3) == "get_customer_info" ? "class = 'active'" : '';?> ><a href = '<?php echo $a; ?>index.php/Customer/Customer/get_customer_info'>แก้ไขและจัดการข้อมูลส่วนตัว</a></li> 
<!--                         <li <?php echo $this->uri->segment(3) == "get_appointment_advance" ? "class = 'active'" : '';?>><a href='<?php echo $a; ?>index.php/Customer/Customer/get_appointment_advance'>ขอนัดหมายการเข้ารับบริการล่วงหน้า</a></li> -->
                        <li <?php echo $this->uri->segment(3) == "see_appointment" ? "class = 'active'" : '';?>><a href='<?php echo $a; ?>index.php/Customer/Customer/see_appointment'>ปริ้นใบนัด</a></li> 
<!--                         <li <?php echo $this->uri->segment(3) == "edit_appointment" || $this->uri->segment(3) == "editAppoint"  ? "class = 'active'" : '';?>><a href='<?php echo $a; ?>index.php/Customer/Customer/edit_appointment'>เปลี่ยนแปลง เวลา การนัดหมายล่วงหน้า</a></li> -->
                        <li <?php echo $this->uri->segment(3) == "get_news" || $this->uri->segment(3) == "get_news_detail" ? "class = 'active'" : '';?>><a href='<?php echo $a; ?>index.php/Customer/Customer/get_news'>ข้อมูลข่าวสารประชาสัมพันธ์ของคลินิก</a></li> 
                    </ul>
             </nav>
        </div>


        <style>
            #cssmenu {
              padding: 0;
              margin: 0;
              border: 0;
              line-height: 1;
            }
            #cssmenu ul,
            #cssmenu ul li,
            #cssmenu ul ul {
              list-style: none;
              margin: 0;
              padding: 0;
            }
            #cssmenu ul {
              position: relative;
              z-index: 597;
              float: left;
            }
            #cssmenu ul li {
              float: left;
              min-height: 1px;
              line-height: 1em;
              vertical-align: middle;
              position: relative;
            }
            #cssmenu ul li.hover,
            #cssmenu ul li:hover {
              position: relative;
              z-index: 599;
              cursor: default;
            }
            #cssmenu ul ul {
              visibility: hidden;
              position: absolute;
              top: 100%;
              left: 0px;
              z-index: 598;
              width: 100%;
            }
            #cssmenu ul ul li {
              float: none;
            }
            #cssmenu ul ul ul {
              top: -2px;
              right: 0;
            }
            #cssmenu ul li:hover > ul {
              visibility: visible;
            }
            #cssmenu ul ul {
              top: 1px;
              left: 99%;
            }
            #cssmenu ul li {
              float: none;
            }
            #cssmenu ul ul {
              margin-top: 1px;
            }
            #cssmenu ul ul li {
              font-weight: normal;
            }
            /* Custom CSS Styles */
            #cssmenu {
              width: 235px;
              background: #373A47;
              zoom: 1;
              font-size: 12px;
            }
            #cssmenu:before {
              content: '';
              display: block;
            }
            #cssmenu:after {
              content: '';
              display: table;
              clear: both;
            }
            #cssmenu a {
              display: block;
              padding: 15px 20px;
              color: #ffffff;
              text-decoration: none;
              text-transform: uppercase;
            }
            #cssmenu > ul {
              width: 248px;
            }
            #cssmenu ul ul {
              width: 220px;
            }
            #cssmenu > ul > li > a {
              border-right: 0px solid #1b9bff;
              color: #ffffff;
            }
            #cssmenu > ul > li > a:hover {
              color: #ffffff;
            }
            #cssmenu > ul > li.active a {
              background: #29ABE1;
            }
            #cssmenu > ul > li a:hover,
            #cssmenu > ul > li:hover a {
              background: #29ABE1;
            }
            #cssmenu li {
              position: relative;
            }
            #cssmenu ul li.has-sub > a:after {
              content: '+';
              position: absolute;
              top: 50%;
              right: 15px;
              margin-top: -6px;
            }
            #cssmenu ul ul li.first {
              -webkit-border-radius: 0 3px 0 0;
              -moz-border-radius: 0 3px 0 0;
              border-radius: 0 3px 0 0;
            }
            #cssmenu ul ul li.last {
              -webkit-border-radius: 0 0 3px 0;
              -moz-border-radius: 0 0 3px 0;
              border-radius: 0 0 3px 0;
              border-bottom: 0;
            }
            #cssmenu ul ul {
              -webkit-border-radius: 0 3px 3px 0;
              -moz-border-radius: 0 3px 3px 0;
              border-radius: 0 3px 3px 0;
            }
            #cssmenu ul ul {
              border: 1px solid #0082e7;
            }
            #cssmenu ul ul a {
              font-size: 12px;
              color: #ffffff;
            }
            #cssmenu ul ul a:hover {
              color: #ffffff;
            }
            #cssmenu ul ul li {
              border-bottom: 1px solid #0082e7;
            }
            #cssmenu ul ul li:hover > a {
              background: #29ABE1;
              color: #ffffff;
            }
            #cssmenu.align-right > ul > li > a {
              border-left: 4px solid #29ABE1;
              border-right: none;
            }
            #cssmenu.align-right {
              float: right;
            }
            #cssmenu.align-right li {
              text-align: right;
            }
            #cssmenu.align-right ul li.has-sub > a:before {
              content: '+';
              position: absolute;
              top: 50%;
              left: 15px;
              margin-top: -6px;
            }
            #cssmenu.align-right ul li.has-sub > a:after {
              content: none;
            }
            #cssmenu.align-right ul ul {
              visibility: hidden;
              position: absolute;
              top: 0;
              left: -100%;
              z-index: 598;
              width: 100%;
            }
            #cssmenu.align-right ul ul li.first {
              -webkit-border-radius: 3px 0 0 0;
              -moz-border-radius: 3px 0 0 0;
              border-radius: 3px 0 0 0;
            }
            #cssmenu.align-right ul ul li.last {
              -webkit-border-radius: 0 0 0 3px;
              -moz-border-radius: 0 0 0 3px;
              border-radius: 0 0 0 3px;
            }
            #cssmenu.align-right ul ul {
              -webkit-border-radius: 3px 0 0 3px;
              -moz-border-radius: 3px 0 0 3px;
              border-radius: 3px 0 0 3px;
            }
        </style>