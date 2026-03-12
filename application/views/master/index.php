  <!-- Static Table Start -->
  <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="sparkline13-list">
                      <div class="sparkline13-hd">
                          <div class="main-sparkline13-hd">
                              <h1>Data <span class="table-project-n">Master</span> Table</h1>
                          </div>
                      </div>
                      <div class="sparkline13-graph ">
                          <?= $this->session->flashdata('message') ?>
                          <div class="datatable-dashv1-list custom-datatable-overright table-responsive">
                              <div class="row">
                                  <div class="col text-end p-3">
                                      <button href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#site_modal">Tambah Site</button>
                                  </div>
                              </div>
                              <table class="table tabledata table-bordered table-hover table-striped">
                                  <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Project ID</th>
                                          <th>Site Name PO</th>
                                          <th>Site Name Tenant</th>
                                          <th>Site ID</th>
                                          <th>Start</th>
                                          <th>Done</th>
                                          <th>Tenant</th>
                                          <th>Type Tower</th>
                                          <th>Height</th>
                                          <th>Alamat</th>
                                          <th>Latitude</th>
                                          <th>Longitude</th>
                                          <th>Pekerjaan</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $no = 1; ?>
                                      <?php foreach ($loadMaster as $lm) : ?>
                                          <tr class="row-site" data-id="<?= $lm['id'] ?>" data-project="<?= $lm['project_id'] ?>" data-site="<?= $lm['site_id'] ?>" data-name="<?= $lm['site_name_po'] ?>">
                                              <td><?= $no ?></td>
                                              <td><?= $lm['project_id'] ?></td>
                                              <td><?= $lm['site_name_po'] ?></td>
                                              <td><?= $lm['site_name_tenant'] ?></td>
                                              <td><?= $lm['site_id'] ?></td>
                                              <td><?= $lm['start'] ?></td>
                                              <td><?= $lm['done'] ?></td>
                                              <td><?= $lm['tenant'] ?></td>
                                              <td><?= $lm['type_tower'] ?></td>
                                              <td><?= $lm['height'] ?></td>
                                              <td><?= $lm['alamat'] ?></td>
                                              <td><?= $lm['latitude'] ?></td>
                                              <td><?= $lm['longitude'] ?></td>
                                              <td><?= $lm['pekerjaan'] ?></td>
                                          </tr>
                                          <?php $no++ ?>
                                      <?php endforeach; ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="site_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Site</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form class="" method="POST" action="<?= base_url('tower/add_site') ?>">
                  <div class="modal-body row g-3">
                      <div class="col-md-6">
                          <label class="form-label">Project ID</label>
                          <input type="text" name="project_id" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site Name PO</label>
                          <input type="text" name="site_name_po" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site name Tenant</label>
                          <input type="text" name="site_name_tenant" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site ID</label>
                          <input type="text" name="site_id" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Start</label>
                          <input type="date" name="start" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Done</label>
                          <input type="date" name="done" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Tenant</label>
                          <input type="text" name="tenant" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Type Tower</label>
                          <input type="text" name="type_tower" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">height</label>
                          <input type="text" name="height" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Alamat</label>
                          <input type="text" name="alamat" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Latitude</label>
                          <input type="text" name="latitude" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Longitude</label>
                          <input type="text" name="longitude" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Pekerjaan</label>
                          <input type="text" name="pekerjaan" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Area</label>
                          <input type="text" name="area" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Mitra</label>
                          <input type="text" name="mitra" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">ATP Date</label>
                          <input type="date" name="atp_date" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Executive General Manager </label>
                          <input type="text" name="executive_general_manager" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Manager Construction</label>
                          <input type="text" name="manager_construction" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">GM Area Office</label>
                          <input type="text" name="gm_area_office" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Manager Const Depl TG & OM Area</label>
                          <input type="text" name="manager_const" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Project Management </label>
                          <input type="text" name="project_management" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Waspang Area</label>
                          <input type="text" name="waspang_area" class="form-control">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  <div class="modal fade" id="siteModal">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">

              <div class="modal-header">
                  <h5 class="modal-title">Site Detail</h5>
                  <button class="btn-close" data-bs-dismiss="modal"></button>
              </div>


              <form id="formUpdateSite" class="" method="POST">
                  <div class="modal-body row g-3">
                      <input type="text" id="m_id" name="id" class="form-control" hidden>
                      <div class="col-md-6">
                          <label class="form-label">Project ID</label>
                          <input type="text" id="m_project_id" name="project_id" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site Name PO</label>
                          <input type="text" id="m_site_name_po" name="site_name_po" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site name Tenant</label>
                          <input type="text" id="m_site_name_tenant" name="site_name_tenant" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Site ID</label>
                          <input type="text" id="m_site_id" name="site_id" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Start</label>
                          <input type="date" id="m_start" name="start" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Done</label>
                          <input type="date" id="m_done" name="done" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Tenant</label>
                          <input type="text" id="m_tenant" name="tenant" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Type Tower</label>
                          <input type="text" id="m_type_tower" name="type_tower" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">height</label>
                          <input type="text" id="m_height" name="height" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Alamat</label>
                          <input type="text" id="m_alamat" name="alamat" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Latitude</label>
                          <input type="text" id="m_latitude" name="latitude" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Longitude</label>
                          <input type="text" id="m_longitude" name="longitude" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Pekerjaan</label>
                          <input type="text" id="m_pekerjaan" name="pekerjaan" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Area</label>
                          <input type="text" id="m_area" name="area" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Mitra</label>
                          <input type="text" id="m_mitra" name="mitra" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">ATP Date</label>
                          <input type="date" id="m_atp_date" name="atp_date" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Executive General Manager </label>
                          <input type="text" id="m_executive_general_manager" name="executive_general_manager" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Manager Construction</label>
                          <input type="text" id="m_manager_construction" name="manager_construction" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">GM Area Office</label>
                          <input type="text" id="m_gm_area_office" name="gm_area_office" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Manager Const Depl TG & OM Area</label>
                          <input type="text" id="m_manager_const" name="manager_const" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Project Management </label>
                          <input type="text" id="m_project_management" name="project_management" class="form-control">
                      </div>
                      <div class="col-md-6">
                          <label class="form-label">Waspang Area</label>
                          <input type="text" id="m_waspang_area" name="waspang_area" class="form-control">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-warning">update</button>
                      <a type="button" id="btn_delete" class="btn btn-danger">Delete</a>
                  </div>
              </form>



          </div>
      </div>
  </div>
  <!-- Static Table End -->