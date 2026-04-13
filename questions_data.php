<?php
$questions = [
    'easy' => [
              [
                  'text' => 'Which is a valid C++ data type?',
                  'options' => ['integer', 'float', 'doub', 'number'],
                  'answer' => 1,
                  'points' => 10
              ],
              [
                  'text' => 'Which of the following is used for comments in C++?',
                  'options' => ['/* comment */', '// comment */', '// comment', 'both // comment or /* comment */'],
                  'answer' => 3,
                  'points' => 10
              ],
              [
                  'text' => 'Which of the following is used to terminate the function declaration in C++?',
                  'options' => [';', ']', ')', ':'],
                  'answer' => 0,
                  'points' => 10
              ],
              [
                  'text' => 'Which of the following is called extraction/get from operator?',
                  'options' => ['<<', '>>', '>', '<'],
                  'answer' => 1,
                  'points' => 10
              ],
              [
                  'text' => 'Which tag is used to create a table row?',
                  'options' => ['<th>', '<tr>', '<td>', '<table>'],
                  'answer' => 1,
                  'points' => 10
              ],
              [
                  'text' => 'Which tag is used to add a comment in HTML?',
                  'options' => ['<!-- comment -->', '// comment', '/* comment */', '# comment'],
                  'answer' => 0,
                  'points' => 10
              ],
              [
                  'text' => 'Which CSS property controls text size?',
                  'options' => ['font-size', 'text-size', 'text-style', 'font-style'],
                  'answer' => 0,
                  'points' => 10
              ],
              [
                  'text' => 'Which CSS property controls text style?',
                  'options' => ['font-size', 'text-size', 'text-style', 'font-style'],
                  'answer' => 2,
                  'points' => 10
              ],
              [
                  'text' => 'Which of the following is the correct extension of the Python file?',
                  'options' => ['.python', '.pl', '.py', '.p'],
                  'answer' => 2,
                  'points' => 10
              ],
              [
                  'text' => 'Which of the following character is used to give single-line comments in Python?',
                  'options' => ['//', '#', '!', '/*'],
                  'answer' => 1,
                  'points' => 10
              ],
              ],
      'medium' => [
                  [
                      'text' => 'Who invented C++?',
                      'options' => ['Dennis Ritchie', 'Ken Thompson', 'Brian Kernighan', 'Bjarne Stroustrup'],
                      'answer' => 3,
                      'points' => 20
                  ],
                  [
                      'text' => 'What is C++?',
                      'options' => ['C++ is an object oriented programming language', 'C++ is a procedural programming language', 'C++ supports both procedural and object oriented programming language', 'C++ is a functional programming language'],
                      'answer' => 2,
                      'points' => 20
                  ],
                  [
                      'text' => 'The C++ code which causes abnormal termination/behaviour of a program should be written under _________ block.',
                      'options' => ['catch', 'throw', 'try', 'finally'],
                      'answer' => 2,
                      'points' => 20
                  ],
                  [
                      'text' => 'What is Inheritance in C++?',
                      'options' => ['Deriving new classes from existing classes', 'Overloading of classes', 'Classes with same names', 'Wrapping of data into a single class'],
                      'answer' => 0,
                      'points' => 20
                  ],
                  [
                      'text' => 'What is meant by polymorphism in C++?',
                      'options' => ['class having only single form', 'class having four forms', 'class having many forms', 'class having two forms'],
                      'answer' => 2,
                      'points' => 20
                  ],
                  [
                      'text' => 'Which of the following functions is a built-in function in python?',
                      'options' => ['factorial()', 'print()', 'seed()', 'sqrt()'],
                      'answer' => 1,
                      'points' => 20
                  ],
                  [
                      'text' => 'Which of the following is not a core data type in Python programming?',
                      'options' => ['Tuples', 'Lists', 'Class', 'Dictionary'],
                      'answer' => 2,
                      'points' => 20
                  ],
                  [
                      'text' => 'Which of the following is used to read a HTML page and render it?',
                      'options' => ['Web server', 'Web matrix', 'Web browser', 'None of the mentioned'],
                      'answer' => 2,
                      'points' => 20
                  ],
                  [
                      'text' => 'What application can one create even before the introduction of HTML5?',
                      'options' => ['Forms', 'Browser based games', 'Web applications', 'Mobile applications'],
                      'answer' => 0,
                      'points' => 20
                  ],
                  [
                      'text' => 'What does <td> stand for?',
                      'options' => ['Table database', 'Table data', 'Table directory', 'Table direct row'],
                      'answer' => 1,
                      'points' => 20
                  ],
                  ],
         'hard' => [
                   [
                       'text' => 'What is abstract class in C++?',
                       'options' => ['Any Class in C++ is an abstract class', 'Class from which any class is derived', 'Class specifically used as a base class with atleast one virtual functions', 'Class specifically used as a base class with atleast one pure virtual functions'],
                       'answer' => 3,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which concept allows you to reuse the written code in C++?',
                       'options' => ['Inheritance', 'Polymorphism', 'Abstraction', 'Encapsulation'],
                       'answer' => 0,
                       'points' => 30
                   ],
                   [
                       'text' => 'How structures and classes in C++ differ?',
                       'options' => ['Structures by default hide every member whereas classes do not', 'In Structures, members are public by default whereas, in Classes, they are private by default', 'Structures cannot have private members whereas classes can have', 'In Structures, members are private by default whereas, in Classes, they are public by default'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   [
                       'text' => 'What is the benefit of C++ input and output over C input and output?',
                       'options' => ['Both Type safety & Exception', 'Sequence container', 'Exception', 'Type safety'],
                       'answer' => 3,
                       'points' => 30
                   ],
                   [
                       'text' => 'What is Inheritance in C++?',
                       'options' => ['Deriving new classes from existing classes', 'Overloading of classes', 'Classes with same names', 'Wrapping of data into a single class'],
                       'answer' => 0,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which keyword is used to define the macros in C++?',
                       'options' => ['#macro', '#define', 'macro', 'define'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which of these is the definition for packages in Python?',
                       'options' => ['A set of main modules', 'A folder of python modules', 'A number of files containing Python definitions and statements', 'A set of programs making use of Python modules'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which module in the python standard library parses options received from the command line?',
                       'options' => ['getarg', 'getopt', 'main', 'os'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which font format is used in web pages?',
                       'options' => ['EOT', 'WOFF 2.0', 'WOFF', 'SVG Fonts'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   [
                       'text' => 'Which is the storage that allows the caching of web pages and their associated resources?',
                       'options' => ['Offline Web Applications', 'Cookies', 'Web Databases', 'FileSystem API'],
                       'answer' => 1,
                       'points' => 30
                   ],
                   ]


];