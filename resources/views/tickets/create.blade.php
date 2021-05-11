@extends('layouts.app')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Creation</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Create Tickets</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-dark">
              <!-- card-header -->
              <div class="card-header">
                <h3 class="card-title">Create Ticket</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
              {{-- Ticket Creation Form --}}
              <form method="post" action="">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- radio for Import Export Division -->
                    <label for="serviceMode">
                      Service Mode
                    </label>
                    <div class="form-group">
                      <div class="form-check ">
                        <input class="form-check-input" 
                        type="radio" 
                        name="service_mode"
                        id="import" 
                        onclick="javascript:modeOfShipment();"
                        checked>
                        <label class="form-check-label">Import</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" 
                        type="radio" 
                        name="service_mode" 
                        id="export" 
                        onclick="javascript:modeOfShipment();">
                        <label class="form-check-label">Export</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" 
                        type="radio" 
                        name="service_mode"
                        id="division" 
                        onclick="javascript:modeOfShipment();">
                        <label class="form-check-label">Division</label>
                      </div>
                    </div>
                    @error('service_mode')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  <div class="col-sm-6" id="modeOfShipment" style="display: none">
                    <!-- radio for Import Export Division -->
                    <label for="checkboxPrimary1">
                      Mode of Shipment
                    </label>
                    <div class="form-group">
                      <div class="form-check ">
                        <input class="form-check-input" type="radio"
                        onclick="javascript:seaOptions();"
                        name="mode_of_shipment"
                        id="air" checked>
                        <label class="form-check-label">AIR</label>
                      </div>
                      <div class="form-check ">
                        <input class="form-check-input" type="radio"
                        onclick="javascript:seaOptions();"
                        name="mode_of_shipment" 
                        id="sea">
                        <label class="form-check-label">SEA</label>
                      </div>
                    </div>
                    @error('mode_of_shipment')
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                  </div>
                  {{-- Show Hide Sea Options based on input starts --}}
                  <div id="seaOptions" style="display: none">
                  <div class="col-sm-12">
                    <!-- SEA Options Checkbox -->
                    <label for="Sea Options">
                      Sea Options
                    </label>
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="20ft">
                        <label for="20ft">
                          20Ft
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="40ft">
                        <label for="40ft">
                        40Ft
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="lcl">
                        <label for="lcl">
                          LCL
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="others">
                        <label for="others">
                          others.
                        </label>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                {{-- Show Hide Sea Options based on input ends --}}
                <div class="row">
                  <div class="col-sm-6" id="typeOfShipment" style="display: none">                
                    <div class="form-group">
                      <label>Type of Shipment</label>
                      <select class="form-control" name="service_type[]">
                        <option>SEZ</option>
                        <option>EOU</option>
                        <option>STPI</option>
                        <option>DTA</option>
                      </select>
                      @error('service_type')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6" id="divisionModes" style="display: none">
                    <div class="form-group">
                      <label>Division</label>
                      <select class="form-control" name="division_type[]">
                        <option>IUT-IN</option>
                        <option>IUT-OUT</option>
                        <option>DTA SALE</option>
                        <option>DTA PROCUREMENT</option>
                        <option>DTA SERVICE INVOICE</option>
                        <option>INTRA SEZ</option>
                        <option>TRC</option>
                      </select>
                      @error('service_type')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                </div>
                {{-- Client Details Begins--}}
                <div><span class="font-weight-bold text-uppercase text-info ">Customer</span></div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Client Name</label>
                      <input type="text" class="form-control" placeholder="Enter client name">
                      <span><a href="#" data-toggle="modal" data-target="#customerModal"><i class="fa fa-plus mx-2"></i>Add Client</a></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>GSTN</label>
                      <input type="text" class="form-control" placeholder="GSTN" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" placeholder="Email Address." disabled>
                    </div> 
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="text" class="form-control" placeholder="Contact Number" disabled>
                    </div>
                  </div>
                </div>
                {{-- Client Details Ends--}}

                {{-- Supplier Details Begins--}}
                <div><span class="font-weight-bold text-uppercase text-info ">Supplier</span></div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Supplier Name</label>
                      <input type="text" class="form-control" placeholder="Enter client name">
                      <span><a href="#" data-toggle="modal" data-target="#supplierModal"><i class="fa fa-plus mx-2"></i>Add Supplier</a></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>GSTN</label>
                      <input type="text" class="form-control" placeholder="GSTN" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Email Address</label>
                      <input type="text" class="form-control" placeholder="Email Address." disabled>
                    </div> 
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="text" class="form-control" placeholder="Contact Number" disabled>
                    </div>
                  </div>
                </div>
                {{-- Supplier Details Ends--}}

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>File Upload:</label>
                      <input type="file" class="form-control" name="upload" id="upload" />
                    </div>
                  </div>
                  {{-- Doc Received Starts --}}
                  <div class="col-sm-6"> 
                    <div class="form-group">
                      <label>Document Received Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                  </div>
                  {{-- Doc Received Ends --}}
                </div>
                <!-- /.row -->
                <!-- comments row -->
                <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Comments</label>
                      <textarea class="form-control" rows="3" placeholder="Enter your comments"></textarea>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="checkbox" id="email_notify">
                      <label for="email_notify">
                        Notify
                      </label>
                    </div>
                  </div>
                </div>
                <!-- comments row ends-->
              </form>
            </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.Col -->
      <section class="col-lg-6 connectedSortable">
        <!-- TABLE: LATEST TICKETS -->
        <div class="card card-success">
          <div class="card-header border-transparent">
            <h3 class="card-title">Latest Tickets</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
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
                  <th>Ticket ID</th>
                  <th>Service Mode</th>
                  <th>Mode of Shipment</th>
                  <th>Doc Received Date</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($tickets as $ticket)
                  <tr>
                    <td><a href="">{{ $ticket->ticket_id }}</a></td>
                    <td><span class="text-uppercase font-weight-bold">{{ $ticket->service_mode }}</span></td>
                    <td><span class="badge badge-success">{{ $ticket->mode_of_shipment == 1?'SEA' : 'AIR' }}</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $ticket->date_of_doc_rec }}</div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.col -->
      </div>
    </div>
  </div>
      <!-- /.container-fluid -->
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

  <!-- Model -->
  <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD CUSTOMER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/customers"  method="POST">
                @csrf
                <div class="form -group">
                    <label for="cus_name">Customer Name</label>
                    <input type="text" id="cus_name" class="form-control">
                    @error('cus_name')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cus_gsnt">GSTN</label>
                    <input type="text" id="cus_gstn" class="form-control">
                    @error('cus_gstn')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cus_phone">Phone</label>
                    <input type="text" id="cus_phone" class="form-control">
                    @error('cus_phone')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cus_email">Email</label>
                    <input type="text" id="cus_email" class="form-control">
                    @error('cus_email')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cus_address">Address</label>
                    <input type="text" id="cus_address" class="form-control">
                    @error('cus_address')
                            <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
    </div>
</div>



<div class="modal fade" id="supplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">ADD SUPPLIER</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
          <form action="{{ route('suppliers.store') }}"  method="post">
              @csrf
              <div class="form-group">
                  <label for="sup_name">Supplier Name</label>
                  <input type="text" id="sup_name" class="form-control">
                  @error('sup_name')
                          <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="sup_gsnt">GSTN</label>
                  <input type="text" id="sup_gstn" class="form-control">
                  @error('sup_gstn')
                          <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="sup_phone">Phone</label>
                  <input type="text" id="sup_phone" class="form-control">
                  @error('sup_phone')
                          <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="sup_email">Email</label>
                  <input type="text" id="sup_email" class="form-control">
                  @error('sup_email')
                          <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="sup_address">Address</label>
                  <input type="text" id="sup_address" class="form-control">
                  @error('sup_address')
                          <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
              <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
      </div>
  </div>
  </div>
</div>
{{-- Model ends --}}
@endsection

@push('scripts')
<script>
  

  function modeOfShipment(){
    if(document.getElementById('import').checked || document.getElementById('export').checked){
      document.getElementById('modeOfShipment').style.display = "block";
      document.getElementById('divisionModes').style.display = "none";
    }else{
      document.getElementById('modeOfShipment').style.display = "none"
      document.getElementById("seaOptions").style.display = "none";
      document.getElementById('divisionModes').style.display = "block";
      document.getElementById('typeOfShipment').style.display = "none";
    }
  }

  function seaOptions() {
      if (document.getElementById("sea").checked) {
          document.getElementById("seaOptions").style.display = "block";
          document.getElementById('typeOfShipment').style.display = "block";
      } else{
          document.getElementById("seaOptions").style.display = "none";
          document.getElementById('typeOfShipment').style.display = "block";
      }
    }
  
</script>

@endpush