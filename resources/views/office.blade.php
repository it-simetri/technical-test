<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="antialiased bg-info">
    <div class="bg-light m-4 p-4 rounded">

        <h1 class="text-center">Data Produk</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Kode Kantor</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offices as $item)
                <tr>
                    <td>{{$item->officeCode}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->addressLine2}} {{$item->addressLine1}} {{$item->state}} {{$item->country}}
                        {{$item->postalCode}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>