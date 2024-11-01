=== Smartlines ===
Contributors: pyrmont
Tags: new lines, the content, breaks, br, blockquote, paragraph
Requires at least: 3.01
Tested up to: 3.01
Stable tag: 1.1

Smartlines intelligently adds HTML paragraph and break elements where WordPress forgets.

== Description ==

Smartlines inserts HTML break elements inside paragraph text when a user has put the text on a new line and paragraph elements inside blockquotes.

By default, WordPress will insert HTML paragraph elements when text is separated by a new line. But what if the user does not want a new paragraph but instead just wants a new line? Smartlines replaces single lines with break elements within a block of paragraph text. Because it only searches within blocks of paragraph text it does not unnecessary break elements.

Similarly, WordPress does not insert paragraph elements into blockquotes (has this always been the case?). This can be confusing for the user since it will display in the visual editor that they are present. Smartlines adds them.

Smartlines incorporates version 1.1 of the Simple HTML DOM parser (http://sourceforge.net/projects/simplehtmldom/). Smartlines performs a simple check to see if the functions in this code have been defined so if you are using another plugin that relies on Simple HTML DOM it won't cause any conflicts.

== Installation ==

1. Upload the Smartlines plugin to your blog.
2. Activate it.
3. That's it!

== Changelog ==

= 1.1 =

* Modified the plugin to insert paragraph elements into blockquotes.

= 1.0 =

* First version of the plugin.