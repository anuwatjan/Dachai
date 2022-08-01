
<div class="card">
               <div class="card-body">
                    <div class="row">
                         <div class="col-lg-6 col-xl-12">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_name" value="<?php echo $row['product_barcode'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_name">Barcode</label>
                              </div>
                         </div>
                    </div>

                    <div class="row">

                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_name" value="<?php echo $row['product_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_name">ชื่อสินค้า</label>
                              </div>
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_common" value="<?php echo $row['product_common'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_common">ชื่อสามัญของสินค้า(ถ้ามี)</label>
                              </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3 text-center">
                                   <img src="..\Pharmacy\product\image\<?= $row['product_img']; ?>" class="w3-round" width="200" height="200">
                              </div>
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_name" value="<?php echo $row['type_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_name">ประเภทสินค้า</label>
                              </div>

                         </div>
                    </div>

                    <div class="row">

                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_common" value="<?php echo $row['category_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_common">หมวดหมู่ของสินค้า</label>
                              </div>
                         </div>
                         <div class="col-lg-6 col-xl-6">
                              <div class="form-floating mb-3">
                                   <input class="form-control" id="product_name" value="<?php echo $row['symp_name'] ?>" type="text" placeholder="Enter your name..." data-sb-validations="required" required readonly />
                                   <label for="product_name">หมวดหมู่แยกตามอาการ</label>
                              </div>
                         </div>
                    </div>
               </div>
          </div>