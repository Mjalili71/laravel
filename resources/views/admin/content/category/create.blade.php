<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</form></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>


    <div class="d-flex bd-highlight">
        <div class="p-2 flex-fill bd-highlight"></div>
        <div class="p-2 flex-fill bd-highlight">


            <div class="card bg-primary " style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title ">

                  
                        با سلام برای عضویت فرم زیر را کامل کنید
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">اطلاعات مورد نیاز</h6>
    <form action="{{route('admin.content.category.store')}}" method="post" enctype="multipart/form-data"  name="jj"id="form">
  
        @csrf
      

         <input type="text" name="name"   placeholder="inter your name"> <br><br>
        @error('name')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
         <input type="text" name="description"  placeholder="inter your description	"> <br><br>
        @error('description')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
        <input type="file" name="image" id="image" placeholder="inter your image	"> <br><br>
        @error('image"')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
        <input type="text" name="tags"  placeholder="inter your tags"> <br><br>
        @error('tags')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror

        <input type="text" name="status"  placeholder="inter your statuse"> <br><br>
        @error('statuse')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
        <input type="text" name="slug"  placeholder="inter your slug"> <br><br>
        @error('slug')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
        
        
        <button class="bg-secondary">send</button>

    </form>

</div>

</div>
<div class="p-2 flex-fill bd-highlight"> </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
