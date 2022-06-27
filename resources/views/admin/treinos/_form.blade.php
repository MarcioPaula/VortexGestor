<div class="input-field">
    <input type="text" autocomplete="off" name="treino" value="{{isset($registro -> treino) ? $registro -> treino : ''}}">
    <label>Treino</label>
</div>

<div class="input-field">
    <input type="text" autocomplete="off" name="descricao" value="{{isset($registro -> descricao) ? $registro -> descricao : ''}}">
    <label>Descrição</label>
</div>

    <div class="file-field input-field">
        <div class="btn">
            <span>File</span>
            <input name="arquivo" type="file" value="{{isset($registro -> arquivo) ? $registro -> arquivo : ''}}">
        </div>
        <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
        </div>
    </div>
