<!--::: VIEW/EDIT_PRESCRIPTION.PHP :::-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Prescription</title>
    <link href="<?= base_url(); ?>public/css/main.css" rel="stylesheet">
    <link href="<?= base_url(); ?>public/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .back-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="back-button" onclick="window.location.href='<?= site_url('optical-clinic/prescriptions'); ?>'">
            Back
        </button>
        <h2>Edit Prescription</h2>
        <form action="<?= site_url('optical-clinic/prescriptions/update/'.$prescription['id']); ?>" method="POST">
            <div class="mb-3">
                <label for="medication" class="form-label">Medication</label>
                <input type="text" name="medication" class="form-control" value="<?= $prescription['medication']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="dosage" class="form-label">Dosage</label>
                <input type="text" name="dosage" class="form-control" value="<?= $prescription['dosage']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control" value="<?= $prescription['duration']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="renewal_date" class="form-label">Renewal Date</label>
                <input type="date" name="renewal_date" class="form-control" value="<?= $prescription['renewal_date']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Prescription</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
