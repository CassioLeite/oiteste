@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo Agendamento</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('phonebooks.update', ['contact' => $contact->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        @include('phonebook._form')

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="btn-store" type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                                <a class="btn btn-default" href="{{ url()->previous() }}">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/zipcode.js') }}"></script>
@endsection
