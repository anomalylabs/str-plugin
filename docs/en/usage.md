# Usage

The str plugin provides access to Pyro's `Str` class.

### Getting str values

To retrieve a str value you can use `str` _or_ `str_get`.

    {% verbatim %}
    {{ str('key') }}
    {{ str_get('key', 'Default') }}
    {% endverbatim %}

You can also pull a value out of the str store.

    {% verbatim %}
    {{ str_pull('key') }}
    {% endverbatim %}

### Checking if a str value exists

Use the `has` method to check if a str value exists.

    {% verbatim %}{{ str_has('dummy') }}{% endverbatim %} // false

### Retrieving the CSRF token

In order to post forms you need to include the CSRF token.

    {% verbatim %}
    <input name="_token" name="{{ csrf_token() }}"/>

    {{ csrf_field() }} // Same output as above
    {% endverbatim %}
