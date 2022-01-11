<h2>view all data</h2>
{{var_dump($product)}}

<div>

    <form action="{{route('addProduct.store')}}" method="post">
        @csrf
        <label for="">productName</label>
        <input type="text" name="productName">
        <br>
        <label for="">price</label>
        <input type="text" name="price">
        <br>
        <label for="">availability</label>
        <input type="text" name="availability">

        <input type="submit" >
    </form>

</div>
