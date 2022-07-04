var listHotel = {};
const STORE_HOTEL = "store-hotel";

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
if ((listHotelFromLocal = localStorage.getItem(STORE_HOTEL))) {
    listHotel = JSON.parse(listHotelFromLocal);

    for (var key in listHotel) {
        createList(key, listHotel[key]);
    }
}

$(document).ready(function () {
    // add hotel
    $(".btn").click(function () {
        add();
    });

    // delete hotel
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
                swal("Hotel berhasil terhapus!", {
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
            listHotel[name] = harga;
            break;
        case "DELETE":
            delete listHotel[name];
            break;
        default:
            break;
    }

    localStorage.setItem(STORE_HOTEL, JSON.stringify(listHotel));
    return;
}

//Add data
function add() {
    var nama_hotel = $(".nama-hotel").val();
    var harga_hotel = $(".hotel-harga").val();

    createList(nama_hotel, harga_hotel);

    syncLocalStorage("ADD", nama_hotel, harga_hotel);

    $(".nama-hotel").val("");
    $(".hotel-harga").val("");
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
