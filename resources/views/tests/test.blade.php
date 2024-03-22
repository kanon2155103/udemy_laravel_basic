test
<br>

@foreach($values as $value)
{{ $value->id }} <!--マスタッシュ XSS攻撃を防ぐために、PHPの'htmlspacialchars'関数を通して値を送信してくれる -->
<br>
{{ $value->text }}
<br>
@endforeach
