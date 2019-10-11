<?php include_once("assets/includes/functions.php");
include_once("assets/includes/menu.php");?>
<main class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">teste</th>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                        <td>teste</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bg-light p-5">
            <h3>Cadastrar Produto</h3>
            <form>
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" placeholder="Digite o nome do produto"/>
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Digite a categoria do produto"/>
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <input class="form-control" type="text" name="descricao" placeholder="Digite a descrição do produto"/>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input class="form-control" type="number" name="quantidade" placeholder="Digite a quantidade do produto"/>
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input class="form-control" type="number" name="preco" placeholder="Digite o preço do produto"/>
                </div>
                <div class="form-group">                
                    <span>Selecione uma imagem: <br></span><input type="file" name="imagem"/>
                </div>
                <button type="submit" class="btn btn-primary" name="cadastrarProdutos">Cadastrar</button>
            </form>
        </div>
    </div>
</main>