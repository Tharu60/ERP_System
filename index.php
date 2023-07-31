<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>
    <!--Boostrap Linked-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container mt-4">
        <h1>ERP System</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
        <img src="img/adcx.jpg" width="380" height="200" alt="rover" />
      </div>
                    <div class="card-body">
                        <h3>CUSTOMER</h3>
                        <h4>To Add a New Customer, Update Customer Details & Remove a Registered Customer Please click on the following button</h4>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="customer.php" class="btn btn-primary">Customer</a>
</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
        <img src="img/it.jpg" width="380" height="200" alt="rover" />
      </div>
                    <div class="card-body">
                        <h3>ITEMS</h3>
                        <h4>To Add a New Item, Update Item Details & Remove a Registered Item Please click on the following button</h4>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="item.php" class="btn btn-primary">Item</a>
</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <div class="card-header">
        <img src="img/rip.jpg" width="380" height="200" alt="rover" />
      </div>
                    <div class="card-body">
                        <h3>REPORTS</h3>
                        <h4>To Download Invoice Reports, Invoice Item Reports & Item Report Please click on the following button</h4>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="report.php" class="btn btn-primary">Reports</a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>