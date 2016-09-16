# _Word Frequency_

#### _Finds how many times a word occurs in a string. 9/13/2016_

#### By _**Ryan Apking**_

## Description

_User enters a block of text that is to be searched, and the word they would like to find, and the program returns how many times that word occurs within the text._

## Specifications

_Spec 1: Return 1 if the two input strings match_
* _Input: Search Input: "simple" Find Input: "simple"_
* _Output: 1_

_Spec 2: Returned number increments each time the Find string occurs in the Search string._
* _Input: Search Input: "This test isn't much of a test" Find Input: "test"_
* _Output: 2_

_Spec 3: Ignore partial matches when searching for the Find string._
* _Input: Search Input: "Concatenate this please" Find Input: "cat"_
* _Output: 0_

_Spec 4: Ignore punctuation that is attached to the Search string._
* _Input: Search Input: "Will it find 'this?' despite the punctuation?" Find input: "this"_
* _Output: 1_

_Spec 5: Allow for punctuation that belongs within a word, like an apostrophe._
* _Input: Search Input: "\"can't\"" Find Input: "can't"_
* _Output: 1_

## Setup/Installation Requirements

_Dependencies: Silex, Twig, PHPUnit_

* _Clone repository from github_
* _While in the project directory, run 'composer install' in the terminal._
* _Start a local server with the web directory as the root._
* _Navigate to localhost in browser window._

## Known Bugs

_None_

## Support and contact details

_Contact me via email with any issues_

## Technologies Used

_HTML, PHP, Silex, Twig_

### License

*This program is licensed under the MIT license.*

Copyright (c) 2016 **_Ryan Apking_**
