# php-browser-templating-engine
Allows for in browser templating. 


##Example##

Type the following into the code editor to iterate through each planet instance.

```{{title}}:{{#each planets}}<h6>{{this}}</h6>{{/each}}```

The code that generates this can be found in ajax.php

```
echo $engine->render(
    $_POST['content'],
    array(
    	'title' => 'Planets',
        'planets' => array(
            "Mercury",
            "Venus",
            "Earth",
            "Mars"
        )
    )
);    
```
If an element has multiple attributes such as a name and a color try add the following into the editor.

```{{#each fruits}}<p>{{this.name}} : {{this.color}}</p>{{/each}}```

The ajax.php file will then require the following edit:

```
echo $engine->render(
    $_POST['content'],
    array(
        'fruits' => array(
            array('name'=>'apple', 'color'=>'red'),
            array('name'=>'watermelon', 'color'=>'green'),
            array('name'=>'grape', 'color'=>'purple'),
            array('name'=>'banana', 'color'=>'yellow'),
        )
    )
); 
```

