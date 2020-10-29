   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create An Offer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo URL; ?>offer">VIEW OFFERS</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <section class="content">
                <div class="row">
                	<div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Offers Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo URL;?>offer/create/">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Offer Name</label>
                     <input type="text" class="form-control" placeholder="Offer Name" name="offer_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Minimun Units</label>
                   <input type="text" class="form-control" placeholder="Minimum Units" name="min_units">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Maximun Units</label>
                    <input type="text" class="form-control" placeholder="Maximum Units" name="max_units">                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Offer Units Price</label>
                   <input type="text" class="form-control" placeholder="Offer unit Price" name="offer_unit_price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Offer Target</label>
                  <input type="text" class="form-control" placeholder="Offer Target" name="offer_target">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Units Offered</label>
                   <input type="text" class="form-control" placeholder="Units Offered" name="units_offered">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subscription Start Date:</label>
                   <input type="date" class="form-control" placeholder="Subscription Start Date" name="subscription_start_date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Units Subscribed</label>
                   <input type="text" class="form-control" placeholder="Units Subscribed" name="units_subscribed">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Units Balance</label>
                    <input type="text" class="form-control" placeholder="Units Balance" name="units_balance">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amounts Subscribed</label>
                   <input type="text" class="form-control" placeholder="Amount Subscribed" name="amount_subscribed">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subscription End Date</label>
                   <input type="date" class="form-control" placeholder="Subscription end date" name="subscription_end_date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Offer Status</label>
                  <select class="form-control" name="offer_status">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </section>