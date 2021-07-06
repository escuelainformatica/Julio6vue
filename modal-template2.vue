<template>
  <transition name="modal">
  <div class="modal-mask">
    <div class="modal-wrapper">
      <div class="modal-container">

        <div class="modal-header">
          <slot name="header">
            default header modal 2
          </slot>
        </div>

        <div class="modal-body">
          <slot name="body">
            <!-- cuerpo -->
           AQUI ESTA EL CUERPO DEL MENSAJE MODAL 2
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
  data: function() {
    return {
      showModal2:false,
      who: 'world'
    }
  }
}
</script>

