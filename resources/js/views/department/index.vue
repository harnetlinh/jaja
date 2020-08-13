<template>
  <div>
    <h1>DEPARTMENT</h1>
  </div>
</template>

<script>
import Resource from '@/api/resource';
const departmentResource = new Resource('department');
export default {
  name: 'Department',
  data(){
    return {
      departmentDB: [],
    };
  },
  created(){
    this.getDepartment();
  },
  methods: {
    async getDepartment() {
      // this.loading = true;
      console.log('getDepartment');
      const { data } = await departmentResource.list({});
      console.log(data);

      // this.list.forEach((role, index) => {
      //     role['index'] = index + 1;
      //     role['description'] = this.$t('roles.description.' + role.name);
      // });
      // this.loading = false;
    },
  },
};
</script>

<style>

</style>
