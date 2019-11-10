<template>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 d-flex mb-3">
        <div class="card w-100 shadow-sm">
            <div class="header-img-packages position-relative">
                <a href=""><img class="card-img-top" :src="'/images/packages/'+paquete_p.imagen" alt=""></a>
<!--                <a href=""><img class="card-img-top w-100" :src="paquete_p.imagen" alt=""></a>-->
                <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">

<!--                        <span v-for="paquete_cat in paquete_category">-->
<!--                            <span v-if="paquete_cat.idpaquetes === paquete_p.id">-->
<!--                                {{paquete_cat.categoria.nombre}}-->
<!--                            </span>-->
<!--                        </span>-->
                        <h5 class="text-white m-0">{{ paquete_p.titulo }}</h5>
                        <template v-for="paquete_destino in paquete_destinations">
                            <template v-if="paquete_destino.idpaquetes === paquete_p.id">
                                <small class="text-white">{{paquete_destino.destinos.nombre}},</small>
                            </template>
                        </template>

                </div>
            </div>
<!--            <div class="card-body">-->
<!--                <a href="" class="text-g-green font-weight-bold d-block h5">{{ paquete_p.titulo }}</a>-->
<!--                <span class="font-weight-normal text-secondary">-->
<!--                    <i class="fa fa-map-marker-alt"></i>-->

<!--                </span>-->
<!--            </div>-->
            <div class="card-footer bg-white">
                <div class="row align-items-center">
                    <div class="col">
                        <p class="font-weight-bold h5 m-0">{{ paquete_p.duracion }} Días</p>
                    </div>
                    <div class="col-auto">
                        <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> $120<small>USD</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['paquete_p', 'paquete_destinations','paquete_category'],
        data() {
            return {
                search: [],
                modoEditar: false,
                search: {nombre: '', descripcion: ''},
                // destinos: [paquete.paquetes_destinos]
            }
        },
    }
</script>
