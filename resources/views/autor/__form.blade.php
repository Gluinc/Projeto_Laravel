<div>    
    <div>
            <Label for="">Nome</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="nome"
                id="nome"
                value="{{ isset($registro->nome) ? $registro->nome : ''}}">
                @error('nome')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">Apelido</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="apelido"
                id="apelido"
                value="{{ isset($registro->apelido) ? $registro->apelido : ''}}">
                @error('apelido')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">Cidade</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="cidade"
                id="cidade"
                value="{{ isset($registro->cidade) ? $registro->cidade : ''}}">
                @error('cidade')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">Bairro</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="bairro"
                id="bairro"
                value="{{ isset($registro->bairro) ? $registro->bairro : ''}}">
                @error('bairro')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">CEP</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="cep"
                id="cep"
                value="{{ isset($registro->cep) ? $registro->cep : ''}}">
                @error('cep')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">E-mail</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="email"
                id="email"
                value="{{ isset($registro->email) ? $registro->email : ''}}">
                @error('email')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div>
            <Label for="">Telefone</Label>
            <!-- isset é para validar se o campo é nulo -->
            <input type="text"
                name="telefone"
                id="telefone"
                value="{{ isset($registro->telefone) ? $registro->telefone : ''}}">
                @error('telefone')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>    