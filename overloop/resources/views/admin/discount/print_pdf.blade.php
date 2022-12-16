<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop Voucher Discount PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Edward</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200026</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>Voucher Discount</strong><br />
        &nbsp;</p>

        <table class="table" id="DataTables">
          <thead>
            <tr>
                <th>#</th>
                <th>Voucher</th>
                <th>Discount</th>
            </tr>
          </thead>
          <tbody>
            @foreach($discount as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->voucher }}</td>
                <td>{{ $item->discount }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

    <p style="text-align:center"><strong>Copyright Edward (03081200026)</strong></p>


</body>

</html>