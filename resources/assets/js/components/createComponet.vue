<template>
  <div class="modal fade" id="addPokemon" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Pokemon</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="savePokemon">
            <div class="form-group">
              <label>Pokemon</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingresa el nombre del pokemon"
                v-model="name"
              />
            </div>
            <div class="form-group">
              <label>Picture</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingresa la url de una imagen"
                v-model="picture"
              />
            </div>
            <div class="form-group">
              <label>Tipo</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingresa el tipo"
                v-model="tipo"
              />
            </div>
            <div class="form-group">
              <label>Peso</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingrese el peso"
                v-model="peso"
              />
            </div>
            <div class="form-group">
              <label>Ataque</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingresa el ataque"
                v-model="ataque"
              />
            </div>
            <div class="form-group">
              <label>Defensa</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingrese la defensa"
                v-model="defensa"
              />
            </div>
            <div class="form-group">
              <label>Altura</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ingrese la altura"
                v-model="altura"
              />
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import EventBus from "../event-bus";

export default {
  props: {
    see: String,
  },
  data() {
    return {
      show3: false,
      show2: true,
      show: false,
      show4: true,
      name: null,
      picture: null,
      tipo: null,
      peso: null,
      ataque: null,
      defensa: null,
    };
  },
  methods: {
    savePokemon: function () {
      let currentRoute = window.location.pathname;
      axios
        .post(`http://127.0.0.1:8000/${currentRoute}/pokemones`, {
          name: this.name,
          picture: this.picture,
          tipo: this.tipo,
          peso: this.peso,
          ataque: this.ataque,
          defensa: this.defensa,
          altura: this.altura,
        })
        .then(function (res) {
          console.log(currentRoute);
          EventBus.$emit("pokemon-added", res.data.pokemon);
        })
        .catch(function (e) {
          console.log(e);
        });
    },
    mostrar() {
      this.show = true;
      this.show3 = true;
      this.show2 = false;
      this.show4 = false;
    },
  },
};
</script>
