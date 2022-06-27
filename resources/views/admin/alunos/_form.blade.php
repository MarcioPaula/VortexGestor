<div class="input-field">
    <input type="text" autocomplete="off" name="nome" value="{{isset($registro -> nome) ? $registro -> nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" autocomplete="off" name="cpf" value="{{isset($registro -> cpf) ? $registro -> cpf : ''}}">
    <label>CPF</label>
</div>

<div class="input-field col s12">
    <select name="treino">
        <option value="{{isset($registro -> treino) ? $registro -> treino : ''}}"  disabled selected>Choose your option</option>
         @foreach($treinos as $treino);
        <option value="{{$treino->treino}}">{{$treino->treino}}</option>
        @endforeach
    </select>
    <label>Treino</label>
</div>
