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

                          <div class="datatable-dashv1-list custom-datatable-overright table-responsive">
                              <div class="row">
                                  <div class="col text-end">
                                      <a href="" class="btn btn-primary">Tambah Site</a>
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
                                          <th>Area</th>
                                          <th>Mitra</th>
                                          <th>ATP Date</th>
                                          <th>Executive General Manager </th>
                                          <th>Manager Construction</th>
                                          <th>GM Area Office</th>
                                          <th>Manager Const</th>
                                          <th>Project Management </th>
                                          <th>Waspang Area</th>


                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $no = 1; ?>
                                      <?php foreach ($loadMaster as $lm) : ?>
                                          <tr>
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
                                              <td><?= $lm['longtude'] ?></td>
                                              <td><?= $lm['pekerjaan'] ?></td>
                                              <td><?= $lm['area'] ?></td>
                                              <td><?= $lm['mitra'] ?></td>
                                              <td><?= $lm['atp_date'] ?></td>
                                              <td><?= $lm['executive_general_manager'] ?></td>
                                              <td><?= $lm['manager_construction'] ?></td>
                                              <td><?= $lm['gm_area_office'] ?></td>
                                              <td><?= $lm['manager_const'] ?></td>
                                              <td><?= $lm['project_management'] ?></td>
                                              <td><?= $lm['waspang_area'] ?></td>
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
  <!-- Static Table End -->