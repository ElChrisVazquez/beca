@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">

                        <h3 class="mb-3">4. Hogar y servicios</h3>
                    </div>

                    <div class="card-body">
                        <form>
                            @csrf
                            {{-- 1. --}}
                         
                          
                            {{-- 21 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="clase_social" class="form-label fw-bold">De acuerdo a sus ingresos, en que
                                        clase socioeconomica se ubicaría</label>
                                    <select class="form-select" id="clase_social" name="clase_social" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>Alta</option>
                                        <option>Baja</option>
                                        <option>Media</option>
                                        <option>Media baja</option>
                                        <option>Media alta</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            {{-- 22 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="casa" class="form-label fw-bold">La casa donde vives es:</label>
                                    <select class="form-select" id="casa" name="casa" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>Prppia</option>
                                        <option>Se está pagando</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="casa_otro" class="form-label fw-bold">Especifique:</label>
                                <input type="text" class="form-control" id="casa_otro" name="casa_otro" required>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="casa_agua"
                                    name="casa_agua">
                                <label class="form-check-label" for="casa_agua">
                                    Agua
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="casa_drenaje"
                                    name="casa_drenaje">
                                <label class="form-check-label" for="casa_drenaje">
                                    Drenaje
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="casa_luz"
                                    name="casa_luz">
                                <label class="form-check-label" for="casa_luz">
                                    Luz
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="casa_pavimento"
                                    name="casa_pavimento">
                                <label class="form-check-label" for="casa_pavimento">
                                    Pavimento
                                </label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="casa_otro" class="form-label fw-bold">Otros:</label>
                                <input type="text" class="form-control" id="casa_otro" name="casa_otro" required>
                            </div>

                            <hr>
                            {{-- 23 --}}
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_sala" class="form-label fw-bold">Sala:</label>
                                    <input type="text" class="form-control" id="casa_sala" name="casa_sala" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_internet" class="form-label fw-bold">Internet:</label>
                                    <input type="text" class="form-control" id="casa_internet" name="casa_internet"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_ventilador" class="form-label fw-bold">Ventilador:</label>
                                    <input type="text" class="form-control" id="casa_ventilador"
                                        name="casa_ventilador" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_comedor" class="form-label fw-bold">Comedor:</label>
                                    <input type="text" class="form-control" id="casa_comedor" name="casa_comedor"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_cable" class="form-label fw-bold">Cable:</label>
                                    <input type="text" class="form-control" id="casa_cable" name="casa_cable"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_computadora" class="form-label fw-bold">Computadora:</label>
                                    <input type="text" class="form-control" id="casa_computadora"
                                        name="casa_computadora" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_lavadora" class="form-label fw-bold">Lavadora:</label>
                                    <input type="text" class="form-control" id="casa_lavadora" name="casa_lavadora"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_impresora" class="form-label fw-bold">Impresora:</label>
                                    <input type="text" class="form-control" id="casa_impresora" name="casa_impresora"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_camas" class="form-label fw-bold">Camas:</label>
                                    <input type="text" class="form-control" id="casa_camas" name="casa_camas"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_tv" class="form-label fw-bold">TV:</label>
                                    <input type="text" class="form-control" id="casa_tv" name="casa_tv" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_secadora" class="form-label fw-bold">Secadora:</label>
                                    <input type="text" class="form-control" id="casa_secadora" name="casa_secadora"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_cochera" class="form-label fw-bold">Cochera:</label>
                                    <input type="text" class="form-control" id="casa_cochera" name="casa_cochera"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_banos" class="form-label fw-bold">Baños:</label>
                                    <input type="text" class="form-control" id="casa_banos" name="casa_banos"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_telefono" class="form-label fw-bold">Teléfono:</label>
                                    <input type="text" class="form-control" id="casa_telefono" name="casa_telefono"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_patio" class="form-label fw-bold">Patio:</label>
                                    <input type="text" class="form-control" id="casa_patio" name="casa_patio"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_estereo" class="form-label fw-bold">Estéreo:</label>
                                    <input type="text" class="form-control" id="casa_estereo" name="casa_estereo"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_refrigerador" class="form-label fw-bold">Refrigerador:</label>
                                    <input type="text" class="form-control" id="casa_refrigerador"
                                        name="casa_refrigerador" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_jardin" class="form-label fw-bold">Jardín:</label>
                                    <input type="text" class="form-control" id="casa_jardin" name="casa_jardin"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_celular" class="form-label fw-bold">Celular:</label>
                                    <input type="text" class="form-control" id="casa_celular" name="casa_celular"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_dvd" class="form-label fw-bold">DVD:</label>
                                    <input type="text" class="form-control" id="casa_dvd" name="casa_dvd" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_micro" class="form-label fw-bold">Microhondas:</label>
                                    <input type="text" class="form-control" id="casa_micro" name="casa_micro"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                    <label for="casa_fax" class="form-label fw-bold">Fax:</label>
                                    <input type="text" class="form-control" id="casa_fax" name="casa_fax" required>
                                </div>
                            </div>

                            <hr>
                            Señale los vehiculos que possen en casa
                            {{-- 24 --}}
                            <button class="btn btn-secondary" id="crear_auto">Añadir automovil +</button>
                            <div id="auto"></div>



                            <hr>
                            {{-- 25 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="zona" class="form-label fw-bold">La zona en la que vives es:</label>
                                    <select class="form-select" id="zona" name="zona" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>Rural</option>
                                        <option>Urbana</option>
                                        <option>Urbano marginada</option>
                                        <option>Indígena</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            {{-- 26 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="indigena" class="form-label fw-bold">Perteneces a una cominudad
                                        Indígena</label>
                                    <select class="form-select" id="indigena" name="indigena" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>Rural</option>
                                        <option>Urbana</option>
                                        <option>Urbano marginada</option>
                                        <option>Indígena</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            {{-- 27 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="discapacidad" class="form-label fw-bold">Sufre de alguna
                                        discapacidad</label>
                                    <select class="form-select" id="discapacidad" name="discapacidad" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>Si</option>
                                        <option>No</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="discapacidad_especifique" class="form-label fw-bold">Especifique:</label>
                                    <input type="text" class="form-control" id="discapacidad_especifique"
                                        name="discapacidad_especifique" required>
                                </div>
                            </div>

                            <hr>
                            {{-- 28 --}}

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="descripcion" class="form-label fw-bold">Describa brevemente
                                        la situación actual de su familia así como el objetivo que busca lograr con
                                        esta beca:</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="2" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terminos" required>
                                <label class="form-check-label" for="terminos">Terminos y condiciones</label>
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
