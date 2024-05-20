<form class="form-contato" enctype="multipart/form-data">
    <div class="flex jus-left not-a">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 element">
            <div class="form-group">
                <label for="tipo">Tipo: <span class="red-color">*</span></label>
                <select name="tipo" class="form-control" id="tipo">
                    <option value="Pessoa Jurídica" selected>Pessoa Jurídica</option>
                    <option value="Pessoa Física">Pessoa Física</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 empresa element transition">
            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input placeholder="Empresa:" type="text" name="empresa" id="empresa" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
            <div class="form-group">
                <label for="nome">Nome: <span class="red-color">*</span></label>
                <input placeholder="Nome:" type="text" name="nome" id="nome" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
            <div class="form-group">
                <label for="email">E-Mail: <span class="red-color">*</span></label>
                <input placeholder="E-Mail:" type="email" name="email" id="email" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 element">
            <div class="form-group">
                <label for="telefone">Telefone: <span class="red-color">*</span></label>
                <input placeholder="(__) ____-____" type="text" name="telefone" id="telefone" class="form-control mask-phone">
            </div>
        </div>
    </div>
    <button class="send" type="submit"><span>Enviar</span> <i class="mdi mdi-send"></i></button>
</form>