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
                        <form action="{{ route('estudio.cuatro.set') }}">
                            @csrf
                            {{-- 21 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="clase_social" class="form-label fw-bold">De acuerdo a sus ingresos, en que
                                        clase socioeconomica se ubicaría</label>
                                    <select class="form-select" id="clase_social" name="clase_social" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Alta</option>
                                        <option value="2">Media alta</option>
                                        <option value="3">Media</option>
                                        <option value="4">Media baja</option>
                                        <option value="5">Baja</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            {{-- 22 --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="casa" class="form-label fw-bold">La casa donde vives es:</label>
                                    <select class="form-select" id="casa" name="casa" required>
                                        <option selected disabled selected>Seleccione alguna opción</option>
                                        <option value="1">Propia</option>
                                        <option value="2">Se está pagando</option>
                                        <option value="3">Es rentada</option>
                                        <option value="4">Otro</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" id="casa_especifique" style="display: none">
                                    <label for="casa_otro" class="form-label fw-bold">Especifique:</label>
                                    <input type="text" class="form-control" id="casa_otro" name="casa_otro" disabled
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="casa_habitaciones" class="form-label fw-bold">Con cuantas habitaciones
                                    cuenta:</label>
                                <input type="text" class="form-control" id="casa_habitaciones" name="casa_habitaciones"
                                    required>
                            </div>
                            <hr>
                            <div><label for="" class="form-label fw-bold">Especifique con qué servicios
                                    cuenta:</label></div>
                            <div class="form-check form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="casa_agua"
                                        name="casa_agua">
                                    <label class="form-check-label" for="casa_agua">
                                        Agua
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="casa_drenaje"
                                        name="casa_drenaje">
                                    <label class="form-check-label" for="casa_drenaje">
                                        Drenaje
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="casa_luz"
                                        name="casa_luz">
                                    <label class="form-check-label" for="casa_luz">
                                        Luz
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="casa_pavimento"
                                        name="casa_pavimento">
                                    <label class="form-check-label" for="casa_pavimento">
                                        Pavimento
                                    </label>
                                </div>
                                <label class="form-check-label form-inline" for="casa_otro">
                                    Otro:
                                </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-control form-inline" type="text" value="" id="casa_otro"
                                        name="casa_otro">
                                </div>
                            </div>

                            <hr>
                            {{-- 23 --}}
                            <label for="" class="fw-bold">SEÑALE CON CUÁNTOS DE LOS SIGUIENTES BIENES Y APARATOS
                                CUENTA EN SU CASA:</label>
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
                            {{-- 24 --}}
                            <label class="form-label fw-bold">Señale los vehiculos que posee en casa,
                                de un click en "Añadir vehiculo" por cada uno y complete los campos requeridos:</label>
                            <button class="btn btn-secondary" id="crear_auto">Añadir vehiculo +</button>
                            <br>
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
        $('#casa').change(function (e) { 
            e.preventDefault();
            if(parseInt(this.value) === 4){
                $('#casa_especifique').show();
                $('#casa_otro').prop('disabled', false);
            }else{
                $('#casa_especifique').hide();
                $('#casa_otro').prop('disabled', true);
            }
        });

        $('#crear_auto').click(function (e) { 
            e.preventDefault();
            $('#auto').append(`
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="auto_marca" class="form-label fw-bold">Marca:</label>
                            <input type="text" class="form-control" id="auto_marca"
                                name="auto_marca[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auto_modelo" class="form-label fw-bold">Modelo:</label>
                            <input type="text" class="form-control" id="auto_modelo" name="auto_modelo[]"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auto_valor" class="form-label fw-bold">Valor comercial:</label>
                            <input type="text" class="form-control" id="auto_valor"
                                name="auto_valor[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auto_cantidad" class="form-label fw-bold">Cantidad que se adeuda en pesos(M.N.):</label>
                            <input type="text" class="form-control" id="auto_cantidad"
                                name="auto_cantidad[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auto_plazos" class="form-label fw-bold">Plazo en meses:</label>
                            <input type="text" class="form-control" id="auto_plazos"
                                name="auto_plazos[]" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auto_pago" class="form-label fw-bold">Pago mensual:</label>
                            <input type="text" class="form-control" id="auto_pago"
                                name="auto_pago[]" required>
                        </div>
                    </div>`);
        });

       
    </script>
@endsection
