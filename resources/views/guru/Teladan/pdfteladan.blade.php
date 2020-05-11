<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Teladan</title>
</head>

<body>
    <style type="text/css">
    
    table {
  border-collapse: collapse;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}
.table th,
.table td {
  padding: 1rem;
  vertical-align: top;
  border-top: 1px solid #e9ecef;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #e9ecef;
}
.table tbody + tbody {
  border-top: 2px solid #e9ecef;
}
.table .table {
  background-color: #f8f9fe;
}

.table-sm th,
.table-sm td {
  padding: 0.5rem;
}

.table-bordered {
  border: 1px solid #e9ecef;
}
.table-bordered th,
.table-bordered td {
  border: 1px solid #e9ecef;
}
.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: #f6f9fc;
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #ffcfcf;
}

.table-hover .table-primary:hover {
  background-color: #ffb6b6;
}
.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #ffb6b6;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #ffcadc;
}

.table-hover .table-secondary:hover {
  background-color: #ffb1cb;
}
.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #ffb1cb;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c4f1de;
}

.table-hover .table-success:hover {
  background-color: #afecd2;
}
.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #afecd2;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bcf1fb;
}

.table-hover .table-info:hover {
  background-color: #a4ecfa;
}
.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #a4ecfa;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fed3ca;
}

.table-hover .table-warning:hover {
  background-color: #febeb1;
}
.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #febeb1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #fcc7d1;
}

.table-hover .table-danger:hover {
  background-color: #fbafbd;
}
.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #fbafbd;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #e8eaed;
}

.table-hover .table-light:hover {
  background-color: #dadde2;
}
.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #dadde2;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c1c2c3;
}

.table-hover .table-dark:hover {
  background-color: #b4b5b6;
}
.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b4b5b6;
}

.table-default,
.table-default > th,
.table-default > td {
  background-color: #bec4cd;
}

.table-hover .table-default:hover {
  background-color: #b0b7c2;
}
.table-hover .table-default:hover > td,
.table-hover .table-default:hover > th {
  background-color: #b0b7c2;
}

.table-white,
.table-white > th,
.table-white > td {
  background-color: white;
}

.table-hover .table-white:hover {
  background-color: #f2f2f2;
}
.table-hover .table-white:hover > td,
.table-hover .table-white:hover > th {
  background-color: #f2f2f2;
}

.table-neutral,
.table-neutral > th,
.table-neutral > td {
  background-color: white;
}

.table-hover .table-neutral:hover {
  background-color: #f2f2f2;
}
.table-hover .table-neutral:hover > td,
.table-hover .table-neutral:hover > th {
  background-color: #f2f2f2;
}

.table-darker,
.table-darker > th,
.table-darker > td {
  background-color: #b8b8b8;
}

.table-hover .table-darker:hover {
  background-color: #ababab;
}
.table-hover .table-darker:hover > td,
.table-hover .table-darker:hover > th {
  background-color: #ababab;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: #f6f9fc;
}

.table-hover .table-active:hover {
  background-color: #e3ecf6;
}
.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: #e3ecf6;
}

.table .thead-dark th {
  color: #f8f9fe;
  background-color: #172b4d;
  border-color: #1f3a68;
}
.table .thead-light th {
  color: #8898aa;
  background-color: #f6f9fc;
  border-color: #e9ecef;
}

.table-dark {
  color: #f8f9fe;
  background-color: #172b4d;
}
.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #1f3a68;
}
.table-dark.table-bordered {
  border: 0;
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}
.table-dark.table-hover tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}
.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.table-responsive > .table-bordered {
  border: 0;
}

@media print {
  *,
*::before,
*::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }

  a:not(.btn) {
    text-decoration: underline;
  }

  abbr[title]::after {
    content: " (" attr(title) ")";
  }

  pre {
    white-space: pre-wrap !important;
  }

  pre,
blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,
img {
    page-break-inside: avoid;
  }

  p,
h2,
h3 {
    orphans: 3;
    widows: 3;
  }

  h2,
h3 {
    page-break-after: avoid;
  }

  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }

  .container {
    min-width: 992px !important;
  }

  .navbar {
    display: none;
  }

  .badge {
    border: 1px solid #000;
  }

  .table {
    border-collapse: collapse !important;
  }
  .table td,
.table th {
    background-color: #fff !important;
  }

  .table-bordered th,
.table-bordered td {
    border: 1px solid #dee2e6 !important;
  }

  .table-dark {
    color: inherit;
  }
  .table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
    border-color: #e9ecef;
  }

  .table .thead-dark th {
    color: inherit;
    border-color: #e9ecef;
  }
}

</style>
    <center>
		<h1>Laporan total Reward</h4>
		<h3>Daftar Siswa</h5>
	</center>

    <table class="table table-hover table-bordered" id="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>POINT</th>
            </tr>
        </thead>

        <tbody>
            @foreach($score as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->where('id', $data->student_id)->first()->full_name }}</td>
                <td>{{$data->totaly_score}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>