<?php
require_once "db_config.php";

// Initialize search variables
$startDate = '';
$endDate = '';
$invoices = array();

// Check if the search form has been submitted
if (isset($_POST['searchInvoice'])) {
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    // Query to retrieve invoice data within the selected date range
    $sql = "SELECT i.invoice_no, i.date, i.customer,c.district,i.item_count,i.amount
            FROM invoice i
            INNER JOIN customer c ON i.customer = c.id
            WHERE i.date BETWEEN '$startDate' AND '$endDate'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $invoices[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="css/forms.css">
    </head>

<body>
    <div class="container mt-4">
        <h2>Invoice Report</h2>
        <form method="post">
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date"
                        value="<?php echo $startDate; ?>">
                </div>
                <div class="col-md-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date"
                        value="<?php echo $endDate; ?>">
                </div>
                <div class="col-md-3">

                    <button type="submit" name="searchInvoice" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <?php if (count($invoices) > 0): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Invoice Number</th>
                    <th>Invoice Date</th>
                    <th>Customer</th>
                    <th>Customer District</th>
                    <th>Item Count</th>
                    <th>Invoice Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <td><?php echo $invoice['invoice_no']; ?></td>
                    <td><?php echo $invoice['date']; ?></td>
                    <td><?php echo $invoice['customer'] ;?></td>
                    <td><?php echo $invoice['district']; ?></td>
                    <td><?php echo $invoice['item_count']; ?></td>
                    <td><?php echo $invoice['amount']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No invoices found within the selected date range.</p>
        <?php endif; ?>
    </div>
</body>

</html>