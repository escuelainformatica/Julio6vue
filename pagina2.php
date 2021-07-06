<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modal Component</title>
    <!-- produccion -->
    <!-- <script src="https://unpkg.com/vue"></script>-->
    <!-- desarrollo-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/http-vue-loader@1.4.2/src/httpVueLoader.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- template for the modal component -->

</head>
<body>
<!-- app -->
<div id="app">
    <button id="show-modal" @click="showModal = true">Show Modal</button>
    <!-- use the modal component, pass in the prop -->
    <modal v-if="showModal" @close="showModal = false">
        <!--
      you can use custom content here to overwrite
      default content
    -->
        <h3 slot="header">custom header</h3>
    </modal>
</div>

<script>
    // start app
    new Vue({
        el: "#app",
        components: {
            'modal': httpVueLoader('modal-template.vue'),
            "modal-template2":httpVueLoader('modal-template2.vue')
        },
        data: {
            showModal: false
        }
    });
</script>
</body>
</html>

