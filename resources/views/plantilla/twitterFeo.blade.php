<table class="table table-bordered">
    <thead>
        <tr>
            <th width="50px">No</th>
            <th>Mensaje</th>
            <th>Imagenes</th>
            <th>Favoritos</th>
            <th>Retweet</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($data))
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ ++$key }}</td>
                    <!--<td>{{ $value['id'] }}</td>-->
                    <td>{{ $value['text'] }}</td>
                    <td>
                        @if(!empty($value['extended_entities']['media']))
                            @foreach($value['extended_entities']['media'] as $v)
                                <img src="{{ $v['media_url_https'] }}" style="width:100px;">
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $value['favorite_count'] }}</td>
                    <td>{{ $value['retweet_count'] }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">No hay tweets.</td>
            </tr>
        @endif
    </tbody>
</table>
