{{--{{ dd($loadFields) }}--}}
<div class="block-header">
    <h2>Cadastro de Convênios</h2>
</div>
<div class="card">
    <div class="card-body card-padding">
        <!-- Painel -->
        <div role="tabpanel">
            <!-- Guias -->
            <ul class="tab-nav" role="tablist">
                <li class="active"><a href="#infoBasicas" aria-controls="infoBasicas" role="tab" data-toggle="tab">Informações Básicas</a>
                </li>
                <li><a href="#documentacao" aria-controls="documentacao" role="tab" data-toggle="tab">Documentação</a>
                </li>
                <li><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço</a>
                </li>
            </ul>
            <!-- Fim Guias -->

            <!-- Conteúdo -->
            <div class="tab-content">
                {{--#1--}}
                <div role="tabpanel" class="tab-pane active" id="infoBasicas">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="Nome *">Nome</label>
                                    {!! Form::text('nome', Session::getOldInput('nome'), array('class' => 'form-control input-sm', 'placeholder' => 'Nome Completo')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="sexo_id">Sexo *</label>
                                <div class="select">
                                    {!! Form::select('sexo_id', (["" => "Selecione gênero"] + $loadFields['sexo']->toArray()), null, array('class'=> 'chosen')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="data_nascimento">Data de Nascimento *</label>
                                    {!! Form::date('data_nascimento', null, ['class' => 'form-control input-sm', 'placeholder' => 'Data de Nascimento']) !!}
                                    {{--{!! Form::text('data_nascimento', Session::getOldInput('data_nascimento'), array('class' => 'form-control input-sm', 'placeholder' => 'Data de Nascimento')) !!}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="data_falecimento">Data de Falecimento *</label>
                                    {!! Form::text('data_falecimento', Session::getOldInput('data_falecimento'), array('class' => 'form-control input-sm', 'placeholder' => 'Data de Falecimento')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="nacionalidade">Nacionalidade *</label>
                                <div class="select">
                                    {!! Form::select('nacionalidade_id', (["" => "Selecione local"] + $loadFields['nacionalidade']->toArray()), null, array('class'=> 'chosen')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="naturalidade">Naturalidade</label>
                                    {!! Form::text('naturalidade', Session::getOldInput('data_falecimento'), array('class' => 'form-control input-sm', 'placeholder' => 'Naturalidade')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="inscricao_estadual">Inscrição Estadual</label>
                                    {!! Form::text('inscricao_estadual', Session::getOldInput('inscricao_estadual'), array('class' => 'form-control input-sm', 'placeholder' => 'Inscricao Estadual')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="cgm_municipio_id">CGM do Município *</label>
                                <div class="select">
                                    {!! Form::select('cgm_municipio_id', (["" => "Selecione"] + $loadFields['cgmmunicipio']->toArray()), null, array('class'=> 'chosen')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="telefones">Telefones</label>
                                    {!! Form::text('telefones', Session::getOldInput('telefones'), array('class' => 'form-control input-sm')) !!}
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm m-t-10">Adicionar</button>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="email">E-mail</label>
                                    {!! Form::text('email', Session::getOldInput('inscricao_estadual'), array('class' => 'form-control input-sm', 'placeholder' => 'E-mail')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--#2--}}
                <div role="tabpanel" class="tab-pane" id="documentacao">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="pai">Nome Pai *</label>
                                    {!! Form::text('pai', Session::getOldInput('pai'), array('class' => 'form-control input-sm', 'placeholder' => 'Nome do pai completo')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="mae">Nome Mãe *</label>
                                    {!! Form::text('mae', Session::getOldInput('mae'), array('class' => 'form-control input-sm', 'placeholder' => 'Nome da mãe completo')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="estado_civil_id">Estado Civil *</label>
                                <div class="select">
                                    {!! Form::select('estado_civil_id', (["" => "Selecione gênero"] + $loadFields['estadocivil']->toArray()), null, array()) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="escolaridade_id">Escolaridade *</label>
                                <div class="select">
                                    {!! Form::select('escolaridade_id', (["" => "Selecione grau"] + $loadFields['escolaridade']->toArray()), null, array()) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="cpf">CPF *</label>
                                    {!! Form::text('cpf', Session::getOldInput('cpf'), array('class' => 'form-control input-sm', 'placeholder' => 'Número')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="rg">RG *</label>
                                    {!! Form::text('rg', Session::getOldInput('rg'), array('class' => 'form-control input-sm', 'placeholder' => 'REgistro geral')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="orgao_emissor">Orgão Emissor *</label>
                                    {!! Form::text('orgao_emissor', Session::getOldInput('orgao_emissor'), array('class' => 'form-control input-sm', 'placeholder' => 'REgistro geral')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="data_expedicao">Data de expedição *</label>
                                    {!! Form::text('data_expedicao', Session::getOldInput('data_expedicao'), array('class' => 'form-control input-sm', 'placeholder' => 'REgistro geral')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="num_cnh">Número da CNH</label>
                                    {!! Form::text('num_cnh', Session::getOldInput('num_cnh'), array('class' => 'form-control input-sm', 'placeholder' => 'REgistro geral')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="data_vencimento_cnh">Data Vencimento</label>
                                    {!! Form::text('data_vencimento_cnh', Session::getOldInput('data_vencimento_cnh'), array('class' => 'form-control input-sm', 'placeholder' => 'Registro geral')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="cnh_categoria_id">Categoria CNH</label>
                                <div class="select">
                                    {!! Form::select('cnh_categoria_id', ["" => "Selecione"], null, array()) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--#3--}}
                <div role="tabpanel" class="tab-pane" id="endereco">
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="endereco[logradouro]">Logradouro *</label>
                                    {!! Form::text("endereco[logradouro]", Session::getOldInput("endereco['logradouro']"), array('class' => 'form-control input-sm', 'placeholder' => 'E-mail')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="endereco[numero]">Número *</label>
                                    {!! Form::text("endereco[numero]", Session::getOldInput("endereco[numero]"), array('class' => 'form-control input-sm', 'placeholder' => 'E-mail')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="endereco[complemento]">Complemento</label>
                                    {!! Form::text("endereco[complemento]", Session::getOldInput("endereco[complemento]"), array('class' => 'form-control input-sm', 'placeholder' => 'E-mail')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="fg-line">
                                <div class="fg-line">
                                    <label for="endereco[cep]">CEP</label>
                                    {!! Form::text("endereco[cep]", Session::getOldInput("endereco[cep]"), array('class' => 'form-control input-sm', 'placeholder' => 'E-mail')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="endereco[bairro_id]">Bairro *</label>
                                <div class="select">
                                    {{--["" => "Selecione bairro"] + $loadFields['bairro']->toArray()--}}
                                    {!! Form::select("endereco[bairro_id]", array(), null, array()) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class=" fg-line">
                                <label for="endereco['cidade_id']">Cidade *</label>
                                <div class="select">
                                    {!! Form::select("endereco[cidade_id]", ["" => "Selecione"], null, array('class'=> 'chosen')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fim --}}

                <button class="btn btn-primary btn-sm m-t-10">Salvar</button>
                <a class="btn btn-primary btn-sm m-t-10" href="{{ route('cgm.index') }}">Listar</a>
            </div>
            <!-- Fim Conteúdo -->
        </div>
        <!-- Fim Painel -->
    </div>
</div>

@section('javascript')
    {{--Mensagens personalizadas--}}{{--
    <script type="text/javascript" src="{{ asset('/dist/js/messages_pt_BR.js')  }}"></script>
    --}}{{--Regras adicionais--}}{{--
    <script type="text/javascript" src="{{ asset('/dist/js/adicional/alphaSpace.js')  }}"></script>
    --}}{{--Regras de validação--}}{{--
    <script type="text/javascript" src="{{ asset('/dist/js/validacao/convenio.js')  }}"></script>--}}
@endsection