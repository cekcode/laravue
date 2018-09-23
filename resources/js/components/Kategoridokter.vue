<template>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Kategori Dokter</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Kategori Dokter</a>
                </li>
                <li class="breadcrumb-item active">Semua Kategori Dokter
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered dt-config" ref="dtconfig">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>System Architect</td>
                          <td>Aktif</td>
                          <td>E</td>
                          <td>H</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>

</template>

<script>
  export default {
    mounted: function() {
      $(this.$refs.dtconfig).DataTable()
    }
  }
</script>