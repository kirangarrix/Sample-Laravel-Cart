
<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">

 @include('admin.css')

 
 <style type="text/css">
   
    .title{
     color: white;
      padding-top: 25px;
       font-size: 25px;
    }
 
    label{
      display: inline-block;
      width: 200px;
    }
 
  </style>
  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar')

      @include('admin.navbar')
      
      <!-- partial -->
      
      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
      
          <h1 class="title">Add Product</h1>
     
     @if(session()->has('message'))
       <div class="alert alert-success">
     <button type="button" class="close" data-dismiss="alert">X</button>
            {{ session()->get('message') }}
       
          </div>     
     @endif
     
          <form action="{{ url('updateproduct',$data->id) }}" method="POST" enctype="multipart/form-data">

        @csrf
      <div style="padding: 15px">
        <label for="Product title">Product Title</label>
        <input style="color: black" type="text" name="title" value="{{ $data->title }}"  required>
      </div>

      <div style="padding: 15px">
        <label for="Product title">Price</label>
        <input style="color: black" type="number" name="price" value="{{ $data->price }}"  required>
      </div>

      <div style="padding: 15px">
        <label for="Product title">Description</label>
        <input style="color: black" type="text" name="des" value="{{ $data->description }}"  required>
      </div>

      <div style="padding: 15px">
        <label for="Product title">Quantity</label>
        <input style="color: black" type="text" name="quantity" value="{{ $data->quantity }}"  required>
      </div>

      <div style="padding: 15px">
        <label for="Product title">Old Image</label>
       <img height="100px" width="100px" src="/productimage/{{ $data->image }}" alt="imgg">
      </div>

      <div style="padding: 15px">
        <label for="">Change the Image</label>
        <input type="file" name="file">
      </div>

      <div style="padding: 15px">
      <input class="btn btn-success" type="submit" name="submit">
      </div>

    </form>




         </div>  
     </div>


          <!-- partial -->
      @include('admin.script')
  </body>
</html>