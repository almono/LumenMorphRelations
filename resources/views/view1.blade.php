@extends('app')
@section('content')
    <div class="container">
        <div class="col-12 text-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('morph1') }}">Tag morphs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('morph2') }}" style="color: white;">Comment morphs</a>
                </li>
            </ul>
            <hr>
            <div class="row col-12 text-center">
                <h1 class="col-12 col-sm-6">Create tag</h1>
                <form class="form-inline"  action="{{ route('add_tag') }}" method="POST">
                    <div class="fb-text form-group field-comment">
                        <input type="text" placeholder="Comment" class="form-control" name="name" maxlength="255" id="name" required="required" aria-required="true">
                    </div>
                    <button type="submit" class="btn btn-info">Create Tag</button>
                </form>
            </div>
            <hr>
        </div>
        <div class="col-12 row text-center">
            <div class="col-8" style="padding: 0px;">
                <h2>Photo list</h2>
                <hr>
                @if(isset($photos) && !is_null($photos))
                    <div class="photo-list">
                        @foreach($photos as $photo)
                            <div class="col-12 row photo-name text-center" style="margin-bottom: 15px;">
                                <span class="col-3">{{ $photo->photo_name }}</span>
                                <form class="col-9 form-inline" action="{{ route('assign_photo_tag') }}" method="POST">
                                    <input type="hidden" name="photo-id" value="{{ $photo->id }}">
                                        @if(isset($tags) && !is_null($tags))
                                            <select class="custom-select col-8" name="photo-tag">
                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    <button type="submit" class="btn btn-info col-4" >Assign Tag</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-4" style="padding: 0px;">
                <h2>Tag list</h2>
                <hr>
                @if(isset($tags) && !is_null($tags))
                    <div class="col-12 tag-list">
                        @foreach($tags as $tag)
                            <div class="tag-name">{{ $tag->name }}</div>
                        @endforeach
                    </div>
                @else
                    There are no tags to be displayed :(
                @endif
            </div>
            <div class="col-8" style="padding: 0px;">
                <h2>Video list</h2>
                <hr>
                @if(isset($videos) && !is_null($videos))
                    <div class="photo-list">
                        @foreach($videos as $video)
                            <div class="col-12 row photo-name text-center" style="margin-bottom: 15px;">
                                <span class="col-3">{{ $video->video_name }}</span>
                                <form class="col-9 form-inline" action="{{ route('assign_video_tag') }}" method="POST">
                                    <input type="hidden" name="video-id" value="{{ $video->id }}">
                                    @if(isset($tags) && !is_null($tags))
                                        <select class="custom-select col-8" name="video-tag">
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                    <button type="submit" class="btn btn-info col-4" >Assign Tag</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop