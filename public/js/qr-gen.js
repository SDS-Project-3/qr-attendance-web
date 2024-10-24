// TODO: Put this js script within the same blade page

let major = document.getElementById("mod-major-dd");
let module = document.getElementById("module-dd");
let period = document.getElementById("period-dd");
let selectedDate = document.getElementById("date");

let qrGenerationForm = document.getElementById("qr-generation-form");
let qrCode;

function generateQrCode(qrContent) {
    return new QRCode("qr-code", {
        text: qrContent,
        width: 256,
        height: 256,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H,
    });
}

$(document).ready(function () {
    $(".dd-select").select2({
        placeholder: "-- Select --",
        allowClear: true,
    });
});

qrGenerationForm.addEventListener("submit", function (event) {
    event.preventDefault();
    let qrContent = `${date.value}, ${major.value}-${module.value}, ${period.value}`;
    console.log(qrContent);

    if (qrCode == null) {
        qrCode = generateQrCode(qrContent);
    } else {
        qrCode.makeCode(qrContent);
    }
});
