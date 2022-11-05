# Flowbite Blade Components for Laravel 9.x

Flowbite: https://flowbite.com/  
Tailwind: https://tailwindcss.com/

## Installation

### Install Flowbite Components

Install Flowbite Components via Composer:

```
composer require "richardeszeshu/flowbite-components *"
```

### Install Tailwind and Flowbite

1) Install Tailwind CSS and Flowbite using NPM:

```
npm install -D tailwindcss postcss autoprefixer flowbite
```

2) Create a Tailwind CSS config file:

```
npx tailwindcss init
```

3) Add the view paths and require Flowbite as a plugin inside tailwind.config.js:

```js
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
  }
```

4) Add the @tailwind directives for each of Tailwind’s layers to your ./resources/css/app.css file:

```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

5) Import Flowbite in ./resource/js/app.js:

```js
import 'flowbite';
```

6) Import Tailwind and Flowbite assets in vite.config.js: 

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', '/node_modules/flowbite/dist/flowbite.css'],
            refresh: true,
        }),
    ],
});
```

7) Include the assets inside the <head> tag of your view templates?

```
@vite('resources/css/app.css')
@vite('resources/js/app.js')
@vite('node_modules/flowbite/dist/flowbite.css')
```

## Usage

### Input

```html
    <x-flowbite::form.input id="name" type="text" name="name" :required="true" />
```
  
Examples: https://flowbite.com/docs/forms/input-field/
  
Available parameters:  
  
HTML attributes:  
* id (string)
* label (string)
* type (string, default: text)
* placeholder (string)
* required (boolean, default: false)
* readonly (boolean, default: false)
* disabled (boolean, default: false)
* value (string)
* maxlength (integer, available when type isn't number)
* minlength (integer, available when type isn't number)
* name (string)
* pattern (string)
* step (integer, available when type=number)
* max (integer, available when type=number)
* min (integer, available when type=number)
* autofocus (boolean)
* form (string)
  
Flowbite options:
* size ('S' (small), 'M' (medium), 'L' (large), , default: 'M')
* helperText (string)
* disableVerificationMarkers (boolean, default: false)
* verificationSuccess (boolean, default: false)

### Textarea

```html
  <x-flowbite::form.textarea name="message" label="Your message" placeholder="Enter your message...">{{ old('message') }}</x-flowbite::form.textarea>
```
  
Examples:
  
Available parameters:

HTML attributes:
* id (string)
* label (string)
* placeholder (string)
* required (boolean, default: false)
* readonly (boolean, default: false)
* disabled (boolean, default: false)
* maxlength (integer)
* name (string)
* autofocus (boolean)
* form (string)
* rows (integer, default: 4)
  
Flowbite options:
* helperText (string)
* disableVerificationMarkers (boolean, default: false)
* verificationSuccess (boolean, default: false)