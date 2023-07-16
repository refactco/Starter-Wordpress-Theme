<h1><code>WordPress Full Site Editing Starter Theme</code></h1>

🎯 An advanced & extensively documented Gulp WordPress workflow. Kick-start a build-workflow for your WordPress plugins and themes with Gulp.

This is a fork of the this [project](https://github.com/ahmadawais/WPGulp)


## Getting Started

Run step `#1`, `#2`, and `#3` quickly in one go — Run inside local WP install's theme folder E.g. `/wp.local/wp-content/themes/your-theme` directory.

```sh
# 1— Install WPGulp in your WordPress wp-content/themes/your-theme
npm install
# 2— Now configure variables inside the `wpgulp.config.js` file.
# 3— Start your npm build workflow.
npm start
```


## Directories Definition

#### acf-json

This directory contains local JSON files used by the Advanced Custom Fields (ACF) plugin. These files store field group settings and configurations, allowing for version control and easier management of ACF fields.


#### alm_templates

The alm_templates directory houses the repeater templates used by the Ajax Load More plugin. This directory is responsible for storing the specific templates that determine how the content is displayed when loaded via Ajax.


#### assets

All the assets required by the theme, such as CSS stylesheets, JavaScript files, images, and fonts, can be found in this directory. It serves as a central location for managing and organizing these resources.


#### blocks

The blocks directory is dedicated to custom block-related files specific to your theme's structure. These custom blocks are separate from the blocks used within content and are intended for the theme's structural elements. It's important to note that blocks used within content should be added via a custom plugin to ensure compatibility with potential theme changes in the future.


#### inc

The inc directory houses PHP functions that are utilized throughout the theme. This directory provides a centralized location for managing and organizing the theme's PHP code.


#### languages

The languages directory is used for localizing and translating the theme. It contains language files that allow you to provide translations for different languages, making your theme accessible to a wider audience.


#### parts

The parts directory stores reusable code snippets and partial templates that can be utilized across different sections of your theme. It provides a convenient way to manage and reuse common elements, such as headers, footers, or sidebars.


#### patterns

The patterns directory is where you can store reusable block patterns for the WordPress editor. These patterns allow you to define pre-designed content structures that can be easily inserted and customized within the editor.


#### src

The src directory typically holds the source files of your theme, such as Sass or JavaScript files. It's where you can write and organize the original source code before it gets compiled or processed into the final theme assets.


#### styles

The styles directory facilitates style switching for your theme. It can contain several JSON files that define different theme styles, allowing users to choose their preferred visual appearance.


#### templates

The templates directory stores individual page templates that determine the presentation and layout of specific pages or post types. You can create custom templates or modify existing ones within this directory to control the visual structure of your theme's pages.