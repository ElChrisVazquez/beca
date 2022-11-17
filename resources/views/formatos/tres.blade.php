@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-3">3. Gastos familiares</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <h3 class="mb-3">En caso de existir más personas que aporten al gasto familiar, específique
                                los siguientes datos:</h3>
                            <button class="btn btn-secondary" id="crear_familiar_gastos">Añadir persona +</button>
                            <div id="familiar_gastos"></div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="hermanos" class="form-label fw-bold">Cuantos hermanos tiene:</label>
                                    <input type="text" class="form-control" id="hermanos" name="hermanos" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="hermanos_residen" class="form-label fw-bold">Cuantos hermanos viven en su
                                        domicilio:</label>
                                    <input type="text" class="form-control" id="hermanos_residen" name="hermanos_residen"
                                        required>
                                </div>
                            </div>
                            {{-- 12 --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="dependencia" class="form-label fw-bold">Cuantas personas dependen
                                        economicamente de quien(es) sositenen la familia (incluyendote):</label>
                                    <input type="text" class="form-control" id="dependencia" name="dependencia" required>
                                </div>
                            </div>
                            {{-- 13 --}}
                            <hr>
                            Cuantas personas personas habitan la casa en que vives incluyendote
                            <button class="btn btn-secondary" id="crear_familiar_casa">Añadir persona +</button>
                            <div id="familiar_casa"></div>

                            {{-- 14 --}}
                            <hr>
                            En caso de que algun integrante de la familiar este estudiando, indique en que institución.
                            <button class="btn btn-secondary" id="crear_familiar_instituto">Añadir persona +</button>
                            <div id="familiar_instituto"></div>

                            <hr>
                            {{-- 15 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="seguro" class="form-label fw-bold">A que regimen de seguridad social se
                                        encuentra el incorporado(a)</label>
                                    <select class="form-select" id="seguro" name="seguro" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option>ISSTE</option>
                                        <option>IMS</option>
                                        <option>Asistencia publica</option>
                                        <option>Particular</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="seguro_otro" class="form-label fw-bold">Especifique:</label>
                                    <input type="text" class="form-control" id="seguro_otro" name="seguro_otro" required>
                                </div>
                            </div>
                            <hr>
                            {{-- 16 --}}
                            <div class="col-md-6 mb-3">
                                <label for="familia_trabajo" class="form-label fw-bold">De las personas que viven en tu
                                    casa, cuantas trabajan o realizan alguna actividad por el cual ganen dinero:</label>
                                <input type="text" class="form-control" id="familia_trabajo" name="familia_trabajo"
                                    required>
                            </div>
                            <hr>
                            {{-- 17 --}}
                            <div class="col-md-6 mb-3">
                                <label for="familia_aporte" class="form-label fw-bold">De esas personas que trabajan
                                    cuantas aportan al gasto familiar:</label>
                                <input type="text" class="form-control" id="familia_aporte" name="familia_aporte"
                                    required>
                            </div>
                            <hr>
                            Ingreso mensual de su familia
                            {{-- 18 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_propio" class="form-label fw-bold">Ingreso propio:</label>
                                    <input type="text" class="form-control" id="ingreso_propio" name="ingreso_propio"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_padre" class="form-label fw-bold">Ingreso del padre o
                                        tutor:</label>
                                    <input type="text" class="form-control" id="ingreso_padre" name="ingreso_padre"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_conyuge" class="form-label fw-bold">Ingreso del conyuge:</label>
                                    <input type="text" class="form-control" id="ingreso_conyuge" name="ingreso_conyuge"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_hermanos" class="form-label fw-bold">Ingreso de los
                                        hermanos:</label>
                                    <input type="text" class="form-control" id="ingreso_hermanos" name="ingreso_hermanos"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_madre" class="form-label fw-bold">Ingreso de la madre:</label>
                                    <input type="text" class="form-control" id="ingreso_madre" name="ingreso_madre"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ingreso_otro" class="form-label fw-bold">Otros ingresos:</label>
                                    <input type="text" class="form-control" id="ingreso_otro" name="ingreso_otro"
                                        required>
                                </div>
                            </div>
                            {{-- 19 --}}
                            Cuanto es el gasto mensual de tu familia en los siguientes conceptos:
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_alimentos" class="form-label fw-bold">Alimentos:</label>
                                    <input type="text" class="form-control" id="gasto_alimentos"
                                        name="gasto_alimentos" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gastos_despensa" class="form-label fw-bold">Despensa:</label>
                                    <input type="text" class="form-control" id="gastos_despensa"
                                        name="gastos_despensa" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gastos_limpieza" class="form-label fw-bold">Productos de limpieza:</label>
                                    <input type="text" class="form-control" id="gastos_limpieza"
                                        name="gastos_limpieza" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_telefono" class="form-label fw-bold">Teléfono:</label>
                                    <input type="text" class="form-control" id="gasto_telefono" name="gasto_telefono"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_domestico" class="form-label fw-bold">Servicios domésticos:</label>
                                    <input type="text" class="form-control" id="gasto_domestico"
                                        name="gasto_domestico" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_auto" class="form-label fw-bold">Pago crédito de automóvil:</label>
                                    <input type="text" class="form-control" id="gasto_auto" name="gasto_auto"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_tarjetas" class="form-label fw-bold">Tarjetas de crédito:</label>
                                    <input type="text" class="form-control" id="gasto_tarjetas" name="gasto_tarjetas"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_ropa" class="form-label fw-bold">Ropa y alimento:</label>
                                    <input type="text" class="form-control" id="gasto_ropa" name="gasto_ropa"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_personal" class="form-label fw-bold">Gastos personales:</label>
                                    <input type="text" class="form-control" id="gasto_personal" name="gasto_personal"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_colegiatura_propia" class="form-label fw-bold">Colegiatura del
                                        solicitante:</label>
                                    <input type="text" class="form-control" id="gasto_colegiatura_propia"
                                        name="gasto_colegiatura_propia" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_colegiatura_otros" class="form-label fw-bold">Colegiatura de otro
                                        miembro de la familia:</label>
                                    <input type="text" class="form-control" id="gasto_colegiatura_otros"
                                        name="gasto_colegiatura_otros" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_diversion" class="form-label fw-bold">Diversion y
                                        entretenimiento:</label>
                                    <input type="text" class="form-control" id="gasto_diversion"
                                        name="gasto_diversion" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_libros" class="form-label fw-bold">Libros y materiales:</label>
                                    <input type="text" class="form-control" id="gasto_libros" name="gasto_libros"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_renta" class="form-label fw-bold">Renta y/o predial:</label>
                                    <input type="text" class="form-control" id="gasto_renta" name="gasto_renta"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_luz" class="form-label fw-bold">Luz:</label>
                                    <input type="text" class="form-control" id="gasto_luz" name="gasto_luz" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_agua" class="form-label fw-bold">Agua:</label>
                                    <input type="text" class="form-control" id="gasto_agua" name="gasto_agua"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_transporte" class="form-label fw-bold">Transporte:</label>
                                    <input type="text" class="form-control" id="gasto_transporte"
                                        name="gasto_transporte" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_celular" class="form-label fw-bold">Celular:</label>
                                    <input type="text" class="form-control" id="gasto_celular" name="gasto_celular"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_cable" class="form-label fw-bold">Cable:</label>
                                    <input type="text" class="form-control" id="gasto_cable" name="gasto_cable"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_seguros" class="form-label fw-bold">Seguros de vida, auto, casa,
                                        médico:</label>
                                    <input type="text" class="form-control" id="gasto_seguros" name="gasto_seguros"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_internet" class="form-label fw-bold">Internet:</label>
                                    <input type="text" class="form-control" id="gasto_internet" name="gasto_internet"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_gas" class="form-label fw-bold">Gas:</label>
                                    <input type="text" class="form-control" id="gasto_gas" name="gasto_gas" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_hipoteca" class="form-label fw-bold">Pago hipoteca:</label>
                                    <input type="text" class="form-control" id="gasto_hipoteca" name="gasto_hipoteca"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_medicos" class="form-label fw-bold">Gastos médocos:</label>
                                    <input type="text" class="form-control" id="gasto_medicos" name="gasto_medicos"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_vacaciones" class="form-label fw-bold">Vacaciones:</label>
                                    <input type="text" class="form-control" id="gasto_vacaciones"
                                        name="gasto_vacaciones" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_otros" class="form-label fw-bold">Otros gastos:</label>
                                    <input type="text" class="form-control" id="gasto_otros" name="gasto_otros"
                                        required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <label for="gasto_total" class="form-label fw-bold">Gastos total:</label>
                                    <input type="text" class="form-control" id="gasto_total" name="gasto_total"
                                        required>
                                </div>
                            </div>

                            <hr>
                            {{-- 20 --}}
                            Si eres foraneo, infique la cantidad mensual que paga por los siguientes conceptos:
                            <small>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_colegiatura" class="form-label fw-bold">Colegiatura:</label>
                                        <input type="text" class="form-control" id="foraneo_colegiatura"
                                            name="foraneo_colegiatura" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_ropa" class="form-label fw-bold">Ropa:</label>
                                        <input type="text" class="form-control" id="foraneo_ropa" name="foraneo_ropa"
                                            required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_vivienda" class="form-label fw-bold">Vivienda:</label>
                                        <input type="text" class="form-control" id="foraneo_vivienda"
                                            name="foraneo_vivienda" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_libros" class="form-label fw-bold">Libros:</label>
                                        <input type="text" class="form-control" id="foraneo_libros"
                                            name="foraneo_libros" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_lavanderia" class="form-label fw-bold">Lavandería:</label>
                                        <input type="text" class="form-control" id="foraneo_lavanderia"
                                            name="foraneo_lavanderia" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_transporte_local" class="form-label fw-bold">Transporte
                                            local:</label>
                                        <input type="text" class="form-control" id="foraneo_transporte_local"
                                            name="foraneo_transporte_local" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_personal" class="form-label fw-bold">Gastos
                                            personales:</label>
                                        <input type="text" class="form-control" id="foraneo_personal"
                                            name="foraneo_personal" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_transporte_foraneo"
                                            class="form-label fw-bold">Colegiatura:</label>
                                        <input type="text" class="form-control" id="foraneo_transporte_foraneo"
                                            name="foraneo_transporte_foraneo" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_comida" class="form-label fw-bold">Comida:</label>
                                        <input type="text" class="form-control" id="foraneo_comida"
                                            name="foraneo_comida" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-3">
                                        <label for="foraneo_total" class="form-label fw-bold">Gasto total mensual:</label>
                                        <input type="text" class="form-control" id="foraneo_total"
                                            name="foraneo_total" required>
                                    </div>
                                </div>
                            </small>
                            <hr>

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
