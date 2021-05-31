
<div class="fluid">
    <div class="wrapper ms-2 me-2">
    <h1>Product page</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        NEW PRODUCT
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
       
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        
                <div class="modal-body">
                
                <form  id="form-product" method="post">   
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" id="product_name"  class="form-control">
                            
                            <p class="error-name text-danger"> </p>
                            
                        </div>
                        <div class="mb-3">
                            <label for="product-price" class="form-label">Product Price</label>
                            <input type="number" id="product_price" name="product_price"  class="form-control">
                            <p class="error-price text-danger"> </p>
                        </div>
                        <div class="mb-3">
                            <label for="product-price" class="form-label">Description</label>
                            <textarea class="form-control" name="product_desc" id="description" style="height: 100px"></textarea>
                            <p class="error-desc text-danger"></p>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product-image</label>
                            <input class="form-control" name="product_image" type="file" id="formFile">
                            <p class="error-image text-danger"></p>
                        </div> 

                        
                    
                </div>
        
                <div class="modal-footer">
                    <button type="button" id="form-close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add" class="btn btn-primary">SAVE</button>
                </div>
                </form> 
            </div>
        </div>
    </div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
</div>
</div>