<?php
include 'php/retrive_functions.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Dashboard - Brand</title>
    <link
      rel="stylesheet"
      href="assets/bootstrap/css/bootstrap.min.css?h=7470da02bba8729c43e35acfdde99166"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="assets/css/styles.min.css?h=0fbbc7d0014a32c8ee9e7ebb7cc8df7a"
    />
  </head>
  <body id="page-top">
    <div id="wrapper">
      <nav
        class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
      >
        <div class="container-fluid d-flex flex-column p-0">
          <a
            class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
            href="#"
            ><div class="sidebar-brand-text mx-3"><span>DFRMS</span></div></a
          >
          <hr class="sidebar-divider my-0" />
          <ul class="navbar-nav text-light" id="accordionSidebar-1">
            <li class="nav-item">
              <a class="nav-link active" href="ca-dashboard.html"
                ><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="new-request-form.html"
                ><i class="fas fa-user"></i><span>New Request</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="table.html"
                ><i class="fas fa-table"></i><span>New Warrant</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html"
                ><i class="far fa-user-circle"></i><span>Profile</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
      <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <nav
            class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"
          >
            <div class="container-fluid">
              <h3 style="color: var(--bs-blue)">New Request Form</h3>
              <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown d-sm-none no-arrow">
                  <a
                    class="dropdown-toggle nav-link"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    href="#"
                    ><i class="fas fa-search"></i
                  ></a>
                  <div
                    class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                    aria-labelledby="searchDropdown"
                  >
                    <form class="me-auto navbar-search w-100">
                      <div class="input-group">
                        <input
                          class="bg-light form-control border-0 small"
                          type="text"
                          placeholder="Search for ..."
                        />
                        <div class="input-group-append">
                          <button class="btn btn-primary py-0" type="button">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                      ><span class="badge bg-danger badge-counter">3+</span
                      ><i class="fas fa-bell fa-fw"></i
                    ></a>
                    <div
                      class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in"
                    >
                      <h6 class="dropdown-header">alerts center</h6>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                        ><div class="me-3">
                          <div class="bg-primary icon-circle">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 12, 2019</span
                          >
                          <p>A new monthly report is ready to download!</p>
                        </div></a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                        ><div class="me-3">
                          <div class="bg-success icon-circle">
                            <i class="fas fa-donate text-white"></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 7, 2019</span
                          >
                          <p>$290.29 has been deposited into your account!</p>
                        </div></a
                      ><a
                        class="dropdown-item d-flex align-items-center"
                        href="#"
                        ><div class="me-3">
                          <div class="bg-warning icon-circle">
                            <i
                              class="fas fa-exclamation-triangle text-white"
                            ></i>
                          </div>
                        </div>
                        <div>
                          <span class="small text-gray-500"
                            >December 2, 2019</span
                          >
                          <p>
                            Spending Alert: We've noticed unusually high
                            spending for your account.
                          </p>
                        </div></a
                      ><a
                        class="dropdown-item text-center small text-gray-500"
                        href="#"
                        >Show All Alerts</a
                      >
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1"></li>
                <li class="nav-item dropdown no-arrow">
                  <div class="nav-item dropdown no-arrow">
                    <a
                      class="dropdown-toggle nav-link"
                      aria-expanded="false"
                      data-bs-toggle="dropdown"
                      href="#"
                      ><span class="d-none d-lg-inline me-2 text-gray-600 small"
                        >Valerie Luna</span
                      ></a
                    >
                    <div
                      class="dropdown-menu shadow dropdown-menu-end animated--grow-in"
                    >
                      <a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-user fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Profile</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Settings</a
                      ><a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-list fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Activity log</a
                      >
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"
                        ><i
                          class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"
                        ></i
                        >&nbsp;Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-primary py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div
                          class="text-uppercase text-primary fw-bold text-xs mb-1"
                        >
                          <span>PENDING</span>
                        </div>
                        <div class="text-dark fw-bold h5 mb-0">
                          <span>0</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-success py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div
                          class="text-uppercase text-success fw-bold text-xs mb-1"
                        >
                          <span>ASSIGNEND</span>
                        </div>
                        <div class="text-dark fw-bold h5 mb-0">
                          <span>0</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-info py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div
                          class="text-uppercase text-info fw-bold text-xs mb-1"
                        >
                          <span>AWAITING CATEGORIZATION</span>
                        </div>
                        <div class="row g-0 align-items-center">
                          <div class="col-auto col-xxl-1">
                            <div class="text-dark fw-bold h5 mb-0 me-3">
                              <span>0</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-start-warning py-2">
                  <div class="card-body">
                    <div class="row align-items-center no-gutters">
                      <div class="col me-2">
                        <div
                          class="text-uppercase text-warning fw-bold text-xs mb-1"
                        >
                          <span>AWAITING ANALYSIS</span>
                        </div>
                        <div class="text-dark fw-bold h5 mb-0">
                          <span>0</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start: Chart -->
            <div class="row">
              <div class="col-lg-7 col-xl-8">
                <div class="card shadow mb-4">
                  <div
                    class="card-header d-flex justify-content-between align-items-center"
                  >
                    <h6 class="text-primary fw-bold m-0">My Requests</h6>
                    <div class="dropdown no-arrow">
                      <button
                        class="btn btn-link btn-sm dropdown-toggle"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        type="button"
                      >
                        <i class="fas fa-ellipsis-v text-gray-400"></i>
                      </button>
                      <div
                        class="dropdown-menu shadow dropdown-menu-end animated--fade-in"
                      >
                        <p class="text-center dropdown-header">
                          dropdown header:
                        </p>
                        <a class="dropdown-item" href="#">&nbsp;Action</a
                        ><a class="dropdown-item" href="#"
                          >&nbsp;Another action</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >&nbsp;Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>DR</th>
                            <th>Date of Request</th>
                            <th>Devices</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          getMyRequests();
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-xl-4">
                <div class="card shadow mb-4">
                  <div
                    class="card-header d-flex justify-content-between align-items-center"
                  >
                    <h6 class="text-primary fw-bold m-0">My Warrants</h6>
                    <div class="dropdown no-arrow">
                      <button
                        class="btn btn-link btn-sm dropdown-toggle"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        type="button"
                      >
                        <i class="fas fa-ellipsis-v text-gray-400"></i>
                      </button>
                      <div
                        class="dropdown-menu shadow dropdown-menu-end animated--fade-in"
                      >
                        <p class="text-center dropdown-header">
                          dropdown header:
                        </p>
                        <a class="dropdown-item" href="#">&nbsp;Action</a
                        ><a class="dropdown-item" href="#"
                          >&nbsp;Another action</a
                        >
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"
                          >&nbsp;Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>DR</th>
                            <th>Date</th>
                            <th>Location</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td>Cell 3</td>
                          </tr>
                          <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 3</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End: Chart -->
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                      <div
                        class="card-header d-flex justify-content-between align-items-center"
                      >
                        <h6 class="text-primary fw-bold m-0">All Requests</h6>
                        <div class="dropdown no-arrow">
                          <button
                            class="btn btn-link btn-sm dropdown-toggle"
                            aria-expanded="false"
                            data-bs-toggle="dropdown"
                            type="button"
                          >
                            <i class="fas fa-ellipsis-v text-gray-400"></i>
                          </button>
                          <div
                            class="dropdown-menu shadow dropdown-menu-end animated--fade-in"
                          >
                            <p class="text-center dropdown-header">
                              dropdown header:
                            </p>
                            <a class="dropdown-item" href="#">&nbsp;Action</a
                            ><a class="dropdown-item" href="#"
                              >&nbsp;Another action</a
                            >
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"
                              >&nbsp;Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>DR</th>
                                <th>Date of Request</th>
                                <th>Case Agent</th>
                                <th>Devices</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                              </tr>
                              <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                    <div class="card shadow mb-4">
                      <div
                        class="card-header d-flex justify-content-between align-items-center"
                      >
                        <h6 class="text-primary fw-bold m-0">All Warrants</h6>
                        <div class="dropdown no-arrow">
                          <button
                            class="btn btn-link btn-sm dropdown-toggle"
                            aria-expanded="false"
                            data-bs-toggle="dropdown"
                            type="button"
                          >
                            <i class="fas fa-ellipsis-v text-gray-400"></i>
                          </button>
                          <div
                            class="dropdown-menu shadow dropdown-menu-end animated--fade-in"
                          >
                            <p class="text-center dropdown-header">
                              dropdown header:
                            </p>
                            <a class="dropdown-item" href="#">&nbsp;Action</a
                            ><a class="dropdown-item" href="#"
                              >&nbsp;Another action</a
                            >
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"
                              >&nbsp;Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>DR</th>
                                <th>Date</th>
                                <th>Case Agent</th>
                                <th>Location</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Cell 1</td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 3</td>
                              </tr>
                              <tr>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 3</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="bg-white sticky-footer">
          <div class="container my-auto">
            <div class="text-center my-auto copyright">
              <span>Copyright Jorge Siverio 2022</span>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=4d952d21517087db850f0bbc41a815ca"></script>
  </body>
</html>
