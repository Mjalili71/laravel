<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
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
    <form action="{{route('admin.content.post.update',$post->id)}}" method="post" enctype="multipart/form-data"  name="jj"id="form">
        @method('PUT')
        @csrf
        {{-- <input type="hidden" name="_method" value="post"> --}}

   
        {{-- {{ method_field('post') }} --}}
        <label for="">عنوان پست</label>
        <input type="text"  name="title" value="{{ old('title',$post->title) }}">
    
        @error('name')
            <strong style="background-color: aqua">{{ $message }}</strong>
        @enderror
        



             <div >
                <label for="">انتخاب دسته</label>
                <select name="category_id" id=""   >
                    <option value="">دسته را انتخاب کنید</option>
                    @foreach ($postCategories as $postCategory)
                     <option value="{{ $postCategory->id }}" @if(old('category_id', $post->category_id) == $postCategory->id) selected @endif>{{ $postCategory->name }}</option>
                    @endforeach

    
            </div>
            @error('category_id')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror            
 



        
            <div>
                <label for="">تصویر </label>
                <input type="file" name="image" >
            </div>                      
            @error('image')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror 
    


        
        <div >
                <label for="status">وضعیت</label>
                <select name="status" id="" class="form-control form-control-sm" id="status">
                    <option value="0" @if (old('status', $post->status) == 0) selected @endif>غیرفعال</option>
                    <option value="1" @if (old('status', $post->status) == 1) selected @endif>فعال</option>
                </select>
            </div>

            @error('status')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror   





       
             <div >
                <label for="commentable">امکان درج کامنت</label>
                <select name="commentable" id=""  id="commentable">
                    <option value="0" @if (old('commentable', $post->commentable) == 0) selected @endif>غیرفعال</option>
                    <option value="1" @if (old('commentable', $post->commentable) == 1) selected @endif>فعال</option>
                </select>
            </div> 
            @error('commentable')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror 
    </section> 





       
             <div>
                <label for="">تاریخ انتشار</label>
                <input type="text" name="published_at" id="published_at"  value="{{ old('published_at',$post->published_at) }}" >
            </div>
            @error('published_at')
            <span class="alert_required bg-black  text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror 
   



        
          <section>
            <div class="form-group">
                <label for="tags">تگ ها</label>
                <input name="tags" id="tags"  value="{{ old('tags',$post->tags) }}">
            </div>   
            @error('tags')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror    
    </section>  










       <div>
                <label for="">خلاصه پست</label>
                <textarea name="summary" id="summary"   rows="6">{{ old('summary',$post->summary) }}</textarea>
            </div>                 
            @error('summary')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror   





        <section >
            <div class="form-group">
                <label for="">متن پست</label>
                <textarea name="body" id="body"   rows="6">{{ old('body',$post->body) }}</textarea>
            </div>      
            @error('body')
            <span class="alert_required bg-black text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
            @enderror     





            <button class="btn btn-primary btn-sm">ویرایش پست</button>
       

</form>

        
        

    </form>

</div>






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
