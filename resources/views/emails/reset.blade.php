<h3>
  <a href="{{ __('https://yaima-quiz.kanasann.com') }}">{{ __('やいまクイズ') }}</a>
</h3>
<p>
  {{ __('パスワード再発行のリクエストを受け付けました。') }}<br>
  {{ __('下記のURLにアクセスして、パスワードを再設定してください。') }}<br>
  {{ __('こちらのメールに心当たりの無い方は、このままこのメールを削除してください。') }}
</p>
<p>
  {{ $actionText }}: <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
</p>