function coppy() {
  var link = document.getElementById("link").innerHTML;

  navigator.clipboard.writeText(link);

  document.getElementById("clipBtn").classList.toggle("bi-clipboard");
  document.getElementById("clipBtn").classList.toggle("bi-clipboard-fill");
}
