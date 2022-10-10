@extends ('blog.master')
@section ('konten')
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    @foreach ($posts as $post) 

<!--                     <tr> 
                    <td class="text-center">{{ ++$i }}</td>  -->
<!--                     <td>{{ $post->title }}</td> 
                    <td>{{ $post->content }} </td> -->
                    <!-- <td class="text-center"> 
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST"> 
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a> 
                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>  -->
                    <!-- @csrf 
                    @method('DELETE') --> 
                    <!-- <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> 
                    </form> 
                    </td>  -->
           <!--          </tr>  -->
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ route('blog.show',$post->id) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->content }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2022
                        </p>
                        <hr>
                    </div>
                    @endforeach 
                    <!-- Divider-->
                    <hr class="my-4" />
                    
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
@endsection