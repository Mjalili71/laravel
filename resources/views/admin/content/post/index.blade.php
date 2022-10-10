<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
   <h1 class="ml-5" > wellcome to page edite post</h1> 
    
   

    @foreach ($posts as $post)
    <div class="d-flex bd-highlight">
        <div class="p-2 flex-fill bd-highlight"></div>
        <div class="p-2 flex-fill bd-highlight">
    
    
            <div class="card bg-primary " style="width: 40rem;">
                <div class="card-body">
                    <h5 class="card-title ">
    
                  
                    پست مورد نظر
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">اطلاعات مورد نیاز</h6>

    title:{{$post->title}}<br>
    body:{{$post->body}}<br>
    summary:{{$post->summary}}<br>
    slug:{{$post->slug}}<br>
    published_at:{{$post->published_at}}<br>
    tags:{{$post->tags}}<br>
    category_id:{{$post->category_id}}<br>
    commentable:{{$post->commentable}}<br>
    status:{{$post->status}}<br>

  <br>
  <br>
  <br>


informashion saved succssfully.<br>
<br>

<a href=" {{route('admin.content.post.edit',$post->id)}}" style="background-color: aquamarine"> edit</a>
 



<form action="{{route('admin.content.post.destroy',$post->id)}}" method="post">
   @csrf
   {{ method_field('delete') }}
   {{-- {{ method_field('DELETE') }}  --}}
   <button style="background-color: red" type="submit"> delete</button>
</form>
<br>
<br>
</div>
</div>
</div>
<div>
</div>
</div>
    @endforeach
            </div>
        </div>
    </div>
    <div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>
</html>