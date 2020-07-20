
<!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/')?>js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('assets/')?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/')?>vendor/html5-qrcode/html5-qrcode.js"></script>
    <script>
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;

        function onScanSuccess(qrCodeMessage) {
            if (qrCodeMessage !== lastResult) {
                ++countResults;
                lastResult = qrCodeMessage;
                resultContainer.innerHTML 
                    += `<div>[${countResults}] - ${qrCodeMessage}</div>`;
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
        </script>
</body>
</html>