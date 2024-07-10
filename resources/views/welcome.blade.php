<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-lg-12 py-5">
            <div class="card card-">
                <div class="card-header d-inline-block">
                    <h1 class=" d-inline-block">Laravel MPDF Example</h1>

                </div>
                <div class="card-body">
                    <h4>Tutorial Includes</h4>
                   <ol>
                       <li>Header / Footer</li>
                       <li>Page Number</li>
                       <li>Page Break</li>
                       <li>Arabic Support </li>
                       <li>Settings Config File pdf.php (Orientation,Watermark ...etc) </li>
                       <li>Custom Fonts</li>
                       <li><b>Example 1 :</b> Display Table Data</li>
                       <li><b>Example 2 :</b> Invoices PDF</li>
                   </ol>
                </div>
                <div class="card-footer">
                    <a class="btn btn-success" href="{{ route('invoice.pdf') }}">Download PDF</a>
                    <a class="btn btn-primary" href="{{ route('users.pdf') }}">Download Users</a>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html>
