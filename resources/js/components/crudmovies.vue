<template>
  <div>

    <div class="modal fade" :class="{ 'mostrar': modal }" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="" v-text="tituloModal"></h5>
                <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="post" class="">
                  <div class="row">
                    <div class="form-body">
                      <h4 class="form-section"><i class="icon-head"></i> Registrar datos de la pelicula</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput1">Titulo</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="Titulo" v-model="titulo">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="timesheetinput3">Año</label>
                            <div class="position-relative has-icon-left">
                              <input type="date" id="timesheetinput3" class="form-control" v-model="anio">
                              <div class="form-control-position">
                                <i class="icon-calendar5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput5">Género</label>
                            <select class="selecto form-control width100" v-model="idgenero" multiple="multiple">
                              <option v-for="item in arrayGenero" :key="item.id" :value="item.id" v-text="item.nombre"></option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput6">Director</label>
                            <select class="selecto form-control width100" v-model="iddirector" multiple="multiple">
                              <option v-for="item in arrayDirector" :key="item.id" :value="item.id" v-text="item.nombre"></option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="projectinput8">Descripción</label>
                              <textarea id="projectinput8" rows="5" class="form-control" v-model="descripcion" placeholder="Descripción"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput6">Clasificación</label>
                            <select id="projectinput6" v-model="idclasificacion" class="form-control">
                              <option value="none" selected="" disabled="">Seleccione su opción</option>
                              <option v-for="item in arrayClasificacion" :key="item.id" :value="item.id" v-text="item.nombre"></option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-group" v-show="error">
                        <hr>
                        <h3>Listado de errores:</h3>
                            <div v-for="error in errorMostrarMsj" :key="error" v-text="error" class="error">
                                
                            </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                <button type="button" class="btn btn-primary" @click="actualizar()">Editar</button>
              </div>
            </div>
          </div>
        </div>

    <div class="row">
      <div class="col-xs-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">CRUD Peliculas</h4>
                  <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
              </div>

              <div class="card-body collapse in">
                <div class="card-block">
                  <form class="form">
                    <div class="form-body">
                      <h4 class="form-section"><i class="icon-head"></i> Registrar datos de la pelicula</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput1">Titulo</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="Titulo" name="fname">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="timesheetinput3">Año</label>
                            <div class="position-relative has-icon-left">
                              <input type="date" id="timesheetinput3" class="form-control" name="date">
                              <div class="form-control-position">
                                <i class="icon-calendar5"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput5">Género</label>
                            <select class="selecto form-control width100" name="states[]" multiple="multiple">
                              <option value='elem_1'>elem 1</option>
                              <option value='elem_2'>elem 2</option>
                              <option value='elem_3'>elem 3</option>
                              <option value='elem_4'>elem 4</option>
                              <option value='elem_5'>elem 5</option>
                              <option value='elem_6'>elem 6</option>
                              <option value='elem_7'>elem 7</option>
                              <option value='elem_8'>elem 8</option>
                              <option value='elem_9'>elem 9</option>
                              <option value='elem_10'>elem 10</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput6">Director</label>
                            <select class="selecto form-control width100" name="states[]" multiple="multiple">
                              <option value='elem_1'>elem 1</option>
                              <option value='elem_2'>elem 2</option>
                              <option value='elem_3'>elem 3</option>
                              <option value='elem_4'>elem 4</option>
                              <option value='elem_5'>elem 5</option>
                              <option value='elem_6'>elem 6</option>
                              <option value='elem_7'>elem 7</option>
                              <option value='elem_8'>elem 8</option>
                              <option value='elem_9'>elem 9</option>
                              <option value='elem_10'>elem 10</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="projectinput8">Descripción</label>
                              <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="Descripción"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput6">Clasificación</label>
                            <select id="projectinput6" name="budget" class="form-control">
                              <option value="none" selected="" disabled="">Seleccione su opción</option>
                              <option value="none">A</option>
                              <option value="none">B</option>
                              <option value="none">C</option>
                              <option value="none">D</option>
                              <option value="none">E</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="padding20-0">
                      <button type="button" class="btn btn-info">Agregar Pelicula</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>

          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Listado de peliculas</h4>
                  <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
              </div>

              <div class="card-body collapse in">
                <div class="table-responsive">
                  <table class="table mb-0">
                      <thead>
                          <tr>
                              <th>Acciones</th>
                              <th>#</th>
                              <th>Titulo</th>
                              <th width="60%">Descripción</th>
                              <th>Año</th>
                              <th>Género</th>
                              <th>Director</th>
                              <th>Clasificación</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="item in arrayPelicula">
                              <td>
                                <div class="btn-group mr-1 mb-1">
                                      <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                      <div class="dropdown-menu">
                                          <button class="dropdown-item" @click="abrirModal(item)">Editar</button>
                                          <button class="dropdown-item" href="#">Eliminar</button>
                                      </div>
                                </div>
                              </td>
                              <th scope="row">1</th>
                              <td v-text="item.titulo"></td>
                              <td v-text="item.descripcion"></td>
                              <td v-text="item.anio"></td>
                              <td v-text="item.genero"></td>
                              <td v-text="item.clasificacion"></td>
                              <td v-text="item.director"></td>
                          </tr>
                      </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</template>

<style>
    .mostrar{
        display: list-item!important;
        opacity: 1!important;
        position: absolute!important;
        background-color: #3c29297a!important;
    }

    .modal-content{
        width: 100%!important;
        position: absolute!important;
    }

    .error{
        color: #C41D1D;
    }
</style>
<script>
    export default {
        data: function (){
            return{
                titulo : '',
                descripcion : '',
                anio : 0,
                arrayGenero : [],
                arrayDirector : [],
                arrayClasificacion : [],
                arrayPelicula : [],
                idgenero : 0,
                idclasificacion : 0,
                iddirector : 0,
                modal : 0,
                tipoAccion : 0,
                error : 0,
                errorMostrarMsj : [],
                pelicula_id : 0
            }
        },
        methods : {
            /* Abrir modal para la creación y edición de un registro */
            abrirModal(data = []){
                this.modal = 1;
                this.titulo = data['titulo'];
                this.descripcion = data['descripcion'];
                this.anio = data['anio'];
                this.pelicula_id = data['id'];
                this.idgenero = data['idgenero'];
                this.idclasificacion = data['idclasificacion'];
                this.iddirector = data['iddirector'];
                //this.selectCategoria();
            },
            /* Cierre de modal */
            cerrarModal(){
                this.modal = 0;
                this.titulo = '';
                this.descripcion = '';
                this.anio = 0;
                this.error = 0;
                this.idgenero = 0;
                this.idclasificacion = 0;
                this.iddirector = 0;
            },
            /* Mostrar todos los registros */
            leerRegistros(){
                var app = this;
                axios.get('/sistema-vuelaravel/public/pelicula').then(function (resp) {
                    app.arrayPelicula = resp.data;
                }).catch(function (resp) {
                    console.log(resp);
                    alert("No se pudieron cargar las articulos");
                });
            },
            /* Validación de errores en el registro */
            validar(){
                this.error = 0;
                this.errorMostrarMsj = [];

                if (!this.titulo)
                this.errorMostrarMsj.push("Rellene el campo titulo");
              if (!this.idgenero)
                this.errorMostrarMsj.push("Seleccione un genero");
              if (!this.idclasificacion)
                this.errorMostrarMsj.push("Seleccione una clasificiación");
              if (!this.iddirector)
                this.errorMostrarMsj.push("Seleccione al director");
                if (this.errorMostrarMsj.length)
                    this.error = 1;

            return this.error;
            },
            /* Creación de un registro */
            registrar(){
                //Si devuelve 1 es porque hay un error, si devuelve 0 procede a registrar
                if(this.validar()){
                    return;
                }
                let me = this; //Referencia al mismo archivo
                axios.post('/sistema-vuelaravel/public/pelicula/registrar', {
                    'titulo': this.titulo,
                    'descripcion': this.descripcion,
                    'anio': this.anio,
                    'idgenero': this.idgenero,
                    'iddirector': this.iddirector,
                    'idclasificacion': this.idclasificacion
                  }).then(function (response) {
                    me.cerrarModal();
                    me.leerRegistros();
                  }).catch(function (error) {
                    console.log(error);
                  });
            },
            /* Edición de un registro */
            actualizar(){
                if(this.validar()){
                    return;
                }
                /*Actualización de articulos*/
                let me = this; //Referencia al mismo archivo
                axios.put('/sistema-vuelaravel/public/pelicula/actualizar', {
                    'titulo': this.titulo,
                    'descripcion': this.descripcion,
                    'anio' : this.anio,
                    'idgenero' : this.idgenero,
                    'iddirector' : this.iddirector,
                    'id' : this.pelicula_id,
                    'idclasificacion' : this.idclasificacion,
                  }).then(function (response) {
                    me.cerrarModal();
                    me.leerRegistros();
                  }).catch(function (error) {
                    console.log(error);
                  });
            },
            /* Eliminación de un registro con sweetalert */
            eliminar(id){
                swal({
                  title: "¿Estás seguro?",
                  text: "Una vez eliminado, no podrás recuperar el registro",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    var me = this;
                    axios.post('/sistema-vuelaravel/public/pelicula/eliminar/' + id)
                    .then(function (response) {
                    me.leerRegistros();  
                    }).catch(function (error) {
                    console.log(error);
                    });
                    swal("El registro fue eliminado con éxito", {
                      icon: "success",
                    });
                  } else {
                    swal("Tu registro no fue eliminado");
                  }
                });
            },
            selectDirector(){

              let me = this;
              var url = '/sistema-vuelaravel/public/director/selectCategoria';
                axios.get(url).then(function (response) {
                    me.arrayCategoria = response.data.categorias;
                }).catch(function (response) {
                    console.log(response);
                });
            },
            selectGenero(){

              let me = this;
              var url = '/sistema-vuelaravel/public/genero/selectGenero';
                axios.get(url).then(function (response) {
                    me.arrayCategoria = response.data.categorias;
                }).catch(function (response) {
                    console.log(response);
                });
            },
            selectClasificacion(){

              let me = this;
              var url = '/sistema-vuelaravel/public/clasificacion/selectClasificacion';
                axios.get(url).then(function (response) {
                    me.arrayCategoria = response.data.categorias;
                }).catch(function (response) {
                    console.log(response);
                });
            }
        },
        mounted() {
            this.leerRegistros();
            $('.selecto').select2();
        }
    }
</script>
