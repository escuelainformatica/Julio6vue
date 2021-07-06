<template>
  <transition name="modal">
  <div class="modal-mask">
    <div class="modal-wrapper">
      <div class="modal-container">

        <div class="modal-header">
          <slot name="header">
            default header
          </slot>
        </div>

        <div class="modal-body">
          <slot name="body">
            <!-- cuerpo -->

            <ul>
              <li v-for="(fila,indice) in info" :key="fila.id">
                {{indice}}: {{fila.id}} {{fila.title}}
                <button id="show-modal"
                        @click="showModal = true; filaActual=fila; indiceActual=indice; ">
                  Show Modal 2</button>
              </li>
            </ul>
           AQUI ESTA EL CUERPO DEL MENSAJE


            <!-- use the modal component, pass in the prop -->
            <modal-template2 v-bind:propiedad="filaActual" v-if="showModal"
                             @close2="showModal = false" @close3="showModal=false; info[indiceActual].title='FINALIZADO';  "
            />

            <!-- fin del cuerpo-->
          </slot>
        </div>

        <div class="modal-footer">
          <slot name="footer">
            default footer
            <button class="modal-default-button" @click="$emit('close')">
              OK
            </button>
          </slot>
        </div>
      </div>
    </div>
  </div>
  </transition>
</template>

<script>
module.exports = {
  components:{
    'modal-template2':httpVueLoader('modal-template2.vue'),
  },
  data: function() {
    return {
      showModal:false,
      who: 'world',
      info:[],
      filaActual:'',
      indiceActual:0
    }
  },
  mounted () {
    // cargar los datos
    axios
        .get('https://jsonplaceholder.typicode.com/todos')
        .then(response => (this.info = response.data));
  }
}
</script>

