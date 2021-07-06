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
           AQUI ESTA EL CUERPO DEL MENSAJE

            <button id="show-modal" @click="showModal = true">Show Modal 2</button>
            <!-- use the modal component, pass in the prop -->
            <modal-template2 v-if="showModal" @close="showModal = false" />

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
      who: 'world'
    }
  }
}
</script>

