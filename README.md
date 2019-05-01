# Expression Engine: Striptags Add-On

An add-on for Expression Engine 3 or newer to remove HTML tags with the PHP [strip_tags()](https://secure.php.net/manual/en/function.strip-tags.php) function.
## Installation

1. Copy the striptags directory into your system/user/addons folder
2. Login to your Expression Engine installation, go to Developer --> Add-Ons 
3. Install the Striptags add-on

## Usage

```{exp:striptags}{your_field_with_tags}{/exp:striptags}```

### Example: 

The striptags add-on will turn this:    
```<p>Something <strong>with</strong> all <em>sorts</em> of <a href="something.html" title="Testing title">tags</a>.</p>```

into this:    
```Something with all sorts of tags. ```
