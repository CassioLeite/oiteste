@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Contato</p>
                </div>
                
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{ route('phonebooks.edit', ['contact' => $contact->id]) }}">Editar</a>
                    <a class="btn btn-default" href="{{ url()->previous() }}">Voltar</a>
                    
                    <!-- Hidden form to DELETE record and "pass" browser's POST method -->
                    <form id="form-delete" style="display:none" method="post" action="{{ route('phonebooks.destroy', ['contact' => $contact->id]) }}">
                    {{-- Form::open(['route'=>['phonebooks.destroy',$contact->id],'method'=>'DELETE','id'=>'form-delete']) --}}    
                    {{-- Form::close() --}}
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>
                    <br/><br/>

                     <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">ID</th>
                                <td>{{ $contact->id }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Nome</th>
                                <td>{{ $contact->name }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Endereço</th>
                                <td>{{ $contact->address }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Galc</th>
                                <td>{{ $contact->galc }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Porta</th>
                                <td>{{ $contact->port }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Velocidade</th>
                                <td>{{ $contact->velocity }}</td>
                            </tr>

                            <tr>
                                <th scope="row">Status</th>
                                <td class="{{ $contact->status ? 'text-primary' : 'text-danger'}}">{{ $contact->status ? 'Ativo' : 'Inativo' }}</td>
                            </tr>    
                            
                        </tbody>
                     </table>
                        <br/>
                        <a class="btn btn-danger"  href="{{ route('phonebooks.destroy', ['contact' => $contact->id]) }}" 
                            onclick="event.preventDefault();
                                    if(confirm('Deseja excluir esse item?')) {
                                        document.getElementById('form-delete').submit();
                                    }
                                ">Deletar
                        </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
