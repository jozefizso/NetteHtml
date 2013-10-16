Nette HTML 5 Extensions
=========

HTML5 extensions for Nette framework. Adds ability to add HTML 5 placeholders to text inputs in forms. 

## Usage

```
use Nette\Application\UI;
…

$form = new UI\Form;

$form->addText('username', 'Username', 30, 20)
     ->addPlaceholder();
$form->addPassword('password', 'Password', 30)
     ->addPlaceholder();
```


## Setup

Load the TextInputExtensions.php file in your bootstrap.php:

```
require dirname(__DIR__) . '/libs/NetteHtml/TextInputExtensions.php';
```