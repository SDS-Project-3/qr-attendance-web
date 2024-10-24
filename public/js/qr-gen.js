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

function stringToHex(str) {
    let hex = "";
    for (let i = 0; i < str.length; i++) {
        hex += str.charCodeAt(i).toString(16);
    }
    return hex;
}

$(document).ready(function () {
    $(".dd-select").select2({
        placeholder: "-- Select --",
        allowClear: true,
    });
});

qrGenerationForm.addEventListener("submit", function (event) {
    event.preventDefault();
    // ! Since adding vars and referring into them can be somewhat redundant, these are commented out and values
    // ! will just be referred immediately

    // let selectedOption1 = period.value;
    // let selectedOption2 = major.value;

    // Combine the selected options to form the QR code content
    // let qrContent = `Option1: ${stringToHex(period.value)}, Option2: ${stringToHex(major.value)}, Option3 :${stringToHex(module.value)}`;

    let qrContent = `${date.value}, ${major.value}-${module.value}, ${period.value}`;
    console.log(stringToHex(qrContent));

    if (qrCode == null) {
        qrCode = generateQrCode(qrContent);
    } else {
        qrCode.makeCode(qrContent);
    }
});
