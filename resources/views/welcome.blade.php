<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PRUEBA TECNICA</title>
  </head>
  <body > 
    <h1 >PRUEBA TECNICA</h1>

    <table id="table-personas" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

  <script>
  fetch('http://localhost:8000/api/personas')
    .then(response => response.json())
    .then(data => {
        
        for (const item in data) {

            let fila=`<tr>
            <th> ${data[item].nombres} </th>
            <td> ${data[item].apellido_paterno} ${data[item].apellido_paterno}</td>
            <td>
                <a  class="btn btn-primary" href='${"http://127.0.0.1:8000/get-pdf/"+data[item].codigo}' download="proposed_file_name">Descargar</a>

                <button type="button" class="btn btn-success" onclick='imprimirPDF(" ${"http://127.0.0.1:8000/get-pdf/"+data[item].codigo}" )' >Imprimir</button></td>
            </tr>`

            var table_personas = document.getElementById('table-personas').getElementsByTagName('tbody')[0];

            var nuevaFila = table_personas.insertRow(table_personas.rows.length);
            nuevaFila.innerHTML = fila;
        }

    });


    imprimirPDF = function (url) {
        console.log(url)
        var iframe = this._printIframe;
        if (!this._printIframe) {
            iframe = this._printIframe = document.createElement('iframe');
            document.body.appendChild(iframe);

            iframe.style.display = 'none';
            iframe.onload = function() {
            setTimeout(function() {
                iframe.focus();
                iframe.contentWindow.print();
            }, 1);
            };
        }

        iframe.src = url;
        }
  </script>
</html>