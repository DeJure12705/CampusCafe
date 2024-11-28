  <!-- Modal -->
  @foreach($products as $product)
  <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('products.update', $product->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="mb-3">
              <label for="" class="form-label">Product Name</label>
              <input
                type="text"
                class="form-control"
                name="product_name"
                id="product_name"
                aria-describedby="helpId"
                value="{{$product->product_name}}"
                placeholder="Add Product"
              />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">City</label>
                <select
                    class="form-select form-select-lg"
                    name="category_id"
                    id="category_id"
                >
                    <option value="" selected>Select one</option>
                    <option value="1" {{$product->category_id == 1 ? 'selected' : ""}}>Coffee</option>
                    <option value="2" {{$product->category_id == 2 ? 'selected' : ""}}>Cake</option>
                </select>
              </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3">{{$product->description}}</textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input
                type="number"
                class="form-control"
                name="price"
                id="price"
                aria-describedby="helpId"
                value="{{$product->price}}"
                placeholder="Price"
              />
            </div>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>


  @endforeach