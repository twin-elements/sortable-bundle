##Installation
```composer require twin-elements/sortable-bundle```

in `/config/packages/routes.yaml` add
```
sortable_admin:
    resource: "@TwinElementsSortableBundle/Controller/"
    prefix: /admin
    type: annotation
    requirements:
        _locale: '%app_locales%'
    defaults:
        _locale: '%locale%'
        _admin_locale: '%admin_locale%'
    options: { i18n: false }
```

in `assets/admin/entry.js` add
```
if(typeof IS_SORTABLE_ENABLED !== "undefined" && IS_SORTABLE_ENABLED ){
    import(/*webpackChunkName: "sortable-module"*/'../../public/bundles/twinelementssortable/js/sortable');
}
```

#### How it use?
1.In template with list marked as 'sortable' 

add `{% use '@TwinElementsSortable/blocks.html.twig' %}`

and 
```
{% block head_js %}
    {{ block('sortable') }}
{% endblock %}
```

2. In controller 
```
    $responseParameters = new ResponseParameterBuilder();
    $responseParameters
        ->addParameter('key',$value);

    SortableResponseParametersPreparer::prepare($responseParameters, Entity::class);
```
