<h1>Edit Produk</h1>

<form action="{{route('products.update', $product->id)}}" method="post">
    @method('put')
    @csrf
    Name: <input type="text" name="name" value="{{ $product->name}}"><br>
    Deskripsi: <input type="text" name="description" value="{{ $product->description}}"><br>
    Harga: <input type="text" name="price" value="{{ $product->price}}"><br>
    Image: <input type="text" name="image_url" value="{{ $product->image_url}}"><br>

    <button type="submit">Update</button>
</form>