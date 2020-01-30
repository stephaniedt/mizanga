<!DOCTYPE html>
<html lang="pt-br">
<?php require('./includes/head.php'); ?>

<body>
    <div class="sticky-top">
        <?php require('./includes/navbar.php'); ?>
    </div>


    <div class="container">
        <div class="mb-1 pt-1">
            <h4 class="display-3">Ficha de Inscrição</h4>
            <p class="lead font-italic"></p>
        </div>
        <form action="" method="post">
            <div class="my-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="modalidade">Modalidade</label>
                        <input type="text" class="form-control" id="modalidade" placeholder="Modalidade">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="compMatricula" class="align-self-center mr-2">Comprovante de matrícula</label>
                        <div class="custom-file mb-4">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile" data-browse="Buscar"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados pessoais</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cpf">CPF*</label>
                        <input type="text" class="form-control" id="cpf" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rg">RG*</label>
                        <input type="text" class="form-control" id="rg" placeholder="RG">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="emissor">Orgão emissor*</label>
                        <input type="text" class="form-control" id="emissor" placeholder="Orgão Emissor">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Nome*</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                        <small id="passwordHelpBlock" class="form-text text-muted">*Atenção: Confira se seu nome foi digitado corretamente!</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nascimento">Data nascimento*</label>
                        <input type="date" class="form-control" id="nascimento" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomeSocial">Nome Social*</label>
                        <input type="text" class="form-control" id="nomeSocial" placeholder="Nome Social">
                        <small id="passwordHelpBlock" class="form-text text-muted">Se desejar, inclua neste campo seu nome de uso habitual.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="instituicao">Instituição para crachá</label>
                        <input type="text" class="form-control" id="instituicao" placeholder="Instituição para crachá">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Formação</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titulacao">Titulação mais alta*</label>
                        <select class="form-control" id="titulacao">
                            <option selected disabled>Escolha...</option>
                            <option value="1">Ensino Médio</option>
                            <option value="2">Graduação</option>
                            <option value="3">Mestrado</option>
                            <option value="4">Doutorado</option>
                            <option value="5">Pós-Doutorado</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="instituicaoTitul">Instituição de titulação*</label>
                        <input type="text" class="form-control" id="instituicaoTitul" placeholder="Instituição de titulação">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Atuação Profissional</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="situacaoProfis">Situação profissional*</label>
                        <input type="text" class="form-control" id="situacaoProfis" placeholder="Situação profissional">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="filiacao">Filiação institucional</label>
                        <input type="text" class="form-control" id="filiacao" placeholder="Filiação Institucional">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cargo">Função institucional/cargo</label>
                        <input type="text" class="form-control" id="cargo" placeholder="Função institucional/cargo">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="areasAtuacao">Áreas de atuação (informe as áreas de atuação separadas por ponto e vírgula)</label>
                        <input type="text" class="form-control" id="areasAtuacao" placeholder="Áreas de atuação">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Endereço</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Residência no Brasil</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Residência no Exterior</label>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cep">CEP*</label>
                        <input type="text" class="form-control" id="cep" placeholder="CEP">
                        <a href="">Consulte seu CEP</a>
                        <!-- https://www.devmedia.com.br/forum/api-de-cep-correios/571512 -->
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="logradouro">Logradouro*</label>
                        <input type="text" class="form-control" id="logradouro" placeholder="Logradouro">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" placeholder="Número">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Complemento">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="municipio">Município</label>
                        <input type="text" class="form-control" id="municipio" placeholder="Município">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="uf">UF*</label>
                        <select class="form-control" id="uf">
                            <option selected disabled>Escolha...</option>
                            <option value="1">AC</option>
                            <option value="2">AL</option>
                            <option value="3">AP</option>
                            <option value="4">AM</option>
                            <option value="5">BA</option>
                            <option value="6">CE</option>
                            <option value="7">DF</option>
                            <option value="8">ES</option>
                            <option value="9">GO</option>
                            <option value="10">MA</option>
                            <option value="11">MG</option>
                            <option value="12">MT</option>
                            <option value="13">MS</option>
                            <option value="14">PA</option>
                            <option value="15">PB</option>
                            <option value="16">PR</option>
                            <option value="17">PE</option>
                            <option value="18">PI</option>
                            <option value="19">RJ</option>
                            <option value="20">RN</option>
                            <option value="21">RS</option>
                            <option value="22">RO</option>
                            <option value="23">RR</option>
                            <option value="24">SC</option>
                            <option value="25">SP</option>
                            <option value="26">SE</option>
                            <option value="27">TO</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados de contato</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="telResid">Telefone residencial</label>
                        <input type="text" class="form-control" id="telResid" placeholder="Telefone residencial">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telProfis">Telefone profissional</label>
                        <input type="text" class="form-control" id="telProfis" placeholder="Telefone profissional">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telCelular">Telefone celular</label>
                        <input type="text" class="form-control" id="telCelular" placeholder="Telefone celular">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail*</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmEmail">Confirmar e-mail*</label>
                        <input type="text" class="form-control" id="confirmEmail" placeholder="Confirmar e-mail">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Acessibilidade</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Necessita de recursos de acessibilidade?*
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acess" id="acessSim" value="sim">
                        <label class="form-check-label" for="acessSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acess" id="acessNao" value="nao">
                        <label class="form-check-label" for="acessNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Possui alguma deficiência?
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="defic" id="deficSim" value="sim">
                        <label class="form-check-label" for="deficSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="defic" id="deficNao" value="nao">
                        <label class="form-check-label" for="deficNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Faz uso de assistência pessoal e/ou equipamento de tecnologia assistiva?
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tecassis" id="tecAssistSim" value="sim">
                        <label class="form-check-label" for="tecAssistSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tecassis" id="tecAssistNao" value="nao">
                        <label class="form-check-label" for="tecAssistNao">Não</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Necessita de recursos de acessibilidade?
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="recurso" id="recursoSim" value="sim">
                        <label class="form-check-label" for="recursoSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="recurso" id="recursoNao" value="nao">
                        <label class="form-check-label" for="recursoNao">Não</label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="outrasQuestoes">Utilize este espaço para indicar outras questões, orientações ou necessidades não previstas por nosso formulário</label>
                        <input type="text" class="form-control" id="outrasQuestoes" placeholder="">
                    </div>
                </div>
            </div>

            <div class="my-3">
                <h5>Dados complementares</h5>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="genero">Gênero</label>
                        <input type="text" class="form-control" id="genero" placeholder="Gênero">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="raca">Raça/Cor*</label>
                        <select class="form-control" id="raca">
                            <option selected disabled>Escolha...</option>
                            <option value="1">Amarela</option>
                            <option value="2">Branca</option>
                            <option value="3">Indígena</option>
                            <option value="4">Parda</option>
                            <option value="5">Preta</option>
                            <option value="6">Não desejo declarar</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="nomeCertific">Prefere que o nome social seja utilizado na emissão do certificado?*</label>
                        <select class="form-control" id="nomeCertific">
                            <option selected disabled>Escolha...</option>
                            <option value="1">Sim</option>
                            <option value="2">Não</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="my-4">
            <button type="submit" class="btn btn-primary" style="width:120px">Enviar</button>
            <button type="button" class="btn btn-primary" style="width:120px">Voltar</button>
        </div>
    </div>

    <div>
        <?php require('./includes/footer.php'); ?>
        <?php require('./includes/script.php'); ?>
    </div>

</body>

</html>