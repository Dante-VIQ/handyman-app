<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GB Handyman | QR Code</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3a0ca3',
                        secondary: '#7209b7',
                        soft: '#f4f2ff',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen bg-soft flex items-center justify-center px-4">

    <!-- Container -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 text-center">

        <!-- Header -->
        <h1 class="text-2xl font-bold text-primary">
            GB Handyman QR Code
        </h1>
        <p class="text-gray-600 text-sm mt-1">
            Scan the QR code to visit our website
        </p>

        <!-- QR Wrapper -->
        <div class="mt-6 flex justify-center">
            <div class="bg-soft p-4 rounded-xl shadow-inner">
                <div id="qrcode"></div>
            </div>
        </div>

        <!-- Download Button -->
        <button
            onclick="downloadQR()"
            class="mt-6 w-full bg-gradient-to-r from-primary to-secondary
                   text-white font-semibold py-3 rounded-full
                   hover:opacity-90 transition"
        >
            Download QR Code
        </button>

        <!-- Footer -->
        <p class="mt-4 text-xs text-gray-500">
            gbhandymanllc.com
        </p>
    </div>

    <!-- QR Code JS -->
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <script>
        new QRCode(document.getElementById("qrcode"), {
            text: "https://gbhandymanllc.com",
            width: 240,
            height: 240,
            correctLevel: QRCode.CorrectLevel.H
        });

        function downloadQR() {
            const img = document.querySelector('#qrcode img');
            if (!img) return;

            const link = document.createElement('a');
            link.href = img.src;
            link.download = 'gbhandyman-qr.png';
            link.click();
        }
    </script>

</body>
</html>
