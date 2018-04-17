# PL5-Lexcept

### Exception Pages Resource Laravel 5.^
#### composer-plugin

<p>Packager para resource de páginas de erros.</p>
<p><b>401</b><br><b>404</b><br><b>500</b></p>

<a href="https://packagist.org/packages/lameck/lexcept" target="_blank">Assinatura packgerlist</a>

### Instalação
<pre>
composer require lameck/lexcept
</pre>

### Configuração
<p>Adicione o Provider:</p>
<pre>
Lameck\Lexcept\LexceptServiceProvider::class
</pre>
<pre>composer dumpautoload</pre>
<p>App/Exceptions/Handler.php</p>
<p>Adicione as linhas do packager em function render</p>
<pre>
if($this->isHttpException($exception)){
    switch ($exception->getStatusCode()) {
        case 401:
            return response()->view('Lameck\Lexcept::errors.401');
            break;   
        case 404:
            return response()->view('Lameck\Lexcept::errors.404');
            break;
        case 500:
            return response()->view('Lameck\Lexcept::errors.500');
            break;                           
    }
}
return parent::render($request, $exception);
</pre>
<hr>
<p>Teste: <b>127.0.0.1:8000/hello</b></p>
<br>
<img src="https://s14.postimg.cc/myaz4tjxt/lexcept.png" height="400"  width="800">
