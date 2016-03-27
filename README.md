# Readme Viewer
Renders your project's README.md file to HTML, with GitHub's CSS style and PHP code syntax highlighting.

### Intended use case

A simple documentation viewer for your project, that displays a single documentation file on your own computer (via *localhost*).
You can also use it on an online website, if the server has PHP available.

## Features

- Ultra-lightweight.
- Basic installation and zero configuration.
- Supports Markdown Extra.
- Renders your `README.md` with GitHub's styling.
- An elegant and readable typeface.
- Renders PHP code blocks with syntax highlighting.

### Limitations

- No GFM support.
- Syntax highlighting supports PHP only.
- It only renders a single markdown file.
- It requires a PHP-enabled web server. You can't use GitHub Pages static web serving, for instance.

### Requirements

- PHP >= 5.4

## Installation

Just copy the `doc` folder to your project.

Make sure your project's readme file is name `README.md`.

## Usage

Just navigate to your project's `doc` folder with your web browser (for instance, opening it on `localhost`).

## Demo

If you open this project's `doc` folder on your `localhost`, you should see this readme file rendered to HTML.

#### An example code block

	/**
	 * Does something.
	 * @param string $name
	 * @param int|null $type
	 * @return bool
	 */
	function example ($name, $type = null) {
	  if (!$name)
	    throw new ArgumentException ("You must provide a name");
	  doSomething ($name, $type, 32); // 32 is a magic number
	  echo <<<JS
	    init ($name);
	HTML;
	  return true;
	}

## License

The MIT license. See the accompanying `LICENSE` file.

---

Copyright &copy; 2016 Cláudio Silva
