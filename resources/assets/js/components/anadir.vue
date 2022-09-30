<template>
  <form form @submit.prevent="saveTable">
    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">cracteristicas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" v-model="name" /></td>
          <td><input type="text" v-model="caracteristica" /></td>
        </tr>
        <tr>
          <td><input type="text" v-model="name2" /></td>
          <td><input type="text" v-model="caracteristica2" /></td>
        </tr>
      </tbody>
    </table>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
</template>

<script>
import EventBus from "../event-bus";

export default {
  props: {
    see: String,
  },
  data() {
    return {
      name: null,
      name2: null,
      caracteristica: null,
      caracteristica2: null,
    };
  },
  methods: {
    saveTable: function () {
      let currentRoute = window.location.pathname;
      axios
        .post(`http://127.0.0.1:8000/${currentRoute}`, {
          name: this.name,
          name2: this.name2,
          caracteristica: this.caracteristica,
          caracteristica2: this.caracteristica2,
        })
        .then(function (res) {
          console.log(currentRoute);
          EventBus.$emit("table-added", res.data.table);
        })
        .catch(function (e) {
          console.log(e);
        });
    },
  },
};
</script>
