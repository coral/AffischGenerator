! function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
      p = /^http:/.test(d.location) ? 'http' : 'https';
  if (!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.src = p + '://platform.twitter.com/widgets.js';
      fjs.parentNode.insertBefore(js, fjs);
  }
}
(document, 'script', 'twitter-wjs');

$(document).ready(function () {
  $("form#generate").submit(function (e) {
      e.preventDefault();
      $search_key = $('#lul').children("input[type=text]").val();
      $go = "http://77.80.253.77/generate/index/" + $search_key;
      location.href = $go;
      return false;
  });
});