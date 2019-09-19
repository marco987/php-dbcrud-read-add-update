$(document).ready(function(){

function ricarica() {
  $("#bevande").html("");
}

function getBevande() {

  ricarica();

  $.ajax({
    url: "api.php",
    method: "GET",
    success: function(data){
      printBevande(data);
    },
    error: function(){
      alert("Errore");
    }
  });
}

function printBevande(data) {

  var source = $("#item-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < data.length; i++) {
    var context = data[i];
    var html = template(context);

    $("#bevande").append(html);
  }
}

function deleteBevanda() {

  var bottoneDelete = $(this);
  var box = bottoneDelete.parent().parent();

  var idBevanda = box.attr("data-id");

  $.ajax({
    url: "api-delete.php",
    method: "GET",
    data: {
      id : idBevanda
    },
    success: function(){
      getBevande();
    },
    error: function(){
      alert("Errore");
    }
  });
}

function addBevanda() {

  var nome = prompt("Inserisci nome bevanda");
  var marca = prompt("Inserisci marca bevanda");
  var prezzo = prompt("Inserisci prezzo bevanda - solo numeri interi");
  var scadenza = prompt("Inserisci scadenza bevanda - AAAA-MM-GG");

  $.ajax({
    url: "api-add.php",
    method: "GET",
    data: {
      nome : nome,
      marca : marca,
      prezzo : prezzo,
      scadenza : scadenza
    },
    success: function(data){
      getBevande(data);
    },
    error: function(){
      alert("Errore");
    }
  });
}












// Richiamo funzioni
getBevande();

$(document).on("click", ".cancella", deleteBevanda);
$(document).on("click", "#operazioniDB h3", addBevanda);



// Chiusura funzione riga 1
// $(document).ready(function(){
});
