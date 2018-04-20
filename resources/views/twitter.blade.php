@extends('plantilla.plantilla')
@section('contenido')
<div class="container">
    <h2>Laravel 5 - Twitter API</h2>
    <img src="{{asset('Future/images/twitter.png')}}" alt=""><br/>
    <a href="https://twitter.com/lp_cristina?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="es" data-show-count="false">Follow @lp_cristina</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <a href="https://twitter.com/intent/tweet?screen_name=lp_cristina&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-size="large" data-related="" data-lang="es" data-show-count="false">Tweet to @lp_cristina</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <form method="POST" action="{{ route('post.tweet') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if(count($errors))
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Hay algunos problemas con el envio del tweet.
                <br/>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label>Añade el texto de tu tweet:</label>
            <textarea class="form-control" name="tweet"></textarea>
        </div>
        <div class="form-group">
            <label>Añadir imagenes:</label>
            <input type="file" name="images[]" multiple class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success">Añade un nuevo Tweet</button>
        </div>
    </form>

</div>
<div class="post">
  <a class="twitter-timeline" data-lang="es" data-width="1000" data-height="700" data-theme="dark" data-link-color="#F5F8FA" href="https://twitter.com/lp_cristina?ref_src=twsrc%5Etfw">Tweets by lp_cristina</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
@endsection
