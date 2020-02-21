<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.css.map') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css.map') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-grid.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap-grid.min.css.map') }}" rel="stylesheet">
        

    </head>
    <body style="background-color: white">
        <!--Agrupamento por colunas -->
        <div class="container-fluid table-striped">
                <div class="row">
                    <!--Primeira coluna URGÊNCIA-->
                    <div class="col-lg">
                    <table class="table table-bordered" >
                            <thead > 
                              <tr class="bg-danger" align="center"> 
                                <th colspan="4" ><h5>Urgência / Emergência</h5></th>    
                            <tr align="center"class="bg-danger "><!-- https://getbootstrap.com/docs/4.4/content/tables/ -->
                              <th class="align-middle">Ac NB</th>
                              <th class="align-middle">Paciente</th>
                              <th class="align-middle">Exame</th>
                              <th class="align-middle">Envio PACS</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr align="center">
                              <th class="align-middle">19246</th>
                              <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                              <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                              <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                            </tr>
                            <tr align="center">
                                <th class="align-middle">19246</th>
                                <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                            </tr>
                            <tr align="center">
                                <th class="align-middle">19246</th>
                                <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                            </tr>
                            <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                        <th class="align-middle">19246</th>
                                        <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                        <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                        <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                    </tr>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <!--Segunda coluna INTERNAMENTO-->
                    <div class="col-sm">
                        <table class="table table-bordered" >
                                <thead > 
                                    <tr class="bg-warning" align="center"> 
                                    <th colspan="4" ><h5>Urgência / Emergência</h5></th>    
                                <tr align="center"class="bg-warning "><!-- https://getbootstrap.com/docs/4.4/content/tables/ -->
                                    <th class="align-middle">Ac NB</th>
                                    <th class="align-middle">Paciente</th>
                                    <th class="align-middle">Exame</th>
                                    <th class="align-middle">Envio PACS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                        <th class="align-middle">19246</th>
                                        <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                        <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                        <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                    </tr>
                                    <tr align="center">
                                            <th class="align-middle">19246</th>
                                            <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                            <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                            <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                        </tr>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--Terceira coluna EXTERNO-->
                        <div class="col-sm">
                            <table class="table table-bordered" >
                                <thead > 
                                    <tr class="bg-success" align="center"> 
                                    <th colspan="4" ><h5>Urgência / Emergência</h5></th>    
                                <tr align="center"class="bg-success "><!-- https://getbootstrap.com/docs/4.4/content/tables/ -->
                                    <th class="align-middle">Ac NB</th>
                                    <th class="align-middle">Paciente</th>
                                    <th class="align-middle">Exame</th>
                                    <th class="align-middle">Envio PACS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                    <th class="align-middle">19246</th>
                                    <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                    <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                    <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                </tr>
                                <tr align="center">
                                        <th class="align-middle">19246</th>
                                        <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                        <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                        <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                    </tr>
                                    <tr align="center">
                                            <th class="align-middle">19246</th>
                                            <td class="align-middle">DANIEL JOSE DA SILVA XAVIER</td>
                                            <td class="align-middle">US ABSOME TOTAL (INCLUI ABDOME INFERIOR)</td>
                                            <td class="align-middle"><input type="checkbox" name="realizado" id="realizado"></td>
                                        </tr>
                                </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
        

        

          


    

    

  
    </body>
</html>


<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js.map') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.js.map') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js.map') }}"></script>