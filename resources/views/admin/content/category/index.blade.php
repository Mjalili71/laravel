<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
     @foreach ($postCategories as $postcategory)

     name:{{$postcategory->name}}<br>
   description:{{$postcategory->description}}<br>
     slug:{{$postcategory->slug}}<br>
    status:{{$postcategory->status}}<br>
     tags:{{$postcategory->tags}}<br>
   <br>
   <br>
   <br>


informashion saved succssfully.
<a href=" {{route('admin.content.category.edit',$postcategory->id)}}" style="background-color: aquamarine"> edit</a>
  



<form action="{{route('admin.content.category.destroy',$postcategory->id)}}" method="post">
    @csrf
    {{ method_field('delete') }}
    {{-- {{ method_field('DELETE') }}  --}}
    <button style="background-color: red" type="submit"> delete</button>
</form>
     @endforeach
</body>
</html>