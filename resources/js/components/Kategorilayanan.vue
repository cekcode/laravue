<template>
<div>
  <div class="app-content content">
    <span class="is-pulled-right" v-if="loading">
      <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
    </span>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-10 col-12 mb-2">
          <h3 class="content-header-title">Kategori Layanan</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Kategori Layanan</a>
                </li>
                <li class="breadcrumb-item active">Semua Kategori Layanan
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="content-header-right col-md-2 col-12 mb-2">
          <button class="btn btn-info" data-toggle="modal" data-target="#large">Tambah</button>
        </div>
      </div>
      <div class="content-body">
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <div class="form-group position-relative has-icon-left">
                        <input class="text-center form-control is-small" id="iconLeft6" type="text" placeholder="Cari..." v-model="searchQuery">
                        <div class="form-control-position">
                          <i class="la la-search info"></i>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="(item, index) in temp" :key="item.id">
                          <td>{{ index }}</td>
                          <td>{{ item.nama }}</td>
                          <td v-if=" item.status == 1">Aktif</td>
                          <td v-else>Tidak Aktif</td>
                          <td><button type="button" class="btn btn-outline-warning btn-min-width box-shadow-1 mr-1 mb-1" data-toggle="modal" data-target="#largeedit" @click="openUpdate(index)"><i class="la la-pencil"></i> Edit</button></td>
                          <td><button type="button" class="btn btn-outline-danger btn-min-width box-shadow-1 mr-1 mb-1" @click="del(item.id, index)"><i class="la la-trash"></i> Hapus</button></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
  <Add></Add>
  <Update></Update>
</div>
</template>



<script>
let Add = require('./functions/Addkatlayanan.vue');
let Update = require('./functions/Updatekatlayanan.vue');
  export default {
    components:{Add,Update},
    data(){
			return{
				lists:{},
        errors:{},
        loading:false,
        searchQuery:'',
				temp:''
			}
    },
		watch:{
			searchQuery(){
				if (this.searchQuery.length > 0) {
					this.temp = this.lists.filter((item) => {
						return Object.keys(item).some((index)=>{
							let string = String(item[index]) 
							return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
							// console.log(string)
						})
					});
					// console.log(result)
				}else{
					this.temp = this.lists
				}
			}
		},
    mounted: function() {
      axios.get('/getKatlayanan')
			.then((response)=> this.lists = this.temp = response.data)
			.catch((error) => this.errors = error.response.data.errors)
    },
    methods:{
      del(id, index){
				if (confirm("Are you sure ?")) {
          this.loading = !this.loading
          
        axios
        .delete(`/katlayanan/${id}`)
        .then(res => {this.lists.splice(index, 1);this.loading = !this.loading})
        .catch((error) => this.errors = error.response.data.errors)	
					// axios.delete(`/katlayanan/${id}`)
					// .then((response)=> {this.lists.splice(key,1);this.loading = !this.loading})
					// .catch((error) => this.errors = error.response.data.errors)	
				}
        console.log(`${index} ${id}`)
        // window.location.reload(true)
      },
      openUpdate(index){
				this.$children[1].list = this.temp[index]
			}
		}
    
  }
</script>