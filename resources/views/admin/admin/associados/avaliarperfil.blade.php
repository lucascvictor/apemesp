@extends('admin.dashboard')

@section('titulo', 'Gerenciamento de dados cadastrais')

@section('extrastyle')

<style type="text/css">
.bs-wizard {margin-top: 40px;}

/*Form Wizard*/
.bs-wizard {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.bs-wizard > .bs-wizard-step {padding: 0; position: relative;}
.bs-wizard > .bs-wizard-step + .bs-wizard-step {}
.bs-wizard > .bs-wizard-step .bs-wizard-stepnum {color: #595959; font-size: 16px; margin-bottom: 5px;}
.bs-wizard > .bs-wizard-step .bs-wizard-info {color: #999; font-size: 14px;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot {position: absolute; width: 30px; height: 30px; display: block; background: #fbe8aa; top: 45px; left: 50%; margin-top: -15px; margin-left: -15px; border-radius: 50%;}
.bs-wizard > .bs-wizard-step > .bs-wizard-dot:after {content: ' '; width: 14px; height: 14px; background: #fbbd19; border-radius: 50px; position: absolute; top: 8px; left: 8px; }
.bs-wizard > .bs-wizard-step > .progress {position: relative; border-radius: 0px; height: 8px; box-shadow: none; margin: 20px 0;}
.bs-wizard > .bs-wizard-step > .progress > .progress-bar {width:0px; box-shadow: none; background: #fbe8aa;}
.bs-wizard > .bs-wizard-step.complete > .progress > .progress-bar {width:100%;}
.bs-wizard > .bs-wizard-step.active > .progress > .progress-bar {width:50%;}
.bs-wizard > .bs-wizard-step:first-child.active > .progress > .progress-bar {width:0%;}
.bs-wizard > .bs-wizard-step:last-child.active > .progress > .progress-bar {width: 100%;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot {background-color: #f5f5f5;}
.bs-wizard > .bs-wizard-step.disabled > .bs-wizard-dot:after {opacity: 0;}
.bs-wizard > .bs-wizard-step:first-child  > .progress {left: 50%; width: 50%;}
.bs-wizard > .bs-wizard-step:last-child  > .progress {width: 50%;}
.bs-wizard > .bs-wizard-step.disabled a.bs-wizard-dot{ pointer-events: none; }
/*END Form Wizard*/
</style>

@endsection

@section('conteudo')

            <div class="row bs-wizard col-md-12" style="margin-bottom: 15px;">

            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
              </div>
             
          </div>
            <h3>Passos para obtenção do numero de registro:</h3>
                <div class="col-xs-3 col-md-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Passo 1</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Cadastro de usuário e senha.</div>
                </div>

                <div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 1)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Passo 2</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Cadastro dos dados pessoais</div>
                </div>

                <div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 2)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif" ><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Passo 3</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Cadastro dos dados acadêmicos</div>
                </div>
                <br><br><br><br><br><br><br>                
                <div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 3)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif"  ><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">Passo 4</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center">Cadastro dos dados profissionais</div>
                </div>

                <div class="col-xs-3 col-md-4 bs-wizard-step @if($usuario[0]->id_cadastro > 4)
                                                    complete
                                                    @else
                                                    disabled
                                                    @endif" ><!-- active -->
                  <div class="text-center bs-wizard-stepnum">Passo 5</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                  <div class="bs-wizard-info text-center"> Confirmação da documentação necessária</div>
                </div>
           
	</div>

@endsection