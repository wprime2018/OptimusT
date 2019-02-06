<form>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="ceporigem">Origem</label>
                <input type="text" class="form-control" id="ceporigem" aria-describedby="ariaCepOrigem" placeholder="Insira o endereço ou cep">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Usar a localização atual.</label>
            </div>
        </div>
        <div class="row" class="form-group"><span id="directionOrigin"></span></div>
        <div class="row"><span id="directionOrigin"></span></div>
        <div class="col">
            <div class="form-group">
                <label for="cepdestino">Destino</label>
                <input type="text" class="form-control" id="cepdestino" aria-describedby="ariaCepDestino" placeholder="Insira o endereço ou cep">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-danger">Enviar</button>
</form>
