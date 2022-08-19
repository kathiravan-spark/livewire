<div style="text-align: center;">
    <button wire:click="increment">+</button><h1>{{$count}}</h1>
    <button wire:click="decrement">-</button>


    <div class="col-4  mx-auto mt-5">

        <div>
            <h3>Comments</h3>
            <input type="text" class="form-control" wire:model="newComment" aria-describedby="text" placeholder="Add your Comments">
        </div>
        <button wire:click="addComment" class="m-3 btn btn-primary" style="text-align: center;">Submit</button>
    </div>
    {{$newComment}}
    @foreach($comments as $comment)
    <div class="card col-4 border mx-auto mt-3 border-primary justify-content-center">
        <p class="font-weight-bold">{{$comment['creator']}}
             <small class="form-text text-muted">{{$comment['created_at']}}</small>
        </p>
        <p class="text-center">{{$comment['body']}}</p>
    </div>
    @endforeach
   
</div>