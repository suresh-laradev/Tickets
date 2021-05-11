@extends('layouts.app')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <section class="col-lg-12 connectedSortable">
            <!-- TABLE: CUSTOMERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">CUSTOMERS LIST</h3>

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
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#customerModal">New Customer</a>
                </div>
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th> ID</th>
                      <th>Name</th>
                      <th>GSTN</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            {{-- <td><a href="pages/examples/invoice.html">OR9842</a></td> --}}
                            <td>{{ $customer->cus_id }}</td>
                            <td>{{ $customer->cus_name }}</td>
                            <td>{{ $customer->cus_gstn }}</td>
                            <td>{{ $customer->cus_phone }}</td>
                            <td>{{ $customer->cus_email }}</td>
                            <td>{{ $customer->cus_address }}</td>
                          </tr>
                        @endforeach
                        
                    </tbody>
                    
                  </table>
                </div>
                <div class="card-footer clearfix">
                  <div class="float-right">
                    {!! $customers->links() !!}
                  </div>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </section>
        </div>   
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->

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
                <form id="customerForm" action="{{ route('customers.store') }}">
                    @csrf 
                    @method('POST')
                    <div class="form-group">
                        <label for="cus_name">Customer Name</label>
                        <input type="text" 
                        name="cus_name"
                        id="cus_name" 
                        class="form-control">
                        @error('cus_name')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cus_gsnt">GSTN</label>
                        <input type="text" 
                        name="cus_gsnt"
                        id="cus_gstn" 
                        class="form-control">
                        @error('cus_gstn')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cus_phone">Phone</label>
                        <input type="text" 
                        name="cus_phone"
                        id="cus_phone" 
                        class="form-control">
                        @error('cus_phone')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cus_email">Email</label>
                        <input type="text" 
                        name="cus_email"
                        id="cus_email" 
                        class="form-control">
                        @error('cus_email')
                                <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cus_address">Address</label>
                        <input type="text" 
                        name="cus_address"
                        id="cus_address" 
                        class="form-control">
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
    {{-- Model ends --}}
  </div>
  <!-- /.content-wrapper -->
@endsection