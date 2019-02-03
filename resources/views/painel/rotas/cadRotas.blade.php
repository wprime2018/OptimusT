<form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="ceporigem">CEP Origem</label>
                <input type="text" class="form-control" id="ceporigem" aria-describedby="ariaCepOrigem" placeholder="CEP de origem">
                <small id="ariaCepOrigem" class="form-text text-muted">Informe o CEP de origem de sua carga.</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="cepdestino">CEP Destino</label>
                <input type="text" class="form-control" id="cepdestino" aria-describedby="ariaCepDestino" placeholder="CEP de destino">
                <small id="ariaCepDestino" class="form-text text-muted">Informe o CEP de destino de sua carga.</small>
            </div>
        </div>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
    </div>
    <button type="submit" class="btn btn-danger">Enviar</button>
</form>
