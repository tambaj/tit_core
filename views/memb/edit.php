   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo URL; ?>memb">View Members</a></li>
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
                <h3 class="card-title">Edit Member Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="<?php echo URL;?>memb/editSave/<?php echo $this->memb[0]['member_id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Member Names</label>
                     <input type="text" class="form-control" placeholder="Member Names" name="member_name" value="<?php echo $this->memb[0]['member_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Member Naional Id</label>
                   <input type="text" class="form-control" placeholder="Member National Id" name="member_nid" value="<?php echo $this->memb[0]['member_nid'] ?>">
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Member Dob</label>
                    <input type="text" class="form-control" placeholder="Member Dob" name="member_dob" value="<?php echo $this->memb[0]['member_dob'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Member Gender</label>
                   <input type="text" class="form-control" placeholder="Member Gender" name="member_gender" value="<?php echo $this->memb[0]['member_gender'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telephone Number</label>
                  <input type="text" class="form-control" placeholder="Telephone Number" name="linked_msisdn" value="<?php echo $this->memb[0]['linked_msisdn'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Member Status</label>
                   <input type="text" class="form-control" placeholder="Member Status" name="member_status" value="<?php echo $this->memb[0]['member_status'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Active Pin:</label>
                   <input type="text" class="form-control" placeholder="Active Pin" name="active_pin" value="<?php echo $this->memb[0]['active_pin'] ?>">
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