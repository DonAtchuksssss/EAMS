@extends('layouts.app')

@section('title')
{{ $category->meta_title }}
@endsection

    

@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
           


                 <livewire:frontend.product.index  :category="$category" />

                    </div>

                </div>
            </div>

@endsection
