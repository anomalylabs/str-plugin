# Usage

### Humanize

Convert a slug to a human readable string.

    {% verbatim %}{{ str_humanize("Str Plugin") }} // str-plugin{% endverbatim %}

### Camel Case

Convert a string to a camel case string.

    {% verbatim %}
    {{ str_camel("Str Plugin") }} // StrPlugin
    {{ str_studly("Str Plugin") }} // StrPlugin
    {% endverbatim %}

### Snake Case

Convert a string to a snake case string.

    {% verbatim %}{{ str_snake("Str Plugin") }} // str_plugin{% endverbatim %}

### Partial Strings

Return a partial segment of the original string.

    {% verbatim %}
    {{ str_truncate("This is too long.", 6, "...") }} // This is...
    {{ str_substr("String Plugin", 0, 6) }}... // This i...
    {% endverbatim %}

You can also finish strings using `cap`.

    {% verbatim %}
    {{ str_cap("String Plugin", "!") }} // Str Plugin!
    {{ str_cap("String Plugin!", "!") }} // Str Plugin!
    {% endverbatim %}

### Pluralization

Change the pluralization of a word.

    {% verbatim %}
    {{ str_plural("Plugin") }} // Plugins
    {{ str_singular("Plugins") }} // Plugin
    {% endverbatim %}

### String Matching

Matching segments of a string and testing it's pattern.

    {% verbatim %}
    {{ str_is("* Plugin", "String Plugin") }} // true
    {{ str_contains("String Plugin", "plugin") }} // true
    {{ str_ends_with("String Plugin", "plugin") }} // true
    {{ str_starts_with("String Plugin", "plugin") }} // false
    {{ str_equals("Example", request_input("text")) // true or false
    {% endverbatim %}

### Changing Case

Changing the case of a sentence.

    {% verbatim %}
    {{ str_lower("String Plugin") }} // string plugin
    {{ str_upper("String Plugin") }} // STRING PLUGIN
    {{ str_title("string plugin") }} // String Plugin
    {{ str_words("string plugin") }} // String Plugin
    {% endverbatim %}

### ASCII Conversion

Return the ASCII conversion of a character or string.

    {% verbatim %}{{ str_ascii("©") }} // (c){% endverbatim %}

### String Length

Return the length of a string.

### Random Strings

Return strings of varying randomness.

    {% verbatim %}
    {{ str_random(16) }} // MWTgDvUyONLx22L4
    {{ str_random_bytes(16) }} // ���ؗ3��;�0@t�
    {{ str_quick_random(16) }} // LrLzfWY20c550WUx
    {% endverbatim %}
