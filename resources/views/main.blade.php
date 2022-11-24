@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('check') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="matricula" class="form-label fw-bold">Matrícula</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" minlength="10" maxlength="10" style="text-transform:uppercase" required>
                            </div>
                            {{-- <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terminos" required>
                                <label class="form-check-label" for="terminos">Terminos y condiciones</label>
                            </div> --}}
                            <div class="d-grid gap">
                                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
