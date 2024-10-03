let major = document.getElementById("mod-major-dd");
let module = document.getElementById("module-dd")
let period = document.getElementById("period-dd");

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

qrGenerationForm.addEventListener("submit", function (event) {
    event.preventDefault();
    // ! Since adding vars and referring into them can be somewhat redundant, these are commented out and values
    // ! will just be referred immediately
    
    // let selectedOption1 = period.value;
    // let selectedOption2 = major.value;

    // Combine the selected options to form the QR code content
    let qrContent = `Option1: ${period.value}, Option2: ${major.value}, Option3 :${module.value}`;

    if (qrCode == null) {
        qrCode = generateQrCode(qrContent);
    } else {
        qrCode.makeCode(qrContent);
    }
});