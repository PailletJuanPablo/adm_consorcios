<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Liquidación</title>
    <style>
            .page-break {
                page-break-after: always;
            }
            body { 
                width: 16cm;
                }
            .clearfix:after {
                content: "";
                display: table;
                clear: both;
              }
              
              a {
                color: #5D6975;
                text-decoration: underline;
              }
              
              body {
                position: relative;
                width: 16cm;  

                margin: 0 auto; 
                color: #001028;
                background: #FFFFFF; 
                font-family: Arial, sans-serif; 
                font-size: 12px; 
                font-family: Arial;
              }
              
              header {
                padding: 10px 0;
                margin-bottom: 30px;
              }
              
           
              
              h1 {
                border-top: 1px solid  #5D6975;
                border-bottom: 1px solid  #5D6975;
                color: #5D6975;
                font-size: 2.4em;
                line-height: 1.4em;
                font-weight: normal;
                text-align: center;
                margin: 0 0 20px 0;
                background: url(dimension.png);
              }
              
            
             
              
              
              
              
              table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
              }
              
              table tr:nth-child(2n-1) td {
                background: #F5F5F5;
              }
              
              table th,
              table td {
                text-align: center;
              }
              
              table th {
                padding: 5px 20px;
                color: #5D6975;
                border-bottom: 1px solid #C1CED9;
                white-space: nowrap;        
                font-weight: normal;
                text-align:left;
              }
              
              table .service,
              table .desc {
                text-align: left;
              }
              
              table td {
                padding: 20px;
                text-align: left;
              }
              
              table td.service,
              table td.desc {
                vertical-align: top;
              }
              
              table td.unit,
              table td.qty,
              table td.total {
                font-size: 1.2em;
              }
              
              table td.grand {
                border-top: 1px solid #5D6975;;
              }
              
              #notices .notice {
                color: #5D6975;
                font-size: 1.2em;
              }
              
              footer {
                color: #5D6975;
                width: 100%;
                height: 30px;
                position: absolute;
                bottom: 0;
                border-top: 1px solid #C1CED9;
                padding: 8px 0;
                text-align: center;
              }

    </style>
  </head>
  <body>
        @foreach ($consorcistas as $consorcista)
    <header class="clearfix">
  
      <h1>Edificio {{$edificio->nombre}}</h1>
      <h2>Liquidación Correspondiente a {{$liquidacion->periodo}}</h2>

      <div id="project">
        <div><span>Nombre</span>  {{$consorcista->nombre}} </div>
        <div><span>Porcentaje de Ocupación</span> {{$consorcista->porcentaje_ocupacion}} %</div>
    
      </div>
    </header>
    <main>
        <h3>Gastos del Período</h3>
      <table width="100%">
        <thead width="100%">
          <tr>
            <th >Concepto</th>
            <th >Monto</th>
          </tr>
        </thead>
        <tbody>
                @foreach ($gastos as $gasto)
          <tr>
                <td>{{$gasto->concepto}}</td>
                <td>$ {{$gasto->monto}}</td>
          </tr>
          @endforeach
          <tr>
                <td  class="grand total">MONTO TOTAL</td>
                <td class="grand total">$ {{ $monto_total }}</td>
              </tr>
        </tbody>
      </table>
      <div>

            <h1> Monto a Pagar: ${{$consorcista->abonar($monto_total)}}</h1>

      </div>
      <div id="notices">
        <div>RECUERDE:</div>
        <div class="notice">Deberá abonar hasta el 10 del corriente, de lo contrario incurrirá en Mora.</div>
      </div>
    </main>
    <footer>
Recibo Generado Automáticamente por InmobiSoft
    </footer>
    <div class="page-break"></div>
    @endforeach


  </body>

</html>
