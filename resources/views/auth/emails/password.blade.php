<h2> APEMESP </h2>

<p>
Clique no link para alterar sua senha: <br>
<a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
</p>

<br><br>
<p>Não responda este e-mail</p>
