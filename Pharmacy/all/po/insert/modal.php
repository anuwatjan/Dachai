  <!-- Portfolio Modal 2-->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body text-center pb-5">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-12">
                              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">รายการสินค้า</h2>
                              <div class="divider-custom">
                                  <div class="divider-custom-line"></div>
                                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                  <div class="divider-custom-line"></div>
                              </div>
                              <table class="table table-hover" id="table_id">
                                  <thead>
                                      <tr style="background-color:#1abc9c;" class="text-white">
                                          <th scope="col"></th>
                                          <th scope="col">Image Product</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Common</th>
                                          <th scope="col">Manager</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $i = 1;
                                        $qp = "SELECT * FROM view_product_detail ";
                                        $rp = mysqli_query($con, $qp);
                                        while ($rowp = mysqli_fetch_array($rp)) { ?>
                                          <tr>
                                              <th scope="row"><?php echo $i++ ?></th>
                                              <td class="col-2"><img src="..\Pharmacy\product\image\<?= $rowp['product_img']; ?>" width="100" height="100"></td>
                                              <td class="col-2"><?php echo  $rowp['product_name'] ?></td>
                                              <td class="col-2"><?php echo  $rowp['product_common'] ?></td>
                                              <td><a href='?page=<?= $_GET['page'] ?>&function=insert&product_id=<?php echo $rowp['product_id'] ?>&fuction=add'> เพิ่มลงใบสั่งซื้อ </a></td>
                                          </tr>
                                      <?php } ?>
                                  </tbody>
                              </table>
                              <button class="btn btn-primary" data-bs-dismiss="modal">
                                  <i class="fas fa-xmark fa-fw"></i>
                                  Close Window
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>