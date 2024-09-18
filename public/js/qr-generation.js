document.addEventListener('DOMContentLoaded', function() {
    let qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "https://example.com", // Initial value
        width: 128,
        height: 128,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    window.updateQRCode = function(newText) {
        qrcode.clear(); // Clear the old QR code
        qrcode.makeCode(newText); // Generate new QR code with the new text
    };
});
