@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-3">1. Informacion del solicitante</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('estudio.uno.set') }}" method="POST">
                            @csrf
                            {{-- 1. --}}
                            <div class="row">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="paterno" class="form-label fw-bold">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="paterno" name="paterno"
                                        value="{{ session('estudiante')->paterno }}"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" disabled>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="materno" class="form-label fw-bold">Apellido Materno</label>
                                    <input type="text" class="form-control" id="materno" name="materno"
                                        value="{{ session('estudiante')->materno }}"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" disabled>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="nombre" class="form-label fw-bold">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        value="{{ session('estudiante')->nombre }}"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="estado" class="form-label fw-bold">Estado</label>
                                    <select class="form-select" id="estado" name="estado" aria-label="">
                                        <option hidden>Seleccione alguna opción</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="municipio" class="form-label fw-bold">Municipio</label>
                                    <select class="form-select" id="municipio" name="municipio" aria-label="" disabled
                                        required>
                                        <option hidden>Seleccione alguna opción</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="poblacion" class="form-label fw-bold">Población</label>
                                    <select class="form-select" id="poblacion" name="poblacion" aria-label="" disabled
                                        required>
                                        <option hidden>Seleccione alguna opción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label for="calle" class="form-label fw-bold">Calle</label>
                                    <input type="text" class="form-control" id="calle" name="calle"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z]/g, '')" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 col-sm-6 mb-3">
                                    <label for="exterior" class="form-label fw-bold">Número exterior</label>
                                    <input type="text" class="form-control" id="exterior" name="exterior"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 col-sm-6 mb-3">
                                    <label for="interior" class="form-label fw-bold">Interior</label>
                                    <input type="text" class="form-control" id="interior" name="interior"
                                        oninput="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label for="colonia" class="form-label fw-bold">Colonia</label>
                                    <select class="form-select" id="colonia" name="colonia" aria-label="" disabled>
                                        <option selected>Seleccione alguna opción</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 mb-3">
                                    <label for="cp" class="form-label fw-bold">Código Postal</label>
                                    <input type="text" class="form-control" id="cp" name="cp"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="telefono" class="form-label fw-bold">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"required>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="celular" class="form-label fw-bold">Celular</label>
                                    <input type="text" class="form-control" id="celular" name="celular"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"required>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email"pattern="[A-z0-9._%+-]+@[A-z0-9.-]+\.[a-z]{2,4}$" required>
                                </div>
                            </div>

                            {{-- 2. --}}
                            {{-- <hr> --}}
                            {{-- <h3 class="mb-3">2. ¿Cuenta con apoyo o beca diferente al
                                solicitado?</h3> --}}
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="beca" class="form-label fw-bold">¿Cuenta con apoyo o beca diferente al
                                        solicitado?</label>
                                    <select class="form-select" id="beca" name="beca" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="beca_si" style="display: none">
                                <div class="col-md-4 mb-3">
                                    <label for="beca_tipo" class="form-label fw-bold">Tipo de beca</label>
                                    <input type="text" class="form-control" id="beca_tipo" name="beca_tipo"
                                        oninput="this.value = this.value.replace(/[^a-zA-z]/g, '')" required disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="beca_cantidad" class="form-label fw-bold">Cantidad</label>
                                    <input type="text" class="form-control"
                                        id="beca_cantidad"oninput="this.value = this.value.replace(/[^\d*\.?\d*$]/g, '')"name="beca_cantidad"
                                        placeholder="$0.00" required disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="beca_instituto" class="form-label fw-bold">Nombre del Instituto</label>
                                    <input type="text" class="form-control" id="beca_instituto" name="beca_instituto"
                                        oninput="this.value = this.value.replace(/[^a-zA-z]/g, '')" required disabled>
                                </div>
                            </div>

                            {{-- 3 --}}
                            {{-- <hr> --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="dependencia" class="form-label fw-bold">Depende econocimamente de:</label>
                                    <select class="form-select" id="dependencia" name="dependencia" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Padres</option>
                                        <option value="2">Tutores</option>
                                        <option value="3">Usted mismo</option>
                                        <option value="4">Otro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" id="dependencia_especifique" style="display: none">
                                    <label for="dependencia_parentesco" class="form-label fw-bold">Especifique:</label>
                                    <input type="text" class="form-control" id="dependencia_parentesco"
                                        name="dependencia_parentesco"
                                        oninput="this.value = this.value.replace(/[^a-zA-z]/g, '')" required disabled>
                                </div>
                            </div>

                            {{-- 4 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="residencia" class="form-label fw-bold">Vive con:</label>
                                    <select class="form-select" id="residencia" name="residencia" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Padres</option>
                                        <option value="2">Tutores</option>
                                        <option value="3">Solo</option>
                                        <option value="4">Conyuge</option>
                                        <option value="5">Otro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" id="residencia_especifique" style="display: none">
                                    <label for="residencia_otro" class="form-label fw-bold">Especifique:</label>
                                    <input type="text" class="form-control" id="residencia_otro"
                                        name="residencia_otro" oninput="this.value = this.value.replace(/[^a-zA-z]/g, '')"
                                        required disabled>
                                </div>
                            </div>

                            {{-- 5 --}}
                            {{-- <hr> --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo" class="form-label fw-bold">Trabaja actualmente:</label>
                                    <select class="form-select" id="trabajo" name="trabajo" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="trabajo_si" style="display: none">
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo_nombre" class="form-label fw-bold">Nombre de la empresa:</label>
                                    <input type="text" class="form-control" id="trabajo_nombre" name="trabajo_nombre"
                                        oninput="this.value = this.value.replace(/[^a-zA-z]/g, '')" required disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo_puesto" class="form-label fw-bold">Cargo o puesto que
                                        despempeña:</label>
                                    <input type="text" class="form-control" id="trabajo_puesto" name="trabajo_puesto"
                                        oninput="this.value = this.value.replace(/[^a-zA-z ]/g, '')" required disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo_tiempo" class="form-label fw-bold">Cuanto tiempo tiene laborando
                                        en la empresa:</label>
                                    <input type="text" class="form-control" id="trabajo_tiempo" name="trabajo_tiempo"
                                        required disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo_telefono" class="form-label fw-bold">Telefono:</label>
                                    <input type="text" class="form-control" id="trabajo_telefono"
                                        name="trabajo_telefono" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                        required disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="trabajo_domicilio" class="form-label fw-bold">Domicilio:</label>
                                    <input type="text" class="form-control" id="trabajo_domicilio"
                                        name="trabajo_domicilio" required disabled>
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
                    $('#estado').append('<option value="' + e.cd_ent +
                        '">' + e.nb_entidad + '</option>');
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
                        .append('<option value="' + e.cve_mun_conca + '">' + e.nom_mun +
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
                        .append('<option value="' + e.cve_loc_conca + '">' + e.nom_loc +
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
            if(this.value == '4'){
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
            if(this.value === '5'){
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
