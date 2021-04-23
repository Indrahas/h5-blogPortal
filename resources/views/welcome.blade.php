@extends('layouts.layout')
@section('content')
<!-- <p>Hello World</p> -->

<div class="row ">
    <div class="col-sm-3 col-md-2" style="height:100%;" >
        <div class="container">
            <form action="/"class=" mt-4 ml-2">
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="filter" id="all">
                    <label for="all" class="form-check-label">All</label>
                </div>
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="filter" id="tech">
                    <label for="all" class="form-check-label">Tech</label>
                </div>
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="filter" id="cult">
                    <label for="all" class="form-check-label">Cult</label>
                </div>
                <div class="form-check mb-2">
                    <input type="radio" class="form-check-input" name="filter" id="cult">
                    <label for="all" class="form-check-label">Announcements</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>

 <div class="col-sm-5 col-md-6">
    @foreach($blogs as $blog)

   

<div class="card mt-2">
    <div class="card-header">
        <div class="row">
                <h5 class="col">{{$blog->author}}</h5>
                <div class="col text-muted">Created at: {{$blog->created_at}}</div>
                <div class="col">
                @if(!(empty($blog->tags)))
                <span class="text-muted mr-1">Tags: </span>
                @foreach($blog->tags as $tag)
                <span class="text-muted mr-1">{{$tag}}</span>
                @endforeach
                @endif
                </div>
                

        </div>
    </div>

    <div class="card-body">
        <h5 class="card-title">{{$blog->title}}</h5>
        @if(strlen($blog->blog) > 200)
            <p class="card-text">{{ substr($blog->blog,0,200) }}<span class="dots">...</span><span class="more">
        {{ substr($blog->blog,80,strlen($blog->blog)-200) }}</span></p>
        <button  class="read btn btn-primary">Read more</button>
        
        @else
            <p class="card-text">{{ $blog->blog }}</p>
        
        @endif
        

        
        
    </div>
</div>

    @endforeach


    <!-- <div class="col-sm-5 col-md-6">

        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                        <h5 class="col">Author 1</h5>
                        <div class="col text-muted">Created at: 26/03/2021</div>
                        <div class="col text-muted">Tags: Tech</div>
                </div>
            </div>
        
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span class="dots">...</span><span class="more">
                erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. 
                Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. 
                In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
                Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

                <button  class="read btn btn-primary">Read more</button></p>
                
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                        <h5 class="col">Author 2</h5>
                        <div class="col text-muted">Created at: 26/03/2021</div>
                        <div class="col text-muted">Tags: Cult</div>
                </div>
            </div>
        
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span class="dots">...</span><span class="more">
                erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. 
                Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. 
                In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
                Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

            <button  class="read btn btn-primary">Read more</button></p>
               
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                        <h5 class="col">Author 3</h5>
                        <div class="col text-muted">Created at: 26/03/2021</div>
                        <div class="col text-muted">Tags: Cult</div>
                </div>
            </div>
        
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span class="dots">...</span><span class="more">
                erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. 
                Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. 
                In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
                Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

                <button  class="read btn btn-primary">Read more</button></p>
                
            </div>
        </div> -->

    </div>
</div>

@endsection