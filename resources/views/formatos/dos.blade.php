@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-3">2. Informacion familiar</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('estudio.dos.set') }}" method="POST">
                            @csrf
                            {{-- 1. --}}

                            {{-- 6 --}}
                            {{-- <hr> --}}
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="padres" class="form-label fw-bold">Viven sus padres:</label>
                                    <select class="form-select" id="padres" name="padres" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Ambos</option>
                                        <option value="2">Solo el padre</option>
                                        <option value="3">Solo la madre</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="padres_edad_padre" class="form-label fw-bold">Edad del padre:</label>
                                    <input type="text" class="form-control" id="padres_edad_padre"
                                        name="padres_edad_padre" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="padres_edad_madre" class="form-label fw-bold">Edad de la madre:</label>
                                    <input type="text" class="form-control" id="padres_edad_madre"
                                        name="padres_edad_madre" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padres_juntos" class="form-label fw-bold">Viven juntos:</label>
                                    <select class="form-select" id="padres_juntos" name="padres_juntos" aria-label=""
                                        required>
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padres_civil" class="form-label fw-bold">Estado civil de los
                                        padres</label>
                                    <select class="form-select" id="padres_civil" name="padres_civil" aria-label=""
                                        required>
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Casada(o)s</option>
                                        <option value="2">Unión libre</option>
                                        <option value="3">Viuda(o)</option>
                                        <option value="4">Divorciada(o)</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="padres_padre_escolaridad" class="form-label fw-bold">Escolaridad maxima
                                        del padre</label>
                                    <select class="form-select" id="padres_padre_escolaridad"
                                        name="padres_padre_escolaridad" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Primaria</option>
                                        <option value="2">Secundaria</option>
                                        <option value="3">Licenciatura</option>
                                        <option value="4">Postgrado</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padres_madre_escolaridad" class="form-label fw-bold">Escolaridad maxima de
                                        la madre</label>
                                    <select class="form-select" id="padres_madre_escolaridad"
                                        name="padres_madre_escolaridad" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Primaria</option>
                                        <option value="2">Secundaria</option>
                                        <option value="3">Licenciatura</option>
                                        <option value="4">Postgrado</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            {{-- 10 --}}
                            <h4 class="mb-3">Cuál es la principal ocupación remunerada que tienen sus padres o tutores
                                actualmente:</h4>
                            <hr>
                            <h4 class="mb-3">Padre:</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="padre_nombre" class="form-label fw-bold">Nombre completo:</label>
                                    <input type="text" class="form-control" id="padre_nombre" name="padre_nombre"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padre_trabajo" class="form-label fw-bold">Lugar de trabajo:</label>
                                    <input type="text" class="form-control" id="padre_trabajo" name="padre_trabajo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padre_cargo" class="form-label fw-bold">Cargo o puesto que
                                        desempeña:</label>
                                    <input type="text" class="form-control" id="padre_cargo" name="padre_cargo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padre_tiempo" class="form-label fw-bold">Tiempo laborando en la
                                        empresa:</label>
                                    <input type="text" class="form-control" id="padre_tiempo" name="padre_tiempo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padre_domicilio" class="form-label fw-bold">Domicilio de la
                                        empresa:</label>
                                    <input type="text" class="form-control" id="padre_domicilio"
                                        name="padre_domicilio">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padre_telefono" class="form-label fw-bold">Telefono de la empresa:</label>
                                    <input type="text" class="form-control" id="padre_telefono"
                                        name="padre_telefono">
                                </div>
                            </div>
                            <hr>
                            <h4 class="mb-3">Madre:</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="madre_nombre" class="form-label fw-bold">Nombre completo:</label>
                                    <input type="text" class="form-control" id="madre_nombre" name="madre_nombre"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="madre_trabajo" class="form-label fw-bold">Lugar de trabajo:</label>
                                    <input type="text" class="form-control" id="madre_trabajo" name="madre_trabajo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="madre_cargo" class="form-label fw-bold">Cargo o puesto que
                                        desempeña:</label>
                                    <input type="text" class="form-control" id="madre_cargo" name="madre_cargo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="madre_tiempo" class="form-label fw-bold">Tiempo laborando en la
                                        empresa:</label>
                                    <input type="text" class="form-control" id="madre_tiempo" name="madre_tiempo">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="madre_domicilio" class="form-label fw-bold">Domicilio de la
                                        empresa:</label>
                                    <input type="text" class="form-control" id="madre_domicilio"
                                        name="madre_domicilio">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="madre_telefono" class="form-label fw-bold">Telefono de la empresa:</label>
                                    <input type="text" class="form-control" id="madre_telefono"
                                        name="madre_telefono">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="module">
        // Carga
        $(document).ready(() => {
            axios.get('/entidades').
            then(response => {
                response.data.map((e) => {
                    $('#estado').append('<option value="' + e.cve_ent +
                        '">' + e.nom_ent + '</option>');
                });
            });
        });

        // Cambio
        $('#estado').change(function(e) {
            e.preventDefault();
            // Municipios 
            axios.get('/municipios', {
                params: {
                    cve_ent: this.value
                }
            }).
            then(response => {
                $('#municipio')
                    .prop('disabled', false)
                    .empty()
                    .append(
                        '<option value="" disabled hidden selected>Seleccione una opción</option>'
                    );
                response.data.map((e) => {
                    $('#municipio')
                        .append('<option value="' + e.cve_mun + '">' + e.nom_mun +
                            '</option>');
                });
            });
        });

        $('#municipio').change(function(e) {
            e.preventDefault();

            // Localidades 
            axios.get('/localidades', {
                params: {
                    cve_mun: this.value
                }
            }).
            then(response => {
                $('#poblacion')
                    .prop('disabled', false)
                    .empty()
                    .append(
                        '<option value="" disabled hidden selected>Seleccione una opción</option>'
                    );
                response.data.map((e) => {
                    $('#poblacion')
                        .append('<option value="' + e.cve_loc + '">' + e.nom_loc +
                            '</option>');
                });

                // Colonias 
                axios.get('/colonias', {
                    params: {
                        c_mnpio: this.value
                    }
                }).
                then(response => {
                    $('#colonia')
                        .prop('disabled', false)
                        .empty()
                        .append(
                            '<option value="" disabled hidden selected>Seleccione una opción</option>'
                        );
                    response.data.map((e) => {
                        $('#colonia')
                            .append('<option value="' + e.id + '">' + e
                                .d_asenta +
                                '</option>');
                    });

                });
            });
        });
        // Actualiza el codigo postal y tipo de asentamiento
        $('#colonia').change(function(e) {
            e.preventDefault();
            axios.get('/cps', {
                params: {
                    id: this.value
                }
            }).then(response => {
                $('#cp').val(response.data[0].d_codigo);
            });
        });

        $('#beca').change(function (e) { 
            e.preventDefault();
            if(parseInt(this.value) === 1){
                $('#beca_si').show();
                $('#beca_tipo').prop('disabled', false);
                $('#beca_cantidad').prop('disabled', false);
                $('#beca_instituto').prop('disabled', false);
            }else{
                $('#beca_si').hide();
                $('#beca_tipo').prop('disabled',true);
                $('#beca_cantidad').prop('disabled',true);
                $('#beca_instituto').prop('disabled',true);
            }
        });

        $('#dependencia').change(function (e) { 
            e.preventDefault();
            if(this.value === 'Otro'){
                $('#dependencia_especifique').show();
                $('#dependencia_parentesco').prop('disabled', false);
                
            }else{
                console.log('no entra');
                $('#dependencia_especifique').hide();
                $('#dependencia_parentesco').prop('disabled', true);
            }
        });

        $('#residencia').change(function (e) { 
            e.preventDefault();
            if(this.value === 'Otro'){
                $('#residencia_especifique').show();
                $('#residencia_otro').prop('disabled', false);
            }else{
                console.log('no entra');
                $('#residencia_especifique').hide();
                $('#residencia_otro').prop('disabled', true);
            }
        });

        $('#trabajo').change(function (e) { 
            e.preventDefault();
            if(parseInt(this.value) === 1){
                $('#trabajo_si').show();
                $('#trabajo_nombre').prop('disabled', false);
                $('#trabajo_puesto').prop('disabled', false);
                $('#trabajo_tiempo').prop('disabled', false);
                $('#trabajo_telefono').prop('disabled', false);
                $('#trabajo_domicilio').prop('disabled', false);
            }else{
                console.log('no entra');
                $('#trabajo_si').hide();
                $('#trabajo_nombre').prop('disabled', true);
                $('#trabajo_puesto').prop('disabled', true);
                $('#trabajo_tiempo').prop('disabled', true);
                $('#trabajo_telefono').prop('disabled', true);
                $('#trabajo_domicilio').prop('disabled', true);
            }
        });

        $('#crear_familiar_gastos').click(function (e) { 
            e.preventDefault();
            $('#familiar_gastos').append(`
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="familiar_nombre" class="form-label fw-bold">Nombre:</label>
                            <input type="text" class="form-control" id="familiar_nombre"
                                name="familiar_nombre[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="familiar_edad" class="form-label fw-bold">Edad:</label>
                            <input type="text" class="form-control" id="familiar_edad" name="familiar_edad[]"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="familiar_parentesco" class="form-label fw-bold">Parentesco:</label>
                            <input type="text" class="form-control" id="familiar_parentesco"
                                name="familiar_parentesco[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="familiar_ocupacion" class="form-label fw-bold">Ocupación:</label>
                            <input type="text" class="form-control" id="familiar_ocupacion"
                                name="familiar_ocupacion[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="familiar_estudios" class="form-label fw-bold">Estudios maximos:</label>
                            <input type="text" class="form-control" id="familiar_estudios"
                                name="familiar_estudios[]" required>
                        </div>
                    </div>`);
        });

        $('#crear_familiar_casa').click(function (e) { 
            e.preventDefault();
            $('#familiar_casa').append(`
            <hr>
            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="casa_nombre" class="form-label fw-bold">Nombre:</label>
                                    <input type="text" class="form-control" id="casa_nombre" name="casa_nombre[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="casa_edad" class="form-label fw-bold">Edad:</label>
                                    <input type="text" class="form-control" id="casa_edad" name="casa_edad[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="casa_parentesco" class="form-label fw-bold">Parentesco:</label>
                                    <input type="text" class="form-control" id="casa_parentesco"
                                        name="casa_parentesco[]" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="casa_ocupacion" class="form-label fw-bold">Ocupación:</label>
                                    <input type="text" class="form-control" id="casa_ocupacion"
                                        name="casa_ocupacion[]" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="casa_estudios" class="form-label fw-bold">Estudios maximos:</label>
                                    <input type="text" class="form-control" id="casa_estudios"
                                        name="casa_estudios[]" required>
                                </div>
                            </div>
            `);
        });

        $('#crear_familiar_instituto').click(function (e) { 
            e.preventDefault();
            $('#familiar_instituto').append(`
            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="insituto_familiar" class="form-label fw-bold">Nombre:</label>
                                    <input type="text" class="form-control" id="insituto_familiar"
                                        name="insituto_familiar[]" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="instituto_nivel" class="form-label fw-bold">Nivel de estudio:</label>
                                    <input type="text" class="form-control" id="instituto_nivel"
                                        name="instituto_nivel[]" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="instituto_nombre" class="form-label fw-bold">Institución:</label>
                                    <input type="text" class="form-control" id="instituto_nombre"
                                        name="instituto_nombre[]" required>
                                </div>
                            </div>
            `);
        });
        $('#crear_auto').click(function (e) { 
            e.preventDefault();
            $('#auto').append(`
            <hr>
            <div class="row" id="">
                                <div class="col-md-6 mb-3">
                                    <label for="auto_marca" class="form-label fw-bold">Marca:</label>
                                    <input type="text" class="form-control" id="auto_marca" name="auto_marca[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="auto_modelo" class="form-label fw-bold">Modelo:</label>
                                    <input type="text" class="form-control" id="auto_modelo" name="auto_modelo[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="auto_valor" class="form-label fw-bold">Valor comercial actual:</label>
                                    <input type="text" class="form-control" id="auto_valor" name="auto_valor[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="auto_cantidad" class="form-label fw-bold">Cantidad en que se adeuda en
                                        pesos:</label>
                                    <input type="text" class="form-control" id="auto_cantidad" name="auto_cantidad[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="auto_plazos" class="form-label fw-bold">Plazo en meses:</label>
                                    <input type="text" class="form-control" id="auto_plazos" name="auto_plazos[]"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="auto_pago" class="form-label fw-bold">Pago mensual:</label>
                                    <input type="text" class="form-control" id="auto_pago" name="auto_pago[]"
                                        required>
                                </div>
                            </div>
            `);
        });
    </script>
@endsection
