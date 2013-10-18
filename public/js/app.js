
$(document).ready(function () {
  $("form#generate").submit(function (e) {
      e.preventDefault();
      $search_key = $('#lul').children("input[type=text]").val();
      $go = "http://generator.dreamhack.se/generate/index/" + $search_key;
      location.href = $go;
      return false;
  });
});
