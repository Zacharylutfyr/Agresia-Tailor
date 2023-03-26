@extends('layouts.admin.adminapp')

@section('styles')
<link rel="stylesheet" href="{{ url('admin/css/sb-admin-2.css') }}">
@endsection

@section('title')
    Table Collections
@endsection


@section('content')
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <a href="" class="btn btn-success mb-3">Add Data <i class="fa fa-database"></i>
            </a>
        </div>
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>$372,000</td>
                            <td>
                                <a href="" type="button" class="btn btn-warning btn-sm" style="color: white;">Detail
                                <br><i class="fa fa-info-circle" aria-hidden="true"></i>
                               </a>
                                <a href=""
                                type="button" class="btn btn-primary btn-sm">Edit
                                <br><i class="fa fa-pen" aria-hidden="true"></i></a>
                                <a href="" 
                                type="button" class="btn btn-danger btn-sm">Delete
                                <br><i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
    
                        </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection




