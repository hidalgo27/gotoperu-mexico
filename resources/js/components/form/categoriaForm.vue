<template>
<!--    <div class="col-3 text-center form-search checkbox">-->
<!--        <input type="checkbox" v-bind:value="categoria.categoriasSeleccionados" v-bind:id="categoria.value"  @change="onchangeCategory">-->
<!--        <label class="font-weight-bold"  v-bind:for="categoria.value">{{ categoria.nombre }}</label>-->
<!--    </div>-->

    <div class="col-3 text-center form-search checkbox">
        <input type="checkbox" v-bind:value="categoriaForm.categoriasSeleccionadosForm" v-bind:id="categoriaForm.nombre"  @change="onchangeCategoryForm">
        <label class="font-weight-bold w-100 d-block"  v-bind:for="categoriaForm.nombre">
            {{ categoriaForm.nombre }}
            <small class="d-block star-form text-secondary font-weight-bold">{{ categoriaForm.estrellas }} <span class="">estrellas</span></small>
        </label>
    </div>


</template>

<script>
    export default {
        props: ['categoriaForm'],
        methods: {
            onchangeCategoryForm: function (ev) {
                // console.log(ev);
                this.$emit('checked', this.categoriaForm.nombre, ev.target.checked)
            }
        },
    }
</script>
