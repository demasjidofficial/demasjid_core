var aTags = document.getElementsByTagName("button");
var searchTHapus = "Hapus";
var found;

for (var i = 0; i < aTags.length; i++) {
  if (aTags[i].textContent == searchTHapus) {
    found = aTags[i];
    break;
  }
}