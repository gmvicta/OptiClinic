<!--::: VIEW/PRESCRIPTION.PHP :::-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prescriptions</title>
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
        <button class="back-button" onclick="window.location.href='<?= site_url('home'); ?>'">
            Back to Home
        </button>
        <h2>Prescriptions</h2>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($_SESSION['message']); ?>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <div class="mb-4">
            <h3>Create New Prescription</h3>
            <form action="<?= site_url('optical-clinic/prescriptions/create'); ?>" method="POST">
                <div class="mb-3">
                    <label for="patient_id" class="form-label">Patient ID</label>
                    <input type="text" name="patient_id" id="patient_id" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="medication" class="form-label">Medication</label>
                    <input type="text" name="medication" id="medication" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="dosage" class="form-label">Dosage</label>
                    <input type="text" name="dosage" id="dosage" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration</label>
                    <input type="text" name="duration" id="duration" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="renewal_date" class="form-label">Renewal Date</label>
                    <input type="date" name="renewal_date" id="renewal_date" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Prescription</button>
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient ID</th>
                    <th>Medication</th>
                    <th>Dosage</th>
                    <th>Duration</th>
                    <th>Renewal Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($prescriptions)): ?>
                    <?php foreach ($prescriptions as $prescription): ?>
                        <tr>
                            <td><?= $prescription['id']; ?></td>
                            <td><?= $prescription['patient_id']; ?></td>
                            <td><?= $prescription['medication']; ?></td>
                            <td><?= $prescription['dosage']; ?></td>
                            <td><?= $prescription['duration']; ?></td>
                            <td><?= $prescription['renewal_date']; ?></td>
                            <td>
                                <a href="<?= site_url('optical-clinic/prescriptions/edit/'.$prescription['id']); ?>" class="btn btn-warning">Edit</a> |
                                <a href="<?= site_url('optical-clinic/prescriptions/delete/'.$prescription['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No prescriptions found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
