<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
      .post_title
      {
        font-size :30px;
        font-weight :bold;
        text-align : center;
        padding : 30px;
        color: green;
      }
      .div_center
      {
        text-align : center;
        padding : 30px;
      }
      label
      {
        display:inline-block;
        width: 200px;
      }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <h1 class="post_title">Add Post</h1>

        <div>
             <form action="">
               <div class="div_center">
                <label>post title</label>
                <input type="text" name="title">
               </div>
               <div class="div_center">
                <label>post description</label>
                <textarea name="description"></textarea>
               </div>
               <div class="div_center">
                <label>add image</label>
                <input type="file" name="image">
               </div>
               <div class="div_center">
              
                <input type="submit" class="btn btn-primary">
               </div>
             </form>

        </div>

      </div>

        @include('admin.footer')
  </body>
</html>