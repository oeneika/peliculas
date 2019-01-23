<template>
  <div>
    <div class="row">
      <div class="col-xs-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">CRUD Directores</h4>
                  <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
              </div>

              <div class="card-body collapse in">
                <div class="card-block">
                  <form class="form">
                    <div class="form-body">
                      <h4 class="form-section"><i class="icon-head"></i> Registrar datos del director</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput1">Nombre</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="Nombre" name="fname">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput1">Apellido</label>
                            <input type="text" id="projectinput1" class="form-control" placeholder="Apellido" name="fname">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="projectinput1">Peliculas dirigidas</label>
                            <select class="selecto form-control width100" name="states">
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
                            <label>Sexo</label>
                            <div class="input-group">
                              <label class="display-inline-block custom-control custom-radio ml-1">
                                <input type="radio" name="hombre" checked class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description ml-0">Hombre</span>
                              </label>
                              <label class="display-inline-block custom-control custom-radio">
                                <input type="radio" name="mujer" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description ml-0">Mujer</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    <div class="padding20-0">
                      <button type="button" class="btn btn-info">Agregar Director</button>
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
                          <tr>
                              <td>
                                <div class="btn-group mr-1 mb-1">
                                      <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                      <div class="dropdown-menu">
                                          <button class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Editar</button>
                                          <button class="dropdown-item" href="#">Eliminar</button>
                                      </div>
                                </div>
                              </td>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem totam, cupiditate delectus nobis odit odio tempora vel dicta rem eveniet necessitatibus inventore vitae labore, enim sed ipsam voluptatem consequuntur nihil?</td>
                              <td>1234</td>
                              <td>Comedia</td>
                              <td>Lorem ipsum dolor sit</td>
                              <td>C</td>
                          </tr>
                          <tr>
                              <td>
                                <div class="btn-group mr-1 mb-1">
                                      <button type="button" class="btn btn-secondary btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                      <div class="dropdown-menu">
                                          <button class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Editar</button>
                                          <button class="dropdown-item" href="#">Eliminar</button>
                                      </div>
                                </div>
                              </td>
                              <th scope="row">2</th>
                              <td>Mark</td>
                              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem totam, cupiditate delectus nobis odit odio tempora vel dicta rem eveniet necessitatibus inventore vitae labore, enim sed ipsam voluptatem consequuntur nihil?</td>
                              <td>1234</td>
                              <td>Comedia</td>
                              <td>Lorem ipsum dolor sit</td>
                              <td>C</td>
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

<script>
    export default {
        mounted() {
            console.log('CRUD MOVIES');
            $('.selecto').select2();
        }
    }
</script>