<h2>Products</h2>
<ul>
@foreach($products as $product)
    <li>{{ $product->name }} - ${{ $product->price }}</li>
@endforeach
</ul>
