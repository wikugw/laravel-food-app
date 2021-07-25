<h1>List Produk</h1>
<a href="{{route('products.create')}}">Tambah Produk</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{route('products.edit', $product->id)}}">Edit</a>
                <form action="{{route('products.destroy', $product->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>