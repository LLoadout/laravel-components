
![Downloads](https://img.shields.io/packagist/dt/lloadout/components.svg?style=flat-square)

# Components

With LLoadout Components you will pull in the best off class Laravel frontend components.
We don't re-invent the wheel but we bring the best components together.  

## Installation 

```shell
composer require lloadout/components
```

## Dependencies

- [Blade Ui Kit](https://github.com/blade-ui-kit)

## Extra LLoadout components

Some of the components listed above are missing some features, features we provide.
The components provide by LLoadout are prefixed with 'load'.

### Select 

```shell
@php($options = [1 => 'first', 2 => 'second']);
<x-load-select name="your-option" :options="$options" ></x-select>
```

This markup will render as

```shell
<select name="your-name">
        <option value="1">first</option>
        <option value="2">second</option>
</select>
```
You can pass in any iterable keyed by id => value
