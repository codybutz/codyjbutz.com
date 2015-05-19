<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control markdown-editor']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['unpublished' => 'Unpublished', 'published' => 'Published'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Featured Image') !!}
    <div class="row">
        <div class="col-sm-2">
            @if(isset($post) && $post->getFeaturedImage() != null)
                <img src="{{$post->getFeaturedImage()->getUrl('timeline')}}" class="img-circle img-responsive " width="50" height="50"/>
            @else
                <img src="/img/no-featured-image.png" class="img-circle img-responsive " width="50" height="50"/>
            @endif
        </div>
        <div class="col-sm-10">
            {!! Form::file('featuredImage', null) !!}
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('tagged', 'Tags:') !!}
    {!! Form::select('tagged[]', $tags, isset($post) ? $post->tagNames() : null, ['class' => 'form-control tagList', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>