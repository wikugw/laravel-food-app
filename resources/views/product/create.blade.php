<h1>Tambah Produk</h1>

<form action="{{route('products.store')}}" method="post">
    @csrf
    Name: <input type="text" name="name"><br>
    Deskripsi: <input type="text" name="description"><br>
    Harga: <input type="text" name="price"><br>
    Image: <input type="text" name="image_url"><br>

    <button type="submit">Create</button>
</form>