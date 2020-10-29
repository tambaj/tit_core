<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Payments</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">View All Payment</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="">
                                                <th>TRANSACTION_DATE</th>
                                                <th>TRANSACTION ID</th>
                                                <th>MEMBER NAMES</th>
                                                <th>OFFER ID </th>
                                                <th>OFFER NAME</th>
                                                <th>TRANSACTION AMOUNT</th>
                                                <th>LINKED_MSISDN</th>
                                                <th>TRANSACTION STATUS</th>
                                                <th>LAST DATE UPDATED</th>
                                                <th>ACTIONS </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($this->paymentList as $key => $value) {
    	
    	                                            echo '<tr>';
    	                                            echo '<td>'. $value['transaction_date'] . '</td>';
    	                                            echo '<td>'. $value['transaction_id'] . '</td>';
                                                    echo '<td>'. $value['member_name'] . '</td>';
                                                    echo '<td>'. $value['offer_id'] . '</td>';
                                                    echo '<td>'. $value['offer_name'] . '</td>';
                                                    echo '<td>'. $value['transaction_amount'] . '</td>';
                                                    echo '<td>'. $value['linked_msisdn'] . '</td>';
                                                    echo '<td>'. $value['transaction_status'] . '</td>';
                                                    echo '<td>'. $value['lastupdated'] . '</td>';
                                                    echo '<td> <a class="fas fa-asterisk" href="'. URL . 'payment/singlePayment/' . $value['transaction_id'] .'"></a> </td>';
                                                    // echo '<td> <a class="delete" href="'. URL . 'note/delete/' . $value['noteid'] .'">Delete </a> </td>';
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
            </div>