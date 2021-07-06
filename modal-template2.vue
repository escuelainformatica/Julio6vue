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
           AQUI ESTA EL CUERPO DEL MENSAJE MODAL 2 title:{{propiedad.title}} id:{{propiedad.id}}
            <!-- fin del cuerpo-->
          </slot>
        </div>

        <div class="modal-footer">
          <slot name="footer">
            <button class="modal-default-button" @click="$emit('close2')">
              OK
            </button>&nbsp;&nbsp;&nbsp;
            <button class="modal-default-button" @click="$emit('close3')">
              Cancelar
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
  props:['propiedad'],
  data: function() {
    return {
      showModal2:false,
      who: 'world'
    }
  }
}
</script>

