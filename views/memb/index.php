  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">View All Members</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr style="">
                    <th>MEMBER ID</th>
                    <th>MEMBER NAMES</th>
                     <th>NATIONAL ID</th>
                    <th>DATE OF BIRTH</th>
                    <th>GENDER</th>
                     <th>LINKED_MSISDN</th>
                    <th>STATUS</th>
                     <th>SOURCE</th>
                     <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                     foreach ($this->memberList as $key => $value) {
        
                        echo '<tr>';
                        echo '<td>'. $value['member_id'] . '</td>';
                        echo '<td>'. $value['member_name'] . '</td>';
                        echo '<td>'. $value['member_nid'] . '</td>';
                        echo '<td>'. $value['member_dob'] . '</td>';
                        echo '<td>'. $value['member_gender'] . '</td>';
                        echo '<td>'. $value['linked_msisdn'] . '</td>';
                        echo '<td>'. $value['member_status'] . '</td>';
                         echo '<td>'. $value['source'] . '</td>';
                         echo '<td> <a class="fas fa-edit" href="'. URL . 'memb/edit/' . $value['member_id'] .'"></a> <a class="fas fa-asterisk" href="'. URL . 'memb/memberDash/' . $value['member_id'] .'"></a> </td>';
                                                    // echo '<td> <a class="delete" href="'. URL . 'note/delete/' . $value['noteid'] .'">Delete </a> </td>';
                         echo '</tr>';
                     }
                     ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>