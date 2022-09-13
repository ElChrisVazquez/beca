@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form>
                            @csrf
                            <div class="mb-3">
                                <label for="matricula" class="form-label fw-bold">Matrícula</label>
                                <input type="email" class="form-control" id="matricula" required>
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
