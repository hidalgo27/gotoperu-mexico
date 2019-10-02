<template>
    <form>

        <div v-show="tap_form_show">

            <div class="row mt-5">
                <div class="col text-center">
                    <h6 class="font-weight-bold">CALIDAD DEL HOTEL</h6>
                    <p class="font-weight-bold">(<span class="text-primary">Opcional:</span> Puede seleccionar más de una categoria de hotel.)</p>
                </div>
            </div>

            <div class="row align-items-center no-gutters border">
                <div class="col-2 text-center rounded-left bg-secondary">
                    <div class="py-4 text-white">
                        <i data-feather="home" stroke-width="1"></i>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="row mt-2">
                        <div class="col-3 text-center form-search checkbox" v-for="cat_hotel in category_hotel">
                            <input type="checkbox" v-bind:id="cat_hotel.nombre">
                            <label class="font-weight-bold w-100 d-block"  v-bind:for="cat_hotel.nombre">
                                {{ cat_hotel.nombre }}
                                <small class="d-block star-form text-secondary font-weight-bold">{{ cat_hotel.estrellas }} <span class="">estrellas</span></small>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col text-center">
                    <h5 class="font-weight-bold">DESTINOS EN PERÚ</h5>
                </div>
            </div>

            <div class="row align-items-center no-gutters border">
                <div class="col-2 text-center rounded-left bg-secondary">
                    <div class="py-5 text-white">
                        <i data-feather="map-pin" stroke-width="1"></i>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="row mt-2">
                        <div class="col-auto text-center form-search checkbox" v-for="destination_form in destinations_form">
                            <input type="checkbox" v-bind:id="destination_form.nombre">
                            <label class="font-weight-bold w-100 d-block"  v-bind:for="destination_form.nombre">
                                {{ destination_form.nombre }}
                            </label>
                        </div>
                        <div class="col-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control font-weight-bold" placeholder="Otros">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-center">
                    <h5 class="font-weight-bold">NUMERO DE PASAJEROS</h5>
                </div>
            </div>

            <div class="row align-items-center no-gutters border">
                <div class="col-2 text-center rounded-left bg-secondary">
                    <div class="py-4 text-white">
                        <i data-feather="users" stroke-width="1"></i>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="row mt-2 no-gutters">
                        <div class="col-auto text-center pr-1 form-search checkbox" v-for="traveller_form in travellers_form">
                            <input type="checkbox" v-bind:id="'t_'+traveller_form.value">
                            <label class="font-weight-bold w-100 d-block"  v-bind:for="'t_'+traveller_form.value">
                                {{ traveller_form.value }} <i data-feather="user" stroke-width="1"></i>
                            </label>
                        </div>
                        <div class="col-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control font-weight-bold" placeholder="Especifica">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col text-center">
                    <h5 class="font-weight-bold">DURACIÓN DE VIAJE</h5>
                </div>
            </div>

            <div class="row align-items-center no-gutters border">
                <div class="col-2 text-center rounded-left bg-secondary">
                    <div class="py-4 text-white">
                        <i data-feather="clock" stroke-width="1"></i>
                    </div>
                </div>
                <div class="col px-3">
                    <div class="row mt-2 no-gutters">
                        <div class="col-auto text-center pr-1 form-search checkbox" v-for="duration_form in durations_form">
                            <input type="checkbox" v-bind:id="'d_'+duration_form.duration">
                            <label class="font-weight-bold w-100 d-block"  v-bind:for="'d_'+duration_form.duration">
                                {{ duration_form.duration }}
                            </label>
                        </div>
                        <div class="col-2">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control font-weight-bold" placeholder="Especifica">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <transition name="fade">
            <div v-show="!tap_form_show">
                <div class="row mb-3 align-items-center">
                    <div class="col-1 text-center rounded bg-secondary">
                        <div class="py-4 text-white">
                            <i data-feather="home" stroke-width="1"></i>
                        </div>
                    </div>
                    <div class="col px-3">
                        <el-input
                            placeholder="Nombre Completo"
                            v-model="el_nombre"
                            clearable>
                        </el-input>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-1 text-center rounded bg-secondary">
                        <div class="py-4 text-white">
                            <i data-feather="home" stroke-width="1"></i>
                        </div>
                    </div>
                    <div class="col px-3">
                        <el-input
                            placeholder="Email"
                            v-model="el_email"
                            clearable>
                        </el-input>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-1 text-center rounded bg-secondary">
                        <div class="py-4 text-white">
                            <i data-feather="home" stroke-width="1"></i>
                        </div>
                    </div>
                    <div class="col px-3">
                            <el-date-picker
                                v-model="el_fecha"
                                type="date"
                                placeholder="Fecha de viaje">
                            </el-date-picker>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-1 text-center rounded bg-secondary">
                        <div class="py-4 text-white">
                            <i data-feather="home" stroke-width="1"></i>
                        </div>
                    </div>
                    <div class="col px-3">
                            <el-input
                                placeholder="Número de Teléfono"
                                v-model="el_telefono"
                                clearable>
                            </el-input>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-1 text-center rounded bg-secondary">
                        <div class="py-4 text-white">
                            <i data-feather="home" stroke-width="1"></i>
                        </div>
                    </div>
                    <div class="col px-3">
                            <el-input
                                type="textarea"
                                :autosize="{ minRows: 2, maxRows: 4}"
                                placeholder="Please input"
                                v-model="el_textarea">
                            </el-input>
                    </div>
                </div>
            </div>
        </transition>

        <div class="row my-5">
            <div class="col text-right">
                <button type="button" class="btn btn-g-yellow btn-lg text-white font-weight-bold" v-on:click="tap_form_show = !tap_form_show" v-if="tap_form_show === true">
                    Siguiente >>
                </button>
                <button type="button" class="btn btn-secondary btn mx-3 text-white font-weight-normal" v-on:click="tap_form_show = !tap_form_show" v-else>
                    < Atrás
                </button>
                <button type="submit" class="btn btn-success btn-lg text-white font-weight-bold" v-if="tap_form_show === false">
                    Enviar
                </button>
            </div>
        </div>
    </form>


</template>

<script>
    export default {
        data() {
            return {
                category_hotel:[
                    {
                        nombre: 'Economico', estrellas: '2', value: '1'
                    },
                    {
                        nombre: 'Normal', estrellas: '3', value: '2'
                    },
                    {
                        nombre: 'Superior', estrellas: '4', value: '3'
                    },
                    {
                        nombre: 'Lujo', estrellas: '5', value: '4'
                    }
                ],
                destinations_form:[
                    {
                        nombre: 'Machu Picchu', value: '4'
                    },
                    {
                        nombre: 'Cusco', value: '3'
                    },
                    {
                        nombre: 'Lima', value: '2'
                    },
                    {
                        nombre: 'Montaña 7 colores', value: '1'
                    },
                    {
                        nombre: 'Lago Titicaca', value: '3'
                    },
                    {
                        nombre: 'Camino inca', value: '5'
                    }
                ],
                travellers_form:[
                    {
                        nombre: 'Arequipa', value: '1'
                    },
                    {
                        nombre: 'Lima', value: '2'
                    },
                    {
                        nombre: 'Cusco', value: '3'
                    },
                    {
                        nombre: 'Machu Picchu', value: '4'
                    },
                    {
                        nombre: 'Camino inca', value: '5'
                    }
                ],
                durations_form:[
                    {
                        duration: '3-5'
                    },
                    {
                        duration: '6-8'
                    },
                    {
                        duration: '9-11'
                    },
                    {
                        duration: '12-15'
                    },
                    {
                        duration: '16+'
                    }
                ],
                tap_form_show: true,
                input: '',
                el_email:'',

                pickerOptions: {
                    disabledDate(time) {
                        return time.getTime() > Date.now();
                    },
                    shortcuts: [{
                        text: 'Today',
                        onClick(picker) {
                            picker.$emit('pick', new Date());
                        }
                    }, {
                        text: 'Yesterday',
                        onClick(picker) {
                            const date = new Date();
                            date.setTime(date.getTime() - 3600 * 1000 * 24);
                            picker.$emit('pick', date);
                        }
                    }, {
                        text: 'A week ago',
                        onClick(picker) {
                            const date = new Date();
                            date.setTime(date.getTime() - 3600 * 1000 * 24 * 7);
                            picker.$emit('pick', date);
                        }
                    }]
                },
                value1: '',
                textarea2: ''
            }
        }

    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
