<template>
<div class="card">
    <div class="card-header">Skills</div>

    <div class="card-body">
        <div v-for="(input, i) in inputs" :key="i" class="d-flex mb-2 p-0">
            <div class="col-10">
                <input placeholder="Hola" class="form-control" type="text" name="skills[]" v-model="inputs[i]">
            </div>
            <div class="col-2">
                <button class="btn btn-danger ms-2" @click.prevent="inputs.splice(i,1)">Delete</button>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" @click.prevent="inputs.push('')">Add</button>
        </div>
    </div>
</div>
</template>

<script>
  export default {
    props: {
        skills: {
            type: Array,
            default: () => ([]),
        },
    },
    mounted() {
      console.log('Component mounted.')
    },
    data() {
        return {
            inputs: this.skills,
        }
    },
  }
</script>
