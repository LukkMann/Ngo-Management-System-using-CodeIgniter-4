<!-- app/Views/receipt.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .receipt-details {
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .print-button, .back-button {
            padding: 10px;
            margin-right: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #4caf50;
            border: 1px solid #4caf50;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button {
            background-color: #f44336;
            border: 1px solid #f44336;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">
            <h2>Donation Receipt</h2>
        </div>
        <div class="receipt-details">
            <p><strong>Name:</strong> <?= $nama; ?></p>
            <p><strong>Email:</strong> <?= $email; ?></p>
            <p><strong>IC:</strong> <?= $ic; ?></p>
            <p><strong>Phone Number:</strong> <?= $phone_number; ?></p>
            <p><strong>Amount:</strong> <?= $amount; ?></p>
            <p><strong>Donation Date:</strong> <?= date('Y-m-d', strtotime($donate_date)); ?></p>
        </div>
        <div class="button-container">
            <button class="print-button" onclick="window.print()">Print</button>
            <a href="<?= site_url('indexdonate') ?>" class="back-button">Back</a>
        </div>
    </div>
</body>
</html>
