# Utilisation

### Humaniser

Converti un slug en une chaîne plus lisible.

    {% verbatim %}{{ str_humanize("Plugin Str") }} // plugin-str{% endverbatim %}

### Camel Case

Converti une chaîne au format Camel Case.

    {% verbatim %}
    {{ str_camel("Plugin Str") }} // PluginStr
    {{ str_studly("Plugin Str") }} // PluginStr
    {% endverbatim %}

### Snake Case

Converti une chaîne au format Snake Case.

    {% verbatim %}{{ str_snake("Plugin Str") }} // plugin_str{% endverbatim %}

### Chaînes partielles

Retourne une partie d'une chaîne.

    {% verbatim %}
    {{ str_truncate("Ceci est trop long.", 8, "...") }} // Ceci est...
    {{ str_substr("Ceci est trop long.", 0, 4) }}... // Ceci...
    {% endverbatim %}

Vous pouvez aussi ajouter une terminaison à une chaîne en utilisant `cap`.

    {% verbatim %}
    {{ str_cap("Plugin", "!") }} // Plugin!
    {{ str_cap("Plugin!", "!") }} // Plugin!
    {% endverbatim %}

### Pluralisation

Modifie la pluralisation d'une chaîne.

    {% verbatim %}
    {{ str_plural("Plugin") }} // Plugins
    {{ str_singular("Plugins") }} // Plugin
    {% endverbatim %}

### Comparaison de chaîne

Vérification d'un motif (pattern) dans une chaîne.

    {% verbatim %}
    {{ str_is("Plugin *", "Plugin String") }} // true
    {{ str_contains("Plugin String", "plugin") }} // true
    {{ str_ends_with("Plugin String", "string") }} // true
    {{ str_starts_with("Plugin String", "string") }} // false
    {{ str_equals("Exemple", request_input("text")) // true or false
    {% endverbatim %}

### Changing Case

Changer la casse d'une phrase.

    {% verbatim %}
    {{ str_lower("Plugin String") }} // plugin string
    {{ str_upper("Plugin String") }} // PLUGIN STRING
    {{ str_title("plugin string") }} // Plugin String
    {{ str_words("plugin string") }} // Plugin String
    {% endverbatim %}

### Conversion ASCII

Retourne la conversion ASCII d'un caractére ou d'une chaîne.

    {% verbatim %}{{ str_ascii("©") }} // (c){% endverbatim %}

### Taille d'un chaîne

Retourne la taille d'une chaîne.

    {% verbatim %}{{ str_length("bonjour") }} // 7{% endverbatim %}

### Chaînes aléatoires

Retourne des chaînes aléatoires.

    {% verbatim %}
    {{ str_random(16) }} // MWTgDvUyONLx22L4
    {{ str_random_bytes(16) }} // ���ؗ3��;�0@t�
    {{ str_quick_random(16) }} // LrLzfWY20c550WUx
    {% endverbatim %}
