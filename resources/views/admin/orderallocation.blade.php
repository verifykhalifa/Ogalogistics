@extends('mobilelayouts.master')
@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Order Allocation For Drivers</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Home
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Order Allocation</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class="row">
                          
                          <div class="col-xxl-12 m-b-30">
                              <div class="card card-statistics dating-contant h-100 mb-0">
                                  <div class="card-header">
                                      <h4 class="card-title"></h4>
                                  </div>
                                  <div class="card-body pt-2 scrollbar scroll_dark" style="height: ">
                                      <div class="table-responsive">
                                          <table id="datatable-buttons" class="table table-striped">
                                              <thead>
                                                  <tr>
                                                      <th class="border-top-0">No.</th>
                                                      <th class="border-top-0">User Name</th>
                                                      <th class="border-top-0">Subject</th>
                                                      <th class="border-top-0">Status</th>
                                                      <th class="border-top-0">Date</th>
                                                      <th class="border-top-0">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody class="text-muted">
                                                  <tr>
                                                      <td>00001</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user">
                                                          </div>
                                                          <p>Adrian Demiandro</p>
                                                      </td>
                                                      <td>Support Lead</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-success-inverse">Completed</label>
                                                      </td>
                                                      <td>27/3/2018</td>
                                                      <td>
                                                          <div class="btn-group" role="group">
                                                              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  Assign Driver
                                                              </button>
                                                              <div class="dropdown-menu custom-dropdown p-4" aria-labelledby="btnGroupDrop1">
                                                                  <a class="dropdown-item" href="javascript:void(0)">Driver 1</a>
                                                                  <a class="dropdown-item" href="javascript:void(0)">Driver 2</a>
                                                              </div>
                                                          </div>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00002</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/02.jpg" alt="user2">
                                                          </div>
                                                          <p>Jenny Smithdro</p>
                                                      </td>
                                                      <td>Office Manager</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-danger-inverse">Cancelled</label>
                                                      </td>
                                                      <td>29/3/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00003</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/03.jpg" alt="user3">
                                                          </div>
                                                          <p>Brian Joedro</p>
                                                      </td>
                                                      <td>Sales Assistant</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-warning-inverse">Pending</label>
                                                      </td>
                                                      <td>01/04/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00004</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/04.jpg" alt="user4">
                                                          </div>
                                                          <p>Sandradro Garett</p>
                                                      </td>
                                                      <td>Integration Specialist</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-success-inverse">Completed</label>
                                                      </td>
                                                      <td>10/04/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00005</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/05.jpg" alt="user5">
                                                          </div>
                                                          <p>Garydro</p>
                                                      </td>
                                                      <td>Senior Javascript Developer</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-success-inverse">Completed</label>
                                                      </td>
                                                      <td>15/04/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00006</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/06.jpg" alt="user6">
                                                          </div>
                                                          <p>Andrew dro</p>
                                                      </td>
                                                      <td>Accountant</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-warning-inverse">Pending</label>
                                                      </td>
                                                      <td>22/04/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>00007</td>
                                                      <td>
                                                          <div class="bg-img">
                                                              <img class="img-fluid" src="assets/img/avtar/01.jpg" alt="user7">
                                                          </div>
                                                          <p>Stonedro</p>
                                                      </td>
                                                      <td>System Architect</td>
                                                      <td>
                                                          <label class="badge mb-0 badge-danger-inverse">Cancelled</label>
                                                      </td>
                                                      <td>27/04/2018</td>
                                                      <td>
                                                          <a href="javascript:void(0)" class="mr-2"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a>
                                                          <a href="javascript:void(0)"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"></i></a>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <!-- end container-fluid -->


@endsection