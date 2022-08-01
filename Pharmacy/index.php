<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'conn.php'; ?>
<?php include './include/head.php'; ?>

<body id="page-top">
  <?php include './include/nav.php'; ?>
  <section class="page-section portfolio " id="portfolio">


    <?php
    if (!isset($_GET['page']) && empty($_GET['page'])) {
      // include('product/index.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'product') {
      if (isset($_GET['function']) && $_GET['function'] == 'insert') {
        include('product/insert/insert.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'list') {
        include('product/list.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'detail') {
        include('product/detail.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/update/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'delete') {
        include('product/delete.php');
      } else {
        include('product/index.php');
      }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'type') {
      if (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/type/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'delete') {
        include('product/type/delete.php');
      } else {

        include('product/type/index.php');
      }
      
    } elseif (isset($_GET['page']) && $_GET['page'] == 'price') {
      if (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/price/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'delete') {
        include('product/price/delete.php');
      } else {
        include('product/price/index.php');
      }

    } elseif (isset($_GET['page']) && $_GET['page'] == 'symp') {
      if (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/symp/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'delete') {
        include('product/symp/delete.php');
      } else {
        include('product/symp/index.php');
      }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'cate') {
      if (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/cate/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'delete') {
        include('product/cate/delete.php');
      } else {
        include('product/cate/index.php');
      }
      
    } elseif (isset($_GET['page']) && $_GET['page'] == 'barcode') {
      if (isset($_GET['function']) && $_GET['function'] == 'update') {
        include('product/barcode/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'insert') {
        include('product/barcode/insert.php');
      } else {

        include('product/barcode/index.php');
      }

    } elseif (isset($_GET['page']) && $_GET['page'] == 'all') {
      if (isset($_GET['function']) && $_GET['function'] == 'po') {
        include('all/po/index.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'insert') {
        include('all/po/insert/index.php');
      } else {
        include('all/index.php');
      }
      

    } elseif (isset($_GET['page']) && $_GET['page'] == 'member') {
      if (isset($_GET['function']) && $_GET['function'] == 'partner') {
        include('member/partner/index.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'updatep') {
        include('member/partner/update/update.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'insertp') {
        include('member/partner/insertp.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'deletep') {
        include('member/partner/deletep.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'customer') {
        include('member/customer/index.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'insertc') {
        include('member/customer/insertc.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'deletec') {
        include('member/customer/deletec.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'updatec') {
        include('member/customer/update/update.php');
      } else {
        include('member/index.php');
      }

    } elseif (isset($_GET['page']) && $_GET['page'] == 'report') {
      if (isset($_GET['function']) && $_GET['function'] == 'rptcus') {
        include('report/rptcus/index.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'rpt') {
        include('report/rptcus/rpt.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'customer') {
        include('report/customer/index.php');
      } elseif (isset($_GET['function']) && $_GET['function'] == 'insertc') {
        include('report/customer/insertc.php');
      } else {
        include('report/index.php');
      }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'confirm') {
      include('all/po/insert/confirm.php');
    }
    ?>
  </section>
  <?php include './include/script.php'; ?>
</body>

</html>