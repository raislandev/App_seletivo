<div class="row">
    <div class="form-group col-6">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="input-text form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ old('name') ?? ($register->name ?? '') }}" required>
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-6">
        <label for="name">E-mail</label>
        <input type="text" name="email" id="email" class="input-text form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{ old('email') ?? ($register->email ?? '') }}" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-6">
        <label for="name">Colégio Atual</label>
        <input type="text" name="current_college" id="current_college" class="input-text form-control{{ $errors->has('current_college') ? ' is-invalid' : '' }}" name="current_college"  value="{{ old('current_college') ?? ($register->current_college ?? '') }}" required>
        @if ($errors->has('current_college'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('current_college') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group col-6">
        <label for="name">Série</label>
        <input type="text" name="serie" id="serie" class="input-text form-control{{ $errors->has('serie') ? ' is-invalid' : '' }}" name="serie"  value="{{ old('serie') ?? ($register->serie ?? '') }}" required>
        @if ($errors->has('serie'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('serie') }}</strong>
            </span>
        @endif
    </div>



</div>

