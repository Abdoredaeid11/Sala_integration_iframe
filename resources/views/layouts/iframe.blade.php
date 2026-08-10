<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Accurate Logistics</title>
    <script type="module">
        import { embedded } from "https://cdn.jsdelivr.net/npm/@salla.sa/embedded-sdk/+esm";
        (async () => {
            await embedded.init();
            embedded.ready();
        })();
    </script>
    <style>
        body {
            background: white;
            color: black;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        button {
            padding: 16px 32px;
            font-size: 20px;
            cursor: pointer;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <button id="openApp">افتح التطبيق</button>

    <script>
        document.getElementById('openApp').addEventListener('click', function () {
            const params = new URLSearchParams(window.location.search);
            const token = params.get('token');
            const providerId = '{{ $provider_id }}';

            const externalUrl = 'https://your-external-app.com/dashboard'
                + '?provider_id=' + providerId
                + '&token=' + encodeURIComponent(token || '');

            window.open(externalUrl, '_blank');
        });
    </script>
</body>
</html>
