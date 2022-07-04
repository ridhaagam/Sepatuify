var listSepatu = {};
const STORE_SEPATU = "store-sepatu";

// cek localStorage
if (typeof Storage !== undefined) {
  swal({
    title: "Local",
    text: "You have a local Storage!",
    icon: "success",
    button: "Okay",
  });
} else {
  swal({
    title: "Local",
    text: "You have a local Storage!",
    icon: "error",
    button: "Okay",
  });
}

//localStorage
if ((listSepatuFromLocal = localStorage.getItem(STORE_SEPATU))) {
  listSepatu = JSON.parse(listSepatuFromLocal);

  for (var key in listSepatu) {
    createList(key, listSepatu[key]);
  }
}

$(document).ready(function () {
  // add movie
  $(".btn").click(function () {
    add();
  });

  // delete movie
  $("tbody").on("click", ".delete", function () {
    swal({
      title: "Anda yakin?",
      text: "Setelah menghapus, data akan hilang",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        $(this).parent("tr").remove();
        syncLocalStorage("DELETE", $(this).prev().prev().text());
        swal("Sepatu berhasil terhapus!", {
          icon: "success",
        });
      }
    });
  });

  // sort by name
  $("table").on("click", ".sort-name", function () {
    sort("tbody", "tr", ".name");
  });

  // search
  $(".search").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $(".table-item").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

function createList(name, harga) {
  var sepatu = `<tr class='table-item'>
        <td class='name'>${name}</td>
        <td class='harga'>${harga}</td>
        <td class='delete'>DELETE</td>
    </tr>`;

  $("table").append(sepatu);
}

//SynclocalStorage
function syncLocalStorage(activity, name, harga) {
  switch (activity) {
    case "ADD":
      listSepatu[name] = harga;
      break;
    case "DELETE":
      delete listSepatu[name];
      break;
    default:
      break;
  }

  localStorage.setItem(STORE_SEPATU, JSON.stringify(listSepatu));
  return;
}

//Add data
function add() {
  var nama_sepatu = $(".nama-sepatu").val();
  var harga_sepatu = $(".sepatu-harga").val();

  createList(nama_sepatu, harga_sepatu);

  syncLocalStorage("ADD", nama_sepatu, harga_sepatu);

  $(".nama-sepatu").val("");
  $(".sepatu-harga").val("");
}

// sorting
function sort(parent, child) {
  $(parent)
    .children(child)
    .sort(function (a, b) {
      var A = $(a).children().text().toUpperCase();
      var B = $(b).children().text().toUpperCase();

      return A < B ? -1 : A > B ? 1 : 0;
    })
    .appendTo(parent);
}
