<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
        @if($category->childs->count() > 0)
            @include('categoryChild', ['categories' => $category->childs])
        @endif
    @endforeach
</ul>