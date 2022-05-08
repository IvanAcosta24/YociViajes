@extends('layouts.dashboard')
@section('contenido')
    <div class="row p-3" id="flyer">
        {{-- Fyers --}}
        <div class="col-sm-12 col-xs-12 mb-3">
            <div class="card card-success card-outline mb-3 shadow">
                <div class="card-body row">
                    <div class="mb-3">
                        <button class="btn btn-outline-color-logo" @click="showModalAddFlyer()">
                            Agregar flyer
                        </button>
                    </div>
                    <div v-if="flyers.length == 0">
                        <div class="alert alert-danger m-0">
                            <p>No se encontraron registros</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3" v-for="flyer in flyers">
                        <div class="card-content text-center shadow rounded-3">
                            <div class="card-body content p-0">
                                <img :src="`${flyer . flyer_path}`" class="card-img-top" alt="photo">
                            </div>
                            <div class="card-footer mb-3">
                                <button class="btn btn-outline-danger" @click="deleteFlyer(flyer.id)">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal save flyer --}}
        <!-- Scrollable modal -->
        <div class="modal" tabindex="-1" id="selectFlyer">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title ">Guardar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="bar"></div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3" v-if="flyer_preview">
                                    <img class="shadow" :src="flyer_preview" alt="flyer_preview" width="200px"
                                        style="display: block; margin-left: auto; margin-right:auto">
                                </div>
                                <div class="mb-3">
                                    <label for="flyer" class="form-label">Select a Flyer</label>
                                    <input class="form-control" type="file" name="flyer" @change="selectFlyer">
                                    <div v-if="errors && errors.flyer">
                                        <small class="text-danger">@{{ errors.flyer[0] }}</small>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-color-logo" @click="saveFlyer()">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/admin/flyer.js') }}"></script>
@endpush
<input type="hidden" name="route" value="{{ url('/') }}">
