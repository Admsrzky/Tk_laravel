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
    <title>FORM | EDIT</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Update Mahasiswa</h1>
        <hr>

        <div class="fs-4"><a href="/mahasiswa">Kembali</a></div>

        <form action="/products/{{$product->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="name" value= "{{ $product->name }}" placeholder="" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}" placeholder="" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" placeholder="" required>
            </div>

            <div class="mb-3">
                <label class="form-label">IMG URL</label>
                <input type="text" class="form-control" name="image_url" value="{{ $product->image_url }}" placeholder="" required>
            </div>


            <button type="submit" value="Simpan Data" class="btn btn-primary" style="float: right;">Update</button>
</form>
