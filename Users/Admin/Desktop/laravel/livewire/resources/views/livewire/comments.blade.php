<div>
    <div class="container mt-5 col-md-4">
        <div class="form-group">

          
            <label for="" class="text-center"><h3>Comments system</h3></label>
<input type="text" wire:model="newcomment" class="form-control">
<span><Button class="btn btn-primary btn btn-sm mt-2" wire:click="addcomment">Add</Button></span>
<div class="mt-3" >
    @foreach($comments as $comment)
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{$comment['author']}} </h4><p>{{$comment['time']}}</p>
          <p class="card-text">{{$comment['body']}}</p>
    
        </div>
      </div>
      @endforeach
</div>
        </div>


    </div>
</div>
