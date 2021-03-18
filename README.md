
![Downloads](https://img.shields.io/packagist/dt/lloadout/blade-components.svg?style=flat-square)

# Blade Components

This package provides some additional blade components for BladeUiKit.
I will delete this repo if the elements i provide are also included in BladeUIKit

## Select 

```shell
@php($options = [1 => 'first', 2 => 'second']);
<x-select name="your-name" :options="$options" ></x-select>
```

This markup will render as

```shell
<select name="your-name">
        <option value="1">first</option>
        <option value="2">second</option>
</select>
```
You can pass in any iterable keyed by id => value
