{{--  name --}}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Nome</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name', isset($contact->name) ? $contact->name : '') }}"  autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
{{--  zipcode --}}
<div class="form-group">
    <label for="zipcode" class="col-md-4 control-label">Cep</label>
    <div class="col-md-6">
        <input id="zipcode" type="text" class="form-control" name="zipcode" onfocusout="getZipCode()" value="{{ old('zipcode', isset($contact->zipcode) ? $contact->zipcode : '') }}">
    </div>
</div>
{{--  street --}}
<div class="form-group">
    <label for="street" class="col-md-4 control-label">Rua</label>
    <div class="col-md-6">
        <input id="street" type="text" class="form-control" name="street" value="{{ old('street', isset($contact->street) ? $contact->street : '') }}">
    </div>
</div>
{{--  neighborhood --}}
<div class="form-group">
    <label for="neighborhood" class="col-md-4 control-label">Bairro</label>
    <div class="col-md-6">
        <input id="neighborhood" type="text" class="form-control" name="neighborhood" value="{{ old('neighborhood', isset($contact->neighborhood) ? $contact->neighborhood : '') }}" >
    </div>
</div>
{{--  city --}}
<div class="form-group">
    <label for="city" class="col-md-4 control-label">Cidade</label>
    <div class="col-md-6">
        <input id="city" type="text" class="form-control" name="city" value="{{ old('city', isset($contact->city) ? $contact->city : '') }}" >
    </div>
</div>
{{--  uf --}}
<div class="form-group">
    <label for="uf" class="col-md-4 control-label">Estado</label>
    <div class="col-md-6">
        <input id="uf" type="text" class="form-control" name="uf" value="{{ old('uf', isset($contact->uf) ? $contact->uf : '') }}">
    </div>
</div>
{{--  number --}}
<div class="form-group">
    <label for="number" class="col-md-4 control-label">Nº</label>
    <div class="col-md-6">
        <input id="number" type="text" class="form-control" name="number" value="{{ old('number', isset($contact->number) ? $contact->number : '') }}">
    </div>
</div>

{{--  Galc --}}
<div class="form-group">
    <label for="galc" class="col-md-4 control-label">Galc</label>
    <div class="col-md-6">
        <input id="galc" type="text" class="form-control" name="galc" value="{{ old('galc', isset($contact->galc) ? $contact->galc : '') }}">
    </div>
</div>

{{--  Port --}}
<div class="form-group">
    <label for="port" class="col-md-4 control-label">Porta</label>
    <div class="col-md-6">
        <input id="port" type="text" class="form-control" name="port" value="{{ old('port', isset($contact->port) ? $contact->port : '') }}">
    </div>
</div>

{{--  Velocity --}}
<div class="form-group">
    <label for="velocity" class="col-md-4 control-label">Velocidade</label>
    <div class="col-md-6">
        <input id="velocity" type="text" class="form-control" name="velocity" value="{{ old('velocity', isset($contact->velocity) ? $contact->velocity : '') }}">
    </div>
</div>