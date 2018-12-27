# BootstrapForms

Biblioteca para criar tags HTML de formulários e campos com estilos do Bootstrap

1. [Dependências](#dependencias)
2. [Instalação](#instalacao)
    1. [Instalação do Laravel Forms](#instalacao_laravel_forms)
3. [Utilização](#utilizacao)
    1. [bsText](#text)
    2. [bsEmail](#email)
    3. [bsPassword](#password)
    4. [bsSelect](#select)
    5. [bsSubmit](#submit)
        1. [Attributes](#submit_attributes)
    6. [restForm](#rest_form)
        1. [Exemplo de utilização com insert](#rest_form_insert)
        2. [Exemplo de utilização com update](#rest_form_update)
    7. [bsDelete](#delete)
        1. [Attributes](#delete_attributes)

## <a name="dependencias"></a> Dependências

* [Bootstrap 3](https://getbootstrap.com/docs/3.3/)
* [FontAwesome 4](https://fontawesome.com/v4.7.0/)
* [Laravel 5.5 ou superior](https://laravel.com/)
* [Laravel Forms 5.5 ou superior](https://laravelcollective.com/docs/master/html)

## <a name="instalacao"></a> Instalação

```sh
$ composer require kdymsolucoes/bootstrap_forms
```

### <a name="instalacao_laravel_forms"></a> Instalação do Laravel Forms

Esse pacote instala automaticamente a biblioteca **Laravel Forms**. Caso você ainda não tenha configurado essa biblioteca, você pode seguir os passos abaixo, copiados da [documentação original](https://laravelcollective.com/docs/master/html):

Adicione um novo Provider dentro do array `providers` em `config/app.php`:

```php
'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
],
```

Depois, adicione dois aliases dentro do array `aliases` em `config/app.php`:

```php
'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
],
```

## <a name="utilizacao"></a> Utilização

### <a name="text"></a> bsText

```php
{{ Form::bsText($name, $label, $attributes = [], $default = null) }}
```

```html
<div class="form-group">
    <label for="$name">$label</label>
    <input class="form-control" name="$name" type="text" id="$name" value="$default">
</div>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados no input, como *class*, *id*, *data*, etc. **Obs.:** A classe *form-control* sempre aparece no input, ao definir um atributo *class*, as classes adicionadas aparecerão **após** ela |
| default     | Não         | Valor default que aparece no campo, pode ser nulo |


### <a name="email"></a> bsEmail

```php
{{ Form::bsEmail($name, $label, $attributes = [], $default = null) }}
```

```html
<div class="form-group">
    <label for="$name">$label</label>
    <input class="form-control" name="$name" type="email" id="$name" value="$default">
</div>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados no input, como *class*, *id*, *data*, etc. **Obs.:** A classe *form-control* sempre aparece no input, ao definir um atributo *class*, as classes adicionadas aparecerão **após** ela |
| default     | Não         | Valor default que aparece no campo, pode ser nulo |

### <a name="password"></a> bsPassword

```php
{{ Form::bsPassword($name, $label, $attributes = []) }}
```

```html
<div class="form-group">
    <label for="$name">$label</label>
    <input class="form-control" name="$name" type="password" id="$name">
</div>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados no input, como *class*, *id*, *data*, etc. **Obs.:** A classe *form-control* sempre aparece no input, ao definir um atributo *class*, as classes adicionadas aparecerão **após** ela |

### <a name="select"></a> bsSelect

```php
{{ Form::bsSelect($name, $label, $values, $default = null, $placeholder = '', $attributes = []) }}
```

```html
<div class="form-group">
    <label for="$name">$label</label>
    <select name="$name" id="$name" class="form-control">
        <option value="$values[key]">$values[value]</option>
        <option value="$values[key]">$values[value]</option>
        <option value="$values[key]">$values[value]</option>
        <!-- ... -->
    </select>
</div>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| name        | Sim         | Atributo *name* do input. Caso **$attributes['id']** não seja especificado, esse valor também será usado para o *id* |
| label       | Sim         | Label do campo |
| values      | Sim         | Array no estilo *key => value* que vai compor as opções do *select* |
| default     | Não         | Valor padrão que já vai estar selecionado, deve ser uma das chaves/índices do array *$values* |
| placeholder | Não         | Valor que vai aparecer no campo caso nenhuma opção esteja selecionada |
| attributes  | Não         | Array com atributos que podem ser alterados/adicionados no input, como *class*, *id*, *data*, etc. **Obs.:** A classe *form-control* sempre aparece no input, ao definir um atributo *class*, as classes adicionadas aparecerão **após** ela |

### <a name="submit"></a> bsSubmit

```php
{{ Form::bsSubmit($text, $attributes = []) }}
```

```html
<button type="submit" class="btn btn-success btn-lg">
    <i class="fa fa-check"></i> $text
</button>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| text        | Sim         | Texto do botão |
| attributes  | Não         | Atributos que podem ser alterados dentro do botão *(vide abaixo)* |

#### <a name="submit_attributes"></a> Attributes

| Atributo | Padrão | Descrição |
| -------- | ------ | --------- |
| id       | ''                     | *id* do botão   |
| class    | btn btn-success btn-lg | Classe do botão |
| icon     | check                  | Ícone do botão. Caso seja *false*, o ícone não será exibido |

### <a name="rest_form"></a> restForm

```php
{{ Form::restForm($model, $attributes = []) }}
```

Esse comando cria uma tag de formulário seguindo um modelo REST, com rotas diferentes baseado no tipo de operação desejada (insert/update), fazendo com que seja possível utilizar o mesmo formulário tanto para insert quanto update.

#### <a name="rest_form_insert"></a> Exemplo de utilização com insert

`App/Http/Controllers/PedidosController.php`

```php
namespace App\Http\Controllers;

// ...

class PedidosController extends Controller
{
    // ...

    public function create() {
        $pedido = new Pedido;

        return view('pedidos.create', [
            'pedido' => $pedido,
        ]);
    }

    // ...
}
```

`routes/web.php`

```php
// ...
Route::resource('pedidos', 'PedidosController');
// ...
```

A função *resource* vai gerar as seguintes rotas:

| Nome da Rota    | Método | Rota            |
| ------------    | ------ | --------------- |
| pedidos.index   | GET    | /pedidos        |
| pedidos.create  | GET    | /pedidos/create |
| pedidos.store   | POST   | /pedidos        |
| pedidos.edit    | GET    | /pedidos/edit   |
| pedidos.update  | PUT    | /pedidos        |
| pedidos.destroy | DELETE | /pedidos        |

`resources/views/pedidos/create.blade.php`

```php
...
{{ Form::restForm($pedido) }}

{{ Form::bsText('nome', 'Nome') }}

{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}
...
```

```html
<form method="POST" action="{{ route('pedidos.store') }}" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">
    <input id="id" name="id" type="hidden">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" name="nome" type="text" id="nome">
    </div>

    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Salvar</button>
</form>
```

A função *restModel* vai analisar a variável responsável pelo Model do formulário. Caso se trate de um novo Model, ela vai utilizar a rota *pedidos.store* para o *action* do formulário.

#### <a name="rest_form_update"></a> Exemplo de utilização com update

`App/Http/Controllers/PedidosController.php`

```php
namespace App\Http\Controllers;

// ...

class PedidosController extends Controller
{
    // ...

    public function update() {
        $pedido = Pedido::find($id);

        return view('pedidos.update', [
            'pedido' => $pedido,
        ]);
    }

    // ...
}
```

`routes/web.php`

```php
// ...
Route::resource('pedidos', 'PedidosController');
// ...
```

A função *resource* vai gerar as seguintes rotas:

| Nome da Rota    | Método | Rota            |
| ------------    | ------ | --------------- |
| pedidos.index   | GET    | /pedidos        |
| pedidos.create  | GET    | /pedidos/create |
| pedidos.store   | POST   | /pedidos        |
| pedidos.edit    | GET    | /pedidos/edit   |
| pedidos.update  | PUT    | /pedidos        |
| pedidos.destroy | DELETE | /pedidos        |

`resources/views/pedidos/update.blade.php`

```php
// ...
{{ Form::restForm($pedido) }}

{{ Form::bsText('nome', 'Nome') }}

{{ Form::bsSubmit('Salvar') }}

{{ Form::close() }}
// ...
```

```html
<form method="POST" action="{{ route('pedidos.update', ['pedido' => $pedido]) }}" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">
    <input name="_method" type="hidden" value="PUT">
    <input id="id" name="id" type="hidden" value="$id">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" name="nome" type="text" id="nome" value="$pedido->nome">
    </div>

    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Salvar</button>
</form>
```

A função *restModel* vai analisar a variável responsável pelo Model do formulário. Caso se trate de um Model já existente, ela vai utilizar a rota *pedidos.update* para o *action* do formulário.

Além disso, a função também vai realizar as seguintes modificações no formulário:

* Trocar o método de *POST* para *PUT*
* Prencher o campo oculto *id* com o ID do Model
* Preencher automaticamente os campos do formulário, contanto que os nomes dos campos no model sejam iguais aos nomes dos inputs

### <a name="delete"></a> bsDelete

Essa função simula um link que utiliza o método *DELETE* ao invés do *GET*, ideal para botões de excluir

```php
{{ Html::bsDelete($text, $route, $attributes = []) }}
```

```html
<form method="POST" action="$route" accept-charset="UTF-8">
    <input name="_method" type="hidden" value="DELETE">
    <input name="_token" type="hidden" value="token_csrf_gerado_automaticamente">

    <button type="submit" class="btn btn-danger">
        <i class="fa fa-trash"></i> 
            
        $text
    </button>
</form>
```

| Campos      | Obrigatório | Descrição |
| ------      | ----------- | --------- |
| text        | Sim         | Texto do botão |
| route       | Sim         | Rota do link   |
| attributes  | Não         | Atributos que podem ser alterados dentro do botão *(vide abaixo)* |

#### <a name="delete_attributes"></a> Attributes

| Atributo | Padrão | Descrição |
| -------- | ------ | --------- |
| id       | ''                     | *id* do botão   |
| class    | btn btn-danger         | Classe do botão |
| icon     | trash                  | Ícone do botão. Caso seja *false*, o ícone não será exibido |