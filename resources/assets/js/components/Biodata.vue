<template>
  <div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="biodata in biodatas" :key="biodata.key">
          <td>{{ biodata.name }}</td>
          <td>{{ biodata.email }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        biodatas: []
      };
    },
    created() {
      this.fetchBiodata();
    },
    methods: {
      fetchBiodata() {
        axios.get('/biodata').then(respon => {
          this.biodatas = respon.data.data
        });
      }
    }
  }
</script>
