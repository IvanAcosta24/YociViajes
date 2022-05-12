@extends('layouts.master')
@section('titulo','Cotización')
@section('contenido')

<div class="contain__form">
    <div class="card">
        <form>
            <fieldset>
                <h2>Cotizar servicio</h2>
                <label for="disabledTextInput" class="instructor">Es importante llenar los campos marcados <span class="ast">*</span></label>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Circuito:</label>
                    <input  disabled type="text" id="disabledTextInput" class="form-control" placeholder="CIRCUITO CHICHEN ITZÁ">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">nombre completo<span class="ast">*</span>:</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Escriba su nombre" required>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">número celular:</label>
                    <input type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="disabledTextInput" class="form-control" placeholder="Escriba su número">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">correo electrónico<span class="ast">*</span>:</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Escriba su email" required>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Comentarios:</label>
                    <textarea class="form-control" rows="5" placeholder="Escriba algún comentario"></textarea>
                </div>
                <button type="submit" class="btn__cotizar">¡COTIZAR YA!</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection

@push('scripts')



@endpush
