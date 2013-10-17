<?php

use Nette\Forms\Controls\TextInput;


TextInput::extensionMethod('addPlaceholder',
    function (TextInput $that, $text = NULL)
    {
        $text = ($text == NULL) ? $that->caption : $text;

        $that->setAttribute('placeholder', $text);

        return $that;
    }
);

TextInput::extensionMethod('setAutofocus',
    function (TextInput $that, $autofocus = TRUE)
    {
        $that->setAttribute('autofocus', $autofocus);
        return $that;
    }
);
