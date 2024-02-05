<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Box Icons Mode --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Bootsrap Mode --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PROJECT 88 </title>

</head>
<body>
    <div class="container mt-5">
        <h1>Data Produk</h1>
        <hr>

        <a href="/products/create" class="btn btn-primary mb-4 p-2"><i class='bx bx-user-plus'></i> Tambah Data</a>

        <table class="table table-bordered table-striped mt-4 myTable" style="width: 95%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th class="">IMG URL</th>
                    <th style="width: 30%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                @foreach ($products as $product)
                <tr>
                    <td> {{ $no++ }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->image_url }}</td>
                    <td style="width: 100%" class="d-flex justify-content-center">
                        <a href="/products/{{ $product->id}}/edit" class="btn btn-success mb-1 mx-2 col-md-4 col-xs-8"><i class='bx bx-edit'></i> Edit</a>
                        <form action="/products/hapus/{{ $product->id}}" method="post">
                            @csrf
                            @method('DELETE')
                           <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

