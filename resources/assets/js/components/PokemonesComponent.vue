<template>
  <div class="row">
    <div class="col-sm" v-for="pokemon in pokemons">
      <div class="card text-center" style="width: 18rem">
        <img class="card-img-top" v-bind:src="pokemon.picture" alt="" />
        <div class="card-body">
          <h5 class="card-title">{{ pokemon.name }}</h5>

          <button href="" class="btn btn-primary" v-on:click="mostrar">
            Ver mas..
          </button>

          <table class="table" v-if="show">
            <thead>
              <tr>
                <th scope="col">Stats</th>
                <th scope="col">Pokemon</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Tipo</th>
                <td>{{ pokemon.name }}</td>
              </tr>
              <tr>
                <th scope="row">Peso</th>
                <td>{{ pokemon.peso }}</td>
              </tr>
              <tr>
                <th scope="row">Ataque</th>
                <td>{{ pokemon.ataque }}</td>
              </tr>
              <tr>
                <th scope="row">Defensa</th>
                <td>{{ pokemon.defensa }}</td>
              </tr>
              <tr>
                <th scope="row">Altura</th>
                <td>{{ pokemon.altura }}</td>
              </tr>
            </tbody>
          </table>
          <a class="btn btn-secondary" @click="imprimir" v-if="show">
            view Pdf
          </a>
          <button class="btn btn-success" v-if="show">Descargar Excel</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Axios from "axios";
import EventBus from "../event-bus";
import jsPDF from "jspdf";

export default {
  props: {
    see: String,
  },
  name: "pdf",

  data() {
    return {
      show: false,
      pokemons: [],
    };
  },
  created() {
    EventBus.$on("pokemon-added", (data) => {
      this.pokemons.push(data);
    });
  },
  mounted() {
    let currentRoute = window.location.pathname;
    Axios.get(`http://127.0.0.1:8000/${currentRoute}/pokemones`).then(
      (response) => (this.pokemons = response.data)
    );
  },
  methods: {
    mostrar() {
      this.show = true;
    },
    imprimir() {
      var pdf = new jsPDF();
      pdf.text("hello world");
      pdf.save();
    },
  },
};
</script>
