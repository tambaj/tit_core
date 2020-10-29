 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member Dash</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members Dash Details</li>
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
                                <h5 class="card-title">Personal Info</h5>
                                <div class="row">
                                    <div class="col-4">
                                        <label class="card-title">Member Names:</label>
                                        <h6><?php echo $this->memberDash[0]['member_name'] ?></h6>
                                    </div>
                                    <div class="col-4">
                                        <label>Telephone Number:</label>
                                        <h6><?php echo $this->memberDash[0]['linked_msisdn'] ?></h6>
                                    </div>
                                    <div class="col-4">
                                        <label>Member Status:</label>
                                        <h6><?php echo $this->memberDash[0]['member_status'] ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Offers</h3>

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
                        foreach ($this->offerDash as $key => $value) {
        
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
                <h3 class="card-title">Payments</h3>

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
                                                foreach ($this->paymentDash as $key => $value) {
        
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