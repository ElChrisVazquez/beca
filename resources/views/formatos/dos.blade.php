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
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="padres_madre_escolaridad" class="form-label fw-bold">Escolaridad maxima de
                                        la madre</label>
                                    <select class="form-select" id="padres_madre_escolaridad"
                                        name="padres_madre_escolaridad" aria-label="">
                                        <option selected disabled selected>Seleccione alguna opción</option>
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
        axios.get('/escolaridades').
        then(response => {
            response.data.map((e) => {
                $('#padres_padre_escolaridad, #padres_madre_escolaridad').append(
                    '<option value="' + e.id +
                    '">' + e.nombre + '</option>');
            });
        });
    </script>
@endsection
