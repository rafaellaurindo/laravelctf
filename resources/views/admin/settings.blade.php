@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-appearance-tab" data-toggle="pill" href="#v-pills-appearance" role="tab" aria-controls="v-pills-appearance" aria-selected="true">Aparência</a>
                <a class="nav-link" id="v-pills-accounts-tab" data-toggle="pill" href="#v-pills-accounts" role="tab" aria-controls="v-pills-accounts" aria-selected="false">Contas</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-appearance" role="tabpanel" aria-labelledby="v-pills-appearance-tab">

                    <form action="{{ route('admin.settings.update') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nome do CTF:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome do CTF" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nome mostrado no menu e rodapé</small>
                        </div>

                        <button class="btn btn-primary float-right">Atualizar</button>
                    </form>

                </div>
                <div class="tab-pane fade" id="v-pills-accounts" role="tabpanel" aria-labelledby="v-pills-accounts-tab">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Usuários não registrados podem ver desafios
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Placar só pode ser visto por usuários logados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label">
                            Evitar alterações no nome da equipe
                        </label>
                    </div>
                </div>
            </div>
        </div>

    </div>


    {{--<form action="{{ route('admin.settings.update') }}" method="post">--}}
        {{--@csrf--}}

        {{--<div class="form-group">--}}
            {{--<label for="name">Nome:</label>--}}
            {{--<input type="text" name="name" id="name" class="form-control" placeholder="Nome da plataforma" aria-describedby="helpId">--}}
            {{--<small id="helpId" class="text-muted">Nome mostrado no menu e rodapé</small>--}}
        {{--</div>--}}

        {{--<button class="btn btn-primary">Salvar</button>--}}
    {{--</form>--}}
</div>
@endsection