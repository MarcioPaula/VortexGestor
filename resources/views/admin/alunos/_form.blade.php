<div class="input-field">
    <input type="text" required autocomplete="off" name="nome" value="{{isset($registro -> nome) ? $registro -> nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" required autocomplete="off" name="cpf" value="{{isset($registro -> cpf) ? $registro -> cpf : ''}}">
    <label>CPF</label>
</div>

<div class="input-field col s12">
    <select name="treino" required>
        <option value="{{isset($registro -> treino) ? $registro -> treino : ''}}"  disabled selected>{{isset($registro -> treino) ? $registro -> treino : 'Selecione um treino'}}</option>
         @foreach($treinos as $treino);
        <option value="{{$treino->treino}}">{{$treino->treino}}</option>
        @endforeach
    </select>
    <label>Treino</label>
</div>
