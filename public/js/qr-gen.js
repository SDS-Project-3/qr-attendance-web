let dropdown1 = document.getElementById("period-dd");
let dropdown2 = document.getElementById("mod-major-dd");
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
    let selectedOption1 = dropdown1.value;
    let selectedOption2 = dropdown2.value;

    // Combine the selected options to form the QR code content
    let qrContent = `Option1: ${selectedOption1}, Option2: ${selectedOption2}`;

    if (qrCode == null) {
        qrCode = generateQrCode(qrContent);
    } else {
        qrCode.makeCode(qrContent);
    }
});