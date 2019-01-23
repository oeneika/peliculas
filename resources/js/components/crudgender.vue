<template>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">CRUD Género</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
              <div class="card-block">
                <form class="form">
                  <div class="form-body">
                    <h4 class="form-section"><i class="icon-head"></i> Registrar género</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="projectinput1">Nombre</label>
                          <input type="text" id="projectinput1" class="form-control" placeholder="Nombre del género" name="fname">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <!-- -------- -->
                      </div>
                    </div>
                  </div>
                  <div class="padding20-0">
                    <button type="button" class="btn btn-info">Agregar Género</button>
                  </div>
                </form>
              </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Listado de Géneros</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>

            <div class="card-body collapse in">
              <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>Acciones</th>
                            <th>#</th>
                            <th>Nombre</th>
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
                            <td>Terror</td>
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
                            <td>Drama</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('CRUD GÉNERO')
        }
    }
</script>