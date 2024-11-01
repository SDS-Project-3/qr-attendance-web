let major = document.getElementById("mod-major-dd");
let module = document.getElementById("module-dd");
let period = document.getElementById("period-dd");
let selectedDate = document.getElementById("date");
let qrGenerationForm = document.getElementById("qr-generation-form");
let qrCode;
let pkField = document.getElementById("pk"); // Hidden input for PK

// Function to generate the QR code
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

function stringToBinaryHex(str) {
    // Convert string to binary
    let binary = Array.from(str)
        .map(function (char) {
            return char.charCodeAt(0).toString(2).padStart(8, '0');
        })
        .join('');

    // Convert binary to hexadecimal
    let hex = BigInt('0b' + binary).toString(16).toUpperCase();
    return hex;
}

$(document).ready(function () {
    $(".dd-select").select2({
        placeholder: "-- Select --",
        allowClear: true,
    });
});

// Handle form submission
qrGenerationForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    // Prepare the QR content
    let qrContent = stringToBinaryHex(`${selectedDate.value}, ${period.value}, ${major.value}-${module.value}`);
    console.log(qrContent);

    // Set the QR content as the PK (primary key) in the hidden field
    pkField.value = qrContent;

    // Generate or update the QR code
    if (qrCode == null) {
        qrCode = generateQrCode(qrContent);
    } else {
        qrCode.makeCode(qrContent);
    }

    // Send form data to the server
    const formData = new FormData(qrGenerationForm); // Use FormData to get all form inputs

    // Send AJAX request
    $.ajax({
        url: qrGenerationForm.action,
        type: 'POST',
        data: formData,
        contentType: false, // Important: don't set contentType
        processData: false, // Important: don't process the data
        success: function (response) {
            console.log(response);
            alert('Data submitted successfully!');
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            alert('An error occurred while submitting the form.');
        }
    });
});
