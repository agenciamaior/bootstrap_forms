# BootstrapForms

Biblioteca que gera tags HTML de formulários e campos com estilos do Bootstrap 4.

1. [Dependências](#dependencias)
2. [Instalação](#instalacao)
3. [Utilização](#utilizacao)
    1. [bsText](#text)
    2. [bsSelect](#select)
    5. [bsSubmit](#submit)
        1. [Attributes](#submit_attributes)
    6. [restForm](#rest_form)
        1. [Exemplo de utilização com insert](#rest_form_insert)
        2. [Exemplo de utilização com update](#rest_form_update)
    7. [bsDelete](#delete)
        1. [Attributes](#delete_attributes)

## <a name="dependencias"></a> Dependências

* [Bootstrap 4](https://getbootstrap.com)
* [FontAwesome 4](https://fontawesome.com/v4.7.0/)
* [Laravel 5.5 ou superior](https://laravel.com/)
* [Laravel Forms 5.5 ou superior](https://laravelcollective.com/docs/master/html)

## <a name="instalacao"></a> Instalação

```sh
$ composer require agenciamaior/bootstrap_forms
```

Esse pacote instala automaticamente a biblioteca **Laravel Forms**. Nenhuma configuração adicional é necessária.

## <a name="utilizacao"></a> Utilização

### <a name="text"></a> bsText

```php
{{ Form::bsText($name, $label, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc.  |

#### Exemplo

```php
{{ Form::bsText('nome', 'Nome') }}
```

```html
<div class="form-group">
    <label for="nome">Nome</label>
    <input class="form-control" name="nome" type="text" id="nome" >
</div>
```

#### Exemplo com atributos

```php
{{ Form::bsText('nome', 'Nome', ['class' => 'active', 'default' => 'João', 'placeholder' => 'Seu nome aqui', 'id' => 'nome-input']) }}
```

```html
<div class="form-group">
    <label for="nome">Nome</label>
    <input class="form-control active" name="nome" type="text" id="nome-input" value="João" placeholder="Seu nome aqui" />
</div>
```

**Observações:**

* O atributo **default** preenche o campo com um valor padrão.
* O atributo **class** adiciona classes novas ao campo, porém, a classe *form-control* sempre vai estar presente.

#### Campo sem label

```php
{{ Form::bsText('nome', null) }}
```

```html
<div class="form-group">
    <input class="form-control" name="nome" type="text" id="nome" >
</div>
```
#### Label com HTML

```php
{{ Form::bsText('nome', '<b>Nome</b> do Campo') }}
```

```html
<div class="form-group">
    <label for="nome"><b>Nome</b> do Campo</label>
    <input class="form-control" name="nome" type="text" id="nome" >
</div>
```

#### Variações

```php
{{ Form::bsEmail('email', 'E-mail') }}
```

```html
<div class="form-group">
    <label for="email">E-mail</label>
    <input class="form-control" name="email" type="email" id="email" >
</div>
```

```php
{{ Form::bsUrl('url', 'Link') }}
```

```html
<div class="form-group">
    <label for="url">Link</label>
    <input class="form-control" name="url" type="url" id="url" >
</div>
```

```php
{{ Form::bsPassword('pass', 'Senha') }}
```

```html
<div class="form-group">
    <label for="pass">Senha</label>
    <input class="form-control" name="pass" type="password" id="pass" >
</div>
```

### <a name="select"></a> bsSelect

```php
{{ Form::bsSelect($name, $label, $values, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| values      | Sim         | Array no estilo *key => value* que vai compor as opções do *select* |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc. |

#### Exemplo

```php
{{ Form::bsSelect('items', 'Itens', [0 => 'Item 1', 1 => 'Item 2']) }}
```

```html
<div class="form-group">
    <label for="items">Itens</label>
    <select name="item" id="item" class="form-control">
        <option value=""></option>
        <option value="0">Item 1</option>
        <option value="1">Item 2</option>
    </select>
</div>
```

#### Exemplo com atributos

```php
{{ Form::bsSelect('items', 'Itens', [0 => 'Item 1', 1 => 'Item 2'], ['placeholder' => 'Selecione uma opção', 'default' => 1]) }}
```

```html
<div class="form-group">
    <label for="items">Itens</label>
    <select name="item" id="item" class="form-control">
        <option value="">Selecione uma opção</option>
        <option value="0">Item 1</option>
        <option value="1" selected>Item 2</option>
    </select>
</div>
```

#### Sem placeholder

```php
{{ Form::bsSelect('items', 'Itens', [0 => 'Item 1', 1 => 'Item 2'], ['placeholder' => null]) }}
```

```html
<div class="form-group">
    <label for="items">Itens</label>
    <select name="item" id="item" class="form-control">
        <option value="0">Item 1</option>
        <option value="1">Item 2</option>
    </select>
</div>
```

### <a name="file"></a> bsFile

```php
{{ Form::bsFile($name, $label, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc. |

#### Exemplo

```php
{{ Form::bsFile('image', 'Foto') }}
```

```html
<div class="form-group">
    <label for="image">Foto</label>
    
    <input id="image" class="form-control" name="image" type="file">
</div>
```

#### Exemplo com atributos

```php
{{ Form::bsFile('image', 'Foto', ['class' => 'my-2']) }}
```

```html
<div class="form-group">
    <label for="image">Foto</label>
    
    <input id="image" class="form-control my-2" name="image" type="file">
</div>
```

#### Imagem padrão

```php
{{ Form::bsFile('image', 'Foto', ['default' => '/images/my-image.png']) }}
```

```html
<div class="form-group">
    <label for="image">Foto</label>
    
    <input id="image" class="form-control" name="image" type="file">

    <figure class="form-image-container">
        <img src="/images/my-image.png">
    </figure>
</div>
```

### <a name="checkbox"></a> bsCheckbox

```php
{{ Form::bsCheckbox($name, $label, $value, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| value       | Sim         | Value associado ao checkbox |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc. |

#### Exemplo

```php
{{ Form::bsCheckbox('agreed', 'Li e concordo com os termos', true) }}
```

```html
<div class="form-check">
    <input id="agreed" class="form-check-input" name="agreed" type="checkbox" value="true">

    <label class="form-check-label" for="agreed">
        Li e concordo com os termos
    </label>
</div>
```

#### Exemplo com atributos

```php
{{ Form::bsCheckbox('agreed', 'Li e concordo com os termos', true, ['checked' => true, 'id' => 'option-agreed']) }}
```

```html
<div class="form-check">
    <input id="option-agreed" checked class="form-check-input" name="agreed" type="checkbox" value="true">

    <label class="form-check-label" for="agreed">
        Li e concordo com os termos
    </label>
</div>
```

#### Múltiplos

```php
{{ Form::bsCheckbox('option_1', 'Opção 1') }}
{{ Form::bsCheckbox('option_2', 'Opção 2') }}
{{ Form::bsCheckbox('option_3', 'Opção 3') }}
```

```html
<div class="form-check">
    <input id="option_1" class="form-check-input" name="option_1" type="checkbox">

    <label class="form-check-label" for="option_1">
        Opção 1
    </label>
</div>

<div class="form-check">
    <input id="option_2" class="form-check-input" name="option_2" type="checkbox">

    <label class="form-check-label" for="option_2">
        Opção 2
    </label>
</div>

<div class="form-check">
    <input id="option_3" class="form-check-input" name="option_3" type="checkbox">

    <label class="form-check-label" for="option_3">
        Opção 3
    </label>
</div>
```

### <a name="radio"></a> bsRadio

```php
{{ Form::bsRadio($name, $label, $value, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, o valor para o atributo *id* será composto de *name-value* |
| label       | Sim         | Label do campo |
| value       | Sim         | Value associado ao radio |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc. |

#### Exemplo

```php
{{ Form::bsRadio('options', 'Opção 1', 1) }}
{{ Form::bsRadio('options', 'Opção 2', 2) }}
{{ Form::bsRadio('options', 'Opção 3', 3) }}
```

```html
<div class="form-check">
    <input id="options-1" class="form-check-input" name="options" type="radio" value="1">

    <label class="form-check-label" for="options-1">
        Opção 1
    </label>
</div>

<div class="form-check">
    <input id="options-2" class="form-check-input" name="options" type="radio" value="2">

    <label class="form-check-label" for="options-2">
        Opção 2
    </label>
</div>

<div class="form-check">
    <input id="options-3" class="form-check-input" name="options" type="radio" value="3">

    <label class="form-check-label" for="options-3">
        Opção 3
    </label>
</div>
```

**Observação**: Para que o campo funcione corretamente com mais de um, o *name* de todos os *radios* deve ser igual.

### <a name="textarea"></a> bsTextarea

```php
{{ Form::bsTextarea($name, $label, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados ao input, como *class*, *id*, *data*, etc. |

#### Exemplo

```php
{{ Form::bsTextarea('msg', 'Mensagem') }}
```

```html
<div class="form-group">
    <label for="msg">Mensagem</label>
        
    <textarea id="msg" class="form-control" name="msg" cols="50" rows="10"></textarea>
</div>
```

#### Exemplo com atributos

```php
{{ Form::bsTextarea('msg', 'Mensagem', ['cols' => 20, 'default' => 'Uma mensagem']) }}
```

```html
<div class="form-group">
    <label for="msg">Mensagem</label>
        
    <textarea id="msg" class="form-control" name="msg" cols="20" rows="10">Uma mensagem</textarea>
</div>
```

### <a name="submit"></a> bsSubmit

```php
{{ Form::bsSubmit($text, $attributes = []) }}
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| text        | Sim         | Texto do botão |
| attributes  | Não         | Atributos que podem ser alterados dentro do botão |

#### Exemplo

```php
{{ Form::bsSubmit('Salvar') }}
```

```html
<button type="submit" class="btn btn-success btn-lg">
    <i class="fa fa-check"></i> 
        
    Salvar
</button>
```

#### Exemplo com atributos

```php
{{ Form::bsSubmit('Salvar', ['class' => 'btn btn-default', 'id' => 'button-save', 'type' => 'button']) }}
```

```html
<button type="button" class="btn btn-default" id="button-save">
    <i class="fa fa-check"></i> 
        
    Salvar
</button>
```

#### Trocar o ícone

```php
{{ Form::bsSubmit('Imprimir', ['icon' => 'print']) }}
```

```html
<button type="submit" class="btn btn-success btn-lg">
    <i class="fa fa-print"></i> 
        
    Salvar
</button>
```

#### Sem ícone

```php
{{ Form::bsSubmit('Salvar', ['icon' => null]) }}
```

```html
<button type="submit" class="btn btn-success btn-lg">
    Salvar
</button>
```

### <a name="form"></a> Formulário

#### Formulário comum

```php
{{ Form::open($attributes = []) }}

// ...

{{ Form::close() }}
```

##### Exemplo

```php
{{ Form::open(['url' => '/save', 'id' => 'form-insert']) }}
    
{{ Form::close() }}
```

```html
<form method="POST" action="/save" accept-charset="UTF-8" id="form-insert">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">
    
</form>
```

##### Mudar o método

```php
{{ Form::open(['url' => '/save', 'method' => 'get']) }}
    
{{ Form::close() }}
```

```html
<form method="GET" action="/save" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">
    
</form>
```

##### Formulário para usar com o bsFile

```php
{{ Form::open(['url' => '/upload', 'files' => true]) }}

{{ Form::bsFile('image', 'Foto') }}

{{ Form::close() }}
```

```html
<form method="POST" action="/upload" accept-charset="UTF-8" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">

    <div class="form-group">
        <label for="image">Foto</label>
        <input id="image" class="form-control" name="image" type="file">
    </div>
</form>
```

#### restForm

```php
{{ Form::restForm($model, $attributes = []) }}

// ...

{{ Form::close() }}
```

##### Exemplo com Insert

Suponha um model **Pedido** com o seguinte Controller *PedidosController.php*:

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidosController extends Controller
{
    //...

    public function index() {
        $pedido = new Pedido;

        return view('pedidos.index', [
            'pedido' => $pedido,
        ]);
    }

    //...
}
```

E sua respectiva view *pedidos/index.blade.php*:

```php
//...

{{ Form::restForm($pedido) }}

//...

{{ Form::close() }}

//...
```

Ao identificar a variável **$pedido** como um novo Model, a função *restForm* vai tentar obter o nome da variável no plural e procurar dentro do arquivo *routes/web.php* por uma rota chamada **pedidos.store**, por isso, devemos criar essa rota dentro desse arquivo, por exemplo:

```php
//...

Route::post('/pedidos', 'PedidosController@store')->name('pedidos.store');

//...
```

```html
<form method="POST" action="/pedidos" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">

</form>
```

##### Exemplo com Update

Suponha um model **Pedido** com o seguinte Controller *PedidosController.php*:

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidosController extends Controller
{
    //...

    public function edit() {
        $pedido = Pedido::find(10);

        return view('pedidos.edit', [
            'pedido' => $pedido,
        ]);
    }

    //...
}
```

E sua respectiva view *pedidos/edit.blade.php*:

```php
//...

{{ Form::restForm($pedido) }}

//...

{{ Form::close() }}

//...
```

Ao identificar a variável **$pedido** como registro existente, a função *restForm* vai tentar obter o nome da variável no plural, trocar automaticamente o método do formulário de *POST* para *PUT* e procurar dentro do arquivo *routes/web.php* por uma rota chamada **pedidos.update** com o parâmetro, por isso, devemos criar essa rota dentro desse arquivo, por exemplo:

```php
//...

Route::put('/pedidos/{pedido}', 'PedidosController@update')->name('pedidos.update');

//...
```

```html
<form method="PUT" action="/pedidos" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">
    <input type="hidden" name="id" id="id" value="10" />
</form>
```

A função vai gerar um campo do tipo *hidden* com valor do ID do registro selecionado.

##### Alterar as rotas

...to do...