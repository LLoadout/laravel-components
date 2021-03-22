
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
- [Apex charts](https://apexcharts.com/)
- [Select 2](https://select2.org/)

## Extra LLoadout components

Some of the components listed above are missing some features, features we provide.
The components provide by LLoadout are prefixed with 'load'.

### Load the assets 

    @lloadoutScripts

### Select 

    @php($options = [1 => 'first', 2 => 'second']);
    <x-load-select name="your-option" :options="$options" ></x-select>


This markup will render as


    <select name="your-name">
        <option value="1">first</option>
        <option value="2">second</option>
    </select>


You can pass in any iterable keyed by a key value pair.  If you add a class 'searchable' , the select field changes into a searchable select2 field.

### Graphs

The charts components make use of apexcharts.  Only three types of graphs are implemented in lloadout for now.
I only created a basic implementation, if you want to add more power to the graphics I refer to Apex Charts itself.

All charts have three params 

* title : the title for the graph
* data : an array of data 
* labels : an array of labels

The bar chart has an extra param
* orientation : this can be 'horizontal' or 'vertical'

#### Barchart

    <x-load-barchart title="Provide a title" key="delayed-{{ now() }}" orientation='horizontal' :data="[10,20,70]" :labels="['a']"></x-load-barchart>

#### Stacked barchart

For the stacked barchart you can use the same tag as for the simple barchart , it takes an array of arrays as data

    <x-load-barchart title="Provide a title" key="delayed-{{ now() }}" orientation='horizontal' :data="[[10,20,70],[10,20,70],[10,20,70]]" :labels="['a']"></x-load-barchart>


#### Piechart

    <x-load-piechart title="Provide a title" key="delayed-{{ now() }}" :data="[10,20,70]" :labels="['a']"></x-load-piechart>

#### Linechart
    <x-load-linechart title="Provide a title" key="delayed-{{ now() }}" :data="[10,20,70]" :labels="['a']"></x-load-linechart>


