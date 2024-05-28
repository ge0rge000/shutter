<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WhatsApp and Call Icons</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
            .icon-container {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: flex;
                flex-direction: column;
                gap: 10px;
                z-index: 99;
            }
            .icon-button {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                color: #fff;
                background-color: #25D366;
                border-radius: 50%;
                transition: background-color 0.3s;
                text-decoration: none;

            }
            .icon-button.call {
                background-color: #51CFED;
            }
            .icon-button.whatsapp:hover {
                background-color: #1DA851;
            }
            .icon-button.call:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="icon-container">
            <a href="https://wa.me/+971557474526" class="icon-button whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="tel:+971557474526" class="icon-button call">
                <i class="fas fa-phone"></i>
            </a>
        </div>
    </body>
    </html>

</div>
