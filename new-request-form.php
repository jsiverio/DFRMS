<?php
include 'php/select_functions.php';
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
              <a class="nav-link" href="ca-dashboard.html"
                ><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="new-request-form.html"
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
          <form>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                    <label class="form-label" for="dr">DR Number</label
                    ><input
                      class="border rounded border-3 border-primary shadow-sm form-control"
                      type="text"
                      name="dr"
                      placeholder="202200000000000 (15 Digits)"
                      required=""
                      minlength="15"
                      maxlength="15"
                      pattern="^[0-9]+$"
                      autocomplete="off"
                      style="font-size: 16px"
                    /><label
                      class="form-label"
                      for="sw"
                      style="padding-top: 20px"
                      >SW Number</label
                    ><input
                      class="border rounded border-3 border-primary shadow-sm form-control"
                      type="text"
                      name="sw"
                      placeholder="2022000000"
                      required=""
                      minlength="10"
                      maxlength="10"
                      pattern="^[0-9]+$"
                      autocomplete="off"
                    /><label
                      class="form-label"
                      for="defName"
                      style="padding-top: 20px"
                      >Suspect's First and Last Name</label
                    ><input
                      class="border rounded border-3 border-primary shadow-sm form-control"
                      type="text"
                      name="defName"
                      placeholder="SP Name"
                      autocomplete="off"
                    /><label
                      class="form-label"
                      for="ca"
                      style="padding-top: 20px"
                      >Case Agent</label
                    ><select class="border-3 border-primary shadow-sm form-select" name="ca">
                    <?php
                    selectCaseAgent();
                    ?>  
                    </select>
                    <label
                      class="form-label"
                      for="agency"
                      style="padding-top: 20px"
                      >Agency</label
                    ><select class="border-3 border-primary shadow-sm form-select" name="agency">
                      <?php
                      selectAgency();
                      ?>
                    </select>
                      <label
                      class="form-label"
                      for="notes"
                      style="padding-top: 20px"
                      >Requester notes</label
                    ><textarea
                      class="border rounded-0 border-3 border-primary shadow-sm form-control form-control-lg"
                      name="notes"
                      placeholder="Cybertip #'s , usernames, email addresses associated with the case and other pertinent information"
                      style="width: 700px; height: 200px; font-size: 16px"
                      spellcheck="true"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="padding-left: 20px">
                  <div class="row">
                    <div class="col" style="padding-bottom: 18px">
                      <label class="form-label">Barcode</label
                      ><input class="form-control" type="text" />
                    </div>
                    <div class="col">
                      <label class="form-label">Device Type</label
                      ><select class="form-select">
                        <?php
                          selectDevice();
                        ?>
                      </select>
                    </div>
                    <div class="col">
                      <label class="form-label">Password - PIN</label
                      ><input class="form-control" type="text" />
                    </div>
                    <div
                      class="col"
                      style="text-align: left; padding-top: 32px"
                    >
                      <button
                        class="btn btn-primary"
                        type="button"
                        style="text-align: left"
                      >
                        ADD +
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col" style="text-align: center; padding-top: 50px">
                <button
                  class="btn btn-primary"
                  type="submit"
                  style="text-align: center"
                >
                  Button
                </button>
              </div>
            </div>
          </form>
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
