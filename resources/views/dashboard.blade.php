@extends("layouts.app")

@section("title","Dashboard")

@section("contents")
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Pemasukkan Bulanan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.4.000.000</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Pemasukkan Harian</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 100.000</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tugas
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                          </div>
                          <div class="col">
                              <div class="progress progress-sm mr-2">
                                  <div class="progress-bar bg-info" role="progressbar"
                                      style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                      aria-valuemax="100"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Content Row -->
<div class="row">

</div>

<!-- Content Row -->
<div class="row">

  <!-- Content Column -->
  <div class="col-lg-6 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">Migrasi Penjualan <span
                      class="float-right">20%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Target Penjualan <span
                      class="float-right">75%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Data Pengunjung <span
                      class="float-right">60%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Detail Dana Keluar<span
                      class="float-right">30%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 30%"
                      aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Akun Setup <span
                      class="float-right">Complete!</span></h4>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection