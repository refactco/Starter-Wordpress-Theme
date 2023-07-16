/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

// Project options.

// Local project URL of your already running WordPress site.
// > Could be something like "wpgulp.local" or "localhost"
// > depending upon your local WordPress setup.
const projectURL = 'wpgulp.local';

// Theme/Plugin URL. Leave it like it is; since our gulpfile.js lives in the root folder.
const productURL = './';
const browserAutoOpen = false;
const injectChanges = true;

// >>>>> Style options.
// Path to main .scss file.
const styleSRC = './src/styles/main.scss';

// Path to place the compiled CSS file. Default set to root folder.
const styleDestination = './assets/styles/';

// Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
const outputStyle = 'expanded';
const errLogToConsole = true;
const precision = 10;

// Compiled CSS custom file name. Default set to style i.e. style.css.
const cssCustomFile = 'main';

// Path to blocks folder.
const blocksSRC = './blocks/**/*.scss';

// >>>>> Scripts options.
// Path to JS custom scripts folder.
const jsCustomSRC = './src/scripts/*.js';

// Path to place the compiled JS custom scripts file.
const jsCustomDestination = './assets/scripts/';

// Compiled JS custom file name. Default set to custom i.e. custom.js.
const jsCustomFile = 'main';

// Images options.

// Source folder of images which should be optimized and watched.
// > You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
const imgSRC = './src/images/**/*';

// Destination folder of optimized images.
// > Must be different from the imagesSRC folder.
const imgDST = './assets/images/';

// >>>>> Watch files paths.
// Path to all *.scss files inside css folder and inside them.
const watchStyles = './src/**/*[.scss, .css]';
const watchBlocksStyles = './blocks/**/*.scss';

// Path to all custom JS files.
const watchJsCustom = './src/scripts/*.js';

// Path to all PHP files.
const watchPhp = './**/*.php';

// >>>>> Zip file config.
// Must have.zip at the end.
const zipName = 'file.zip';

// Must be a folder outside of the zip folder.
const zipDestination = './../'; // Default: Parent folder.
const zipIncludeGlob = ['./**/*']; // Default: Include all files/folders in current directory.

// Default ignored files and folders for the zip file.
const zipIgnoreGlob = [
	'!./{node_modules,node_modules/**/*}',
	'!./.git',
	'!./.svn',
	'!./gulpfile.babel.js',
	'!./wpgulp.config.js',
	'!./.eslintrc.js',
	'!./.eslintignore',
	'!./.editorconfig',
	'!./phpcs.xml.dist',
	'!./vscode',
	'!./package.json',
	'!./package-lock.json',
	'!./assets/css/**/*',
	'!./assets/css',
	'!./assets/img/raw/**/*',
	'!./assets/img/raw',
	`!${imgSRC}`,
	`!${styleSRC}`,
	`!${blocksSRC}`,
	`!${jsCustomSRC}`
];

// >>>>> Translation options.
// Your text domain here.
const textDomain = 'starter-theme';

// Name of the translation file.
const translationFile = 'starter-theme.pot';

// Where to save the translation files.
const translationDestination = './languages';

// Package name.
const packageName = 'starter-theme';

// Where can users report bugs.
const bugReport = 'https://refact.co';

// Last translator Email ID.
const lastTranslator = 'Technical Support <dev@refact.co';

// Team's Email ID.
const team = 'Technical Support <dev@refact.co';

// Browsers you care about for auto-prefixing. Browserlist https://github.com/ai/browserslist
// The following list is set as per WordPress requirements. Though; Feel free to change.
const BROWSERS_LIST = ['last 2 version', '> 1%'];

// Export.
module.exports = {
	projectURL,
	productURL,
	browserAutoOpen,
	injectChanges,
	styleSRC,
	styleDestination,
	cssCustomFile,
	outputStyle,
	blocksSRC,
	errLogToConsole,
	precision,
	jsCustomSRC,
	jsCustomDestination,
	jsCustomFile,
	imgSRC,
	imgDST,
	watchStyles,
	watchBlocksStyles,
	watchJsCustom,
	watchPhp,
	zipName,
	zipDestination,
	zipIncludeGlob,
	zipIgnoreGlob,
	textDomain,
	translationFile,
	translationDestination,
	packageName,
	bugReport,
	lastTranslator,
	team,
	BROWSERS_LIST
};
