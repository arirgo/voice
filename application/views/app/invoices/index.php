 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url()?>home">Home</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url()?>data/images">Data</a></div>
              <div class="breadcrumb-item">Print Invoice</div>
            </div>
          </div>

           <div class="section-body">

            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2>Invoice</h2>
                      <div class="invoice-number">Order #12345</div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Billed To:</strong><br>
                            Ujang Maman<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Bogor Barat, Indonesia
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Shipped To:</strong><br>
                          Muhamad Nauval Azhar<br>
                          1234 Main<br>
                          Apt. 4B<br>
                          Bogor Barat, Indonesia
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Payment Method:</strong><br>
                          Visa ending **** 4242<br>
                          ujang@maman.com
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Order Date:</strong><br>
                          September 19, 2018<br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">All items here cannot be deleted.</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="40">#</th>
                          <th>Item</th>
                          <th class="text-center">Price</th>
                          <th class="text-center">Quantity</th>
                          <th class="text-right">Totals</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Mouse Wireless</td>
                          <td class="text-center">$10.99</td>
                          <td class="text-center">1</td>
                          <td class="text-right">$10.99</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Keyboard Wireless</td>
                          <td class="text-center">$20.00</td>
                          <td class="text-center">3</td>
                          <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Headphone Blitz TDR-3000</td>
                          <td class="text-center">$600.00</td>
                          <td class="text-center">1</td>
                          <td class="text-right">$600.00</td>
                        </tr>
                      </table>
                    </div>
                    <div class="row mt-4">
                      <div class="col-lg-8">
                        <div class="section-title">Payment Method</div>
                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                        <div class="d-flex">
                          <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                          <div class="bg-paypal" data-width="61" data-height="38"></div>
                        </div>
                      </div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Subtotal</div>
                          <div class="invoice-detail-value">$670.99</div>
                        </div>
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Shipping</div>
                          <div class="invoice-detail-value">$15</div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Total</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
                  <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
                  <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                </div>
                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Basic DataTables</h4> <button class="btn btn-primary" id="swal-2">Launch</button>

                    <button class="btn btn-primary" id="modal-1">Launch Modal</button>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                            </td>
                            <td>2018-01-20</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                                <div class="progress-bar" data-width="0"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                              <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                              <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                            </td>
                            <td>2018-04-10</td>
                            <td><div class="badge badge-info">Todo</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                                <div class="progress-bar bg-warning" data-width="70%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                            </td>
                            <td>2018-01-29</td>
                            <td><div class="badge badge-warning">In Progress</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                <div class="progress-bar bg-success" data-width="100%"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                              <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                              <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                            </td>
                            <td>2018-01-16</td>
                            <td><div class="badge badge-success">Completed</div></td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>