<div>
<div class="checkbox">
        @if ($category->brands)
        <h4 style="text-align:center;border-bottom:1px solid lightgray;">Type</h4>
        @foreach ($category->brands as $brandItem)
        <label class="d-block" style="margin-bottom:10px;">
            <input type="checkbox" wire:model="brandInputs" value="{{ $brandItem->type }}" /> {{ $brandItem->type }}
        </label>
        @endforeach

    </div>
    @endif

    <div class="row">
        <div class="row-loop" style="display: flex;flex-wrap: wrap;">
            @forelse ($products as $productItem)
            <div class="border">
                @if ($productItem->productImages->count() > 0)
                <a href="{{ url('/'.$productItem->category->slug.'/'.$productItem->slugs)}}" style="text-align:center;text-decoration:none; border-radius:10px;color:black">
                    <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{$productItem->name}}">
                    <p>{{$productItem->brand}}</p><br>
                    <h4> {{$productItem->name}}</h4>
                </a>
            </div><br>@endif
            @empty

            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Products Available for {{ $category->name }}</h4>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>