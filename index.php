<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <!-- JS: JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class="bevanda">
        <div class="cancella-aggiorna">
          <p class="cancella">Cancella prodotto ></p>
          <br>
          <p class="aggiorna">Aggiorna prezzo ></p>
        </div>
        <div class="dati-bevanda">
          <br>
          <p>Nome: <span>{{nome}}</span> </p>
          <p>Marca: <span>{{marca}}</span> </p>
          <p>Prezzo: <span>{{prezzo}}</span> </p>
          <p>Scadenza: <span>{{scadenza}}</span> </p>
          <br>
        </div>
      </div>
    </script>
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>php-dbcrud-read-add-update</title>
  </head>

  <body>

    <div id="container">
      <div id="titolo">
        <h1>BEVANDE dbDrink</h1>
      </div>
      <div id="operazioniDB">
        <h3>Aggiungi bevande</h3>
      </div>
      <div id="bevande">

      </div>

    </div>

  </body>

</html>
