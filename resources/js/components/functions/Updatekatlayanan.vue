<template>
<div class="modal fade text-left" id="largeedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel17">Edit Modal</h4>
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
          <button type="button" class="btn btn-outline-primary" @click='update' data-dismiss="modal">Update changes</button>
      </div>
    </div>
</div>
</div>

</template>

<script>
	export default{
		data(){
			return{
				list:{},
				errors:{}
			}
		},
		methods:{
			update(){
			axios.patch(`/katlayanan/${this.list.id}`,this.$data.list).then((response)=> this.close())
				  .catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>