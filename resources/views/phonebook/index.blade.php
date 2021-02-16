@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Listagem de Agendamentos</p>
                    <a class="btn btn-success" href="{{ route('phonebooks.create') }}">Novo Agendamento</a>
                    <a class="btn btn-success pull-right" href="{{ route('phonebooks.export') }}"><span class="glyphicon glyphicon-save"></span> .CSV</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ mb_strimwidth($contact->address, 0, 30, "...") }}</td>
                                    
                                    <td>
                                        <form action="{{ route('phonebooks.status', ['contact' => $contact->id]) }}" method="POST" >
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <input type="hidden" name="status" value="{{ $contact->status }}">
                                            <button type="submit" class="btn {{ $contact->status ? 'btn-danger' : 'btn-primary'}} btn-xs">{{ $contact->status ? 'inativar' : 'ativar'}}</button></span>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('phonebooks.edit', ['contact' => $contact->id ]) }}">Editar</a> |
                                        <a href="{{ route('phonebooks.show', ['contact' => $contact->id]) }}">Ver</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>

                    <div class="text-center">
                        <ul class="pagination">
                            {{ $contacts->links() }}
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
