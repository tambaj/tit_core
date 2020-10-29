 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Offer Dash</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Offer Dash Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Offer Info</h5>
                                <div class="row">
                                    <div class="col-2">
                                        <label class="card-title">Offer #:</label>
                                        <h6><?php echo $this->singleOffer[0]['offer_id'] ?></h6>
                                    </div>
                                    <div class="col-2">
                                        <label>Offer Name:</label>
                                        <h6><?php echo $this->singleOffer[0]['offer_name'] ?></h6>
                                    </div>
                                    <div class="col-2">
                                        <label>Min_Units:</label>
                                        <h6><?php echo $this->singleOffer[0]['min_units'] ?></h6>
                                    </div>
                                    <div class="col-2">
                                        <label>Max_Units:</label>
                                        <h6><?php echo $this->singleOffer[0]['max_units'] ?></h6>
                                    </div>
                                    <div class="col-2">
                                        <label>Units Price :</label>
                                        <h6><?php echo $this->singleOffer[0]['offer_unit_price'] ?></h6>
                                    </div>
                                    <div class="col-2">
                                        <label>Offer Target:</label>
                                        <h6><?php echo $this->singleOffer[0]['offer_target'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Subscribed</span>
                <span class="info-box-number">
                  <?php echo $this->countSubscription[0]['subscription_id'] ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Payment Recorded</span>
                <span class="info-box-number"> <?php echo $this->countPaying[0]['transaction_id'] ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Amount Paid</span>
                <span class="info-box-number"><?php echo $this->sumPaying[0]['transaction_amount'] ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
            </div>
          </div> -->
          <!-- /.col -->
        </div>
                <div class="row">
                    <div class="col-6">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Offers Subscriptions</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>OFFER #</th>
                        <th>UNITS SUBSCRIBED</th>
                        <th>AMOUNT SUBSCRIBED</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                         <?php 
                        foreach ($this->singleSubscription as $key => $value) {
        
                             echo '<tr>';
                             echo '<td>'. $value['subscription_id'] . '</td>';
                             echo '<td>'. $value['units_subscribed'] . '</td>';
                            echo '<td>'. $value['amount_subscribed'] . '</td>';
                             echo '<td>'. $value['subscription_status'] . '</td>';
                                                    // echo '<td> <a class="fas fa-asterisk" href="'. URL . 'payment/memberDash/' . $value['member_id'] .'"></a> </td>';
                                                    // echo '<td> <a class="delete" href="'. URL . 'note/delete/' . $value['noteid'] .'">Delete </a> </td>';
                              echo '</tr>';
                         }
                         ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-right">View All Offers</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
            </div>
                     <div class="col-6">
                        <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Payments Transactions</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                     <th>TRANSACTION #</th>
                                                <th>TRANSACTION DATE</th>
                                                <th>TRANSACTION AMOUNT</th>
                                                <th>TRANSACTION STATUS</th>
                    </tr>
                    </thead>
                    <tbody>
                          <?php 
                             foreach ($this->singlePay as $key => $value) {
        
                                  echo '<tr>';
                                     echo '<td>'. $value['transaction_id'] . '</td>';
                                        echo '<td>'. $value['transaction_date'] . '</td>';
                                         echo '<td>'. $value['transaction_amount'] . '</td>';
                                        echo '<td>'. $value['transaction_status'] . '</td>';
                                                    // echo '<td> <a class="fas fa-asterisk" href="'. URL . 'payment/memberDash/' . $value['member_id'] .'"></a> </td>';
                                                    // echo '<td> <a class="delete" href="'. URL . 'note/delete/' . $value['noteid'] .'">Delete </a> </td>';
                                         echo '</tr>';
                                        }
                             ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a> -->
                <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info float-right">View All Payments</a> -->
              </div>
              <!-- /.card-footer -->
            </div>
                    </div>
                </div>
            </section>