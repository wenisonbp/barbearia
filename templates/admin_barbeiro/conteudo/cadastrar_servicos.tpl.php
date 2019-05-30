<div class="p-3 mb-3 text-center" style="background-color: #F6F6F6;">
        <h4>Cadatre as informações necessárias <i class="fas fa-server"></i></h4>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn_salvar mr-2 float-right">Salvar</button>
            </div>      
        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-6">
                <label class="font-weight-bold" for="">Tipo de serviço:</label>
                <div class="form-group">
                    <label for="tipo_servico">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                    <option>Combo</option>
                    <option>Cabelo</option>
                    <option>Barba</option>
                    <option>Sobrancelhas e Cílios</option>
                    <option>Estética</option>
                    <option>Massagem</option>
                    <option>Maquiagem</option>
                    <option>Spa</option>
                    <option>Personal</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <label class="font-weight-bold" for="">Serviço:</label>
                <div>
                    <input type="email" class="form-control" name="servico" value="">
                </div>
            </div>
        </div>
        <hr>
        <div class="row col-md-12">
            <div class="col-10 col-md-6 mb-3">
                <label class="font-weight-bold" for="">Tempo:</label>
                <div>
                    <input type="time" class="form-control" name="time" value="">
                </div>
            </div>
            <div class="col-2 col-md-2 mb-3">
                <label class="font-weight-bold" for="">N°:</label>
                <div>
                    <input type="text" class="form-control" name="num_endereco" value="">
                </div>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-4 col-md-4 mb-3">
                <label class="font-weight-bold" for="">Preço:</label>
                <div>
                    <input type="text" class="form-control" name="cep" value="">
                </div>
            </div>
        </div>

    </form>