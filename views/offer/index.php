<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Offers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo URL; ?>offer/formcreate">CREATE AN OFFER</a></li>
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
                     <h5 class="card-title">View All Offers</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="">
                                                <th>OFFER #</th>
                                                <th>OFFER_NAME</th>
                                                <th>MINIMUN_UNITS</th>
                                                <th>MAXIMUM_UNITS</th>
                                                <th>OFFER UNITY PRICE</th>
                                                <th>OFFER TARGET</th>
                                                <th>UNITS OFFERED</th>
                                                <th>SUBSCRIPTION START DATE</th>
                                                <th>UNITS SUBSCRIBED</th>
                                                <th>UNITS BALANCE</th>
                                                <th>AMOUNT SUBSCRIBED</th>
                                                <th>SUBSCRIPTION END DATE</th>
                                                <th>OFFER STATUS</th>
                                                <th>ACTIONS </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($this->offerList as $key => $value) {
        
                                                    echo '<tr>';
                                                    echo '<td>'. $value['offer_id'] . '</td>';
                                                    echo '<td>'. $value['offer_name'] . '</td>';
                                                    echo '<td>'. $value['min_units'] . '</td>';
                                                    echo '<td>'. $value['max_units'] . '</td>';
                                                    echo '<td>'. $value['offer_unit_price'] . '</td>';
                                                    echo '<td>'. $value['offer_target'] . '</td>';
                                                    echo '<td>'. $value['units_offered'] . '</td>';
                                                    echo '<td>'. $value['subscription_start_date'] . '</td>';
                                                    echo '<td>'. $value['units_subscribed'] . '</td>';
                                                    echo '<td>'. $value['units_balance'] . '</td>';
                                                    echo '<td>'. $value['amount_subscribed'] . '</td>';
                                                    echo '<td>'. $value['subscription_end_date'] . '</td>';
                                                    echo '<td>'. $value['offer_status'] . '</td>';
                                                    echo '<td> <a class="fas fa-edit" href="'. URL . 'offer/edit/' . $value['offer_id'] .'"></a> <a class="fas fa-asterisk" href="'. URL . 'offer/singleOffer/' . $value['offer_id'] .'"></a> </td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>