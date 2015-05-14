@if(count($categories) > 0)
    <ul class="recent-posts">
        @foreach($categories as $category)
            <li><a href="{{ route('blog.category', ['category' => $category->slug]) }}" title="{{ $category->name }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@else
    <b>No categories to show</b>
@endif