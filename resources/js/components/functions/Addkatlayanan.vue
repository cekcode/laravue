<template>
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="field">
	        <label class="label">Nama</label>
	        <div class="control">
	          <input class="form-control" id="nama" name="nama" :class="{'is-danger':errors.nama}" type="text" placeholder="Nama" v-model="list.nama">
	        </div>
	        <small v-if="errors.name" class="has-text-danger">{{ errors.nama[0] }}</small>
	      </div>
        <div class="field">
	        <label class="label">Status</label>
	        <div class="control">
            <select class="form-control" name="status" id="status" :class="{'is-danger':errors.status}" v-model="list.status">
              <option value="0">Tidak Aktif</option>
              <option value="1">Aktif</option>
            </select>
	        </div>
	        <small v-if="errors.status" class="has-text-danger">{{ errors.status[0] }}</small>
	      </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-primary" @click='save' data-dismiss="modal">Save changes</button>
      </div>
    </div>
</div>
</div>

</template>

<script>
	export default{
    http: {
        root: '/root',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
    },
		data() {
			return{
				list:{
          nama:'',
          status: ''
        },
				errors:{}
			};
    },
    
		methods:{
			save(){
        // axios.post('/katlayanan',this.$data.list).then((response)=> console.log(response))
        // .catch((error) => console.log(error.response.data.message))
				axios.post('/katlayanan',this.$data.list).then((response)=> {
              this.$parent.lists.push(response.data)
              this.$parent.lists.sort(function(a,b){
                if (a.nama > b.nama) {
                  return 1;
                }else if(a.nama < b.nama){
                  return -1;
                }
              })
              this.list = ""
              
				
				})
				  .catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>
