# Bracketeer composer library
Library method "isBalanced" accepts string that contain "(", ")", " ", "\r", "\n", "\t".
Returns true if symbols "(" and ")" are balanced and false otherwise.
Throws InvalidArgumentException if given string contains any other symbol than said in first sentence.

# Install
'''
composer require kargin/bracketeer:dev-master
'''
# Use
In your project add following lines:
'''
<?php
require_once 'vendor/autoload.php';
use Kargin\Bracketeer;

$bracketeer = new Bracketeer();
'''
To use library method "isBalanced":
'''
$bracketeer->isBalanced($s);
'''

