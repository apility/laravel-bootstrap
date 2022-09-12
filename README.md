# Bootstrap components for Laravel Blade

![Packagist](https://img.shields.io/packagist/l/apility/laravel-blade)
![Packagist package.json version](https://img.shields.io/packagist/v/apility/laravel-blade)

## Table of Contents

* [Installation](#installation)
* [Configuration](#configuration)
* [Customization](#customization)
* [Components](#components)
    * [Alert](#alert)
    * [Button](#button)
    * [Nav](#nav)
    * [Navbar](#navbar)
    * [NavbarBrand](#navbar-brand)
    * [NavDropdown](#nav-dropdown)
    * [NavLink](#nav-link)

## Installation

```bash
composer require apility/bootstrap-blade
```

## Configuration

To override the default configuration, you must first publish it

```bash
php artisan vendor:publish --provider="Bootstrap\Providers\BootstrapServiceProvider" --tag="config"
```

This will add a `bootstrap.php` file to your `config` directory.

The only supported option you can configure currently, is the 'prefix' property. This changes the names of the components.
The default prefix is `bs`, if you change it to e.g. `bootstrap` you will have to use the provided components like this:
    
```html
<x-bootstrap-alert>...</x-bootstrap-alert>
```

## Customization

To customize the provided component's views, you must first publish them

```bash
php artisan vendor:publish --provider="Bootstrap\Providers\BootstrapServiceProvider" --tag="views"
```

## Components

### Alert

```html
<x-bs-alert color="success" dismissible>
    Hello!
</x-bs-alert>
```

#### Attributes

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| color | string | `primary` | The color of the alert. |
| dismissible | boolean | `false` | Whether the alert is dismissible. |
| fade | boolean | `true` | Whether the alert should fade out. |
| show | boolean | `true` | Whether the alert should be visible. |

### AlertHeading
    
```html
<x-bs-alert-heading>
    Hello!
</x-bs-alert-heading>
```

### Button

```html
<x-bs-button color="primary" large href="#test">
    Hello!
</x-bs-button>
```

If the `href` attribute is set, the button will be rendered as an `<a>` element.

#### Attributes

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| color | string | `primary` | The color of the alert. |
| type | string | `null` | Sets the button type when used as a regular button, e.g. `submit` |
| href | string | null | Sets the href attribute, and makes the button into a link |
| outline | boolean | `false` | Whether the alert should appear outlined |
| large | boolean | `false` | Whether the alert should be large |
| small | boolean | `false` | Whether the alert should be small |
| disabled | boolean | `false` | Whether the alert is disabled |

### Nav

```html
<x-bs-nav :links="[['href' => '/', 'title' => 'Home'], ['href' => '/articles', 'Articles']]" />
```

#### Attributes
| Name | Type | Default | Description |
| --- | --- | --- | --- |
| links | array | `[]` | An array or collection of links |

The links can be passed either as a collection or a regular array.
The items can be either `Bootstrap\Models\Link` instances, associative arrays, or standard objects. They will internally be transformed to `Bootstrap\Models\Link` instances.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| url | string | `#` | The link url |
| title | string | `''` | The link title |
| target | string | `'_self'` | The link target |
| active | boolean | `false` | Whether the link is active |
| disabled | boolean | `false` | Whether the link is disabled |
| children | array | `[]` | The link children, same format as above |

### Navbar

```html
<x-bs-navbar light bg="success" :links="[['href' => '/', 'title' => 'Home'], ['href' => '/articles', 'Articles']]" />
```

#### Attributes

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| links | array | `[]` | Links to render, [see Nav](#nav) |
| bg | string | `primary` | The background color of the navbar |
| light | boolean | `false` | Whether the navbar content is light |
| dark | boolean | `false` | Whether the navbar content is dark |

### NavbarBrand
    
```html
<x-bs-navbar-brand href="/">
    Hello!
</x-bs-navbar-brand>
```

#### Attributes

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| href | string | `#` | The link of the brand |

### NavDropdown

This component is used internally when rendering Nav components, it extends [the NavLink component](#navlink).

```html
<x-bs-nav-dropdown :link="['url' => '/', 'title' => 'Articles', 'children' => [['url' => '/a', 'title' => 'A']]]">
    Home
</x-bs-nav-dropdown>
```

### NavLink

This component is used internally when rendering Nav components.

```html
<x-bs-nav-link :link="['url' => '/', 'title' => 'Articles']">
    Home
</x-bs-nav-link>
```

### Search

Renders a search form for use in the Navbar. It will submit the query string as `query` to the given url using the given method.

```html
<x-bs-search action="/submit" method="POST" placeholder="Search..." label="Search"  />
```

#### Attributes

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| action | string | `?` | The action of the form |
| method | string | `GET` | The method of the form |
| placeholder | string | `Search...` | The placeholder of the search input |
| label | string | `Search` | The label of the search submit button |
