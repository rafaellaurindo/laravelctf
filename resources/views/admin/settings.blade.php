@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Configurações gerais da plataforma</div>
                
                <div class="card-body">
                    <form action="{{ route('admin.settings.update') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome da plataforma" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Nome mostrado no menu e rodapé</small>
                        </div>

                        <button class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection