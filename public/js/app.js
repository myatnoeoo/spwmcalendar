/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nError: [BABEL] D:\\xampp\\htdocs\\SPWMCalendar\\resources\\js\\app.js: Cannot find module '@babel/parser'\nRequire stack:\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\index.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\laravel-mix\\src\\FileCollection.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\laravel-mix\\src\\tasks\\ConcatenateFilesTask.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\laravel-mix\\src\\components\\Combine.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\laravel-mix\\src\\components\\ComponentFactory.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\laravel-mix\\setup\\webpack.config.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\webpack-cli\\bin\\utils\\convert-argv.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\webpack-cli\\bin\\cli.js\n- D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\webpack\\bin\\webpack.js\n    at Function.Module._resolveFilename (internal/modules/cjs/loader.js:965:15)\n    at Function.Module._load (internal/modules/cjs/loader.js:841:27)\n    at Module.require (internal/modules/cjs/loader.js:1025:19)\n    at require (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\v8-compile-cache\\v8-compile-cache.js:161:20)\n    at _parser (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\index.js:205:16)\n    at Object.get [as tokTypes] (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\index.js:46:12)\n    at Function.assign (<anonymous>)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\full.js:208:24\n    at Generator.next (<anonymous>)\n    at Function.<anonymous> (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\gensync-utils\\async.js:26:3)\n    at Generator.next (<anonymous>)\n    at step (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:254:32)\n    at evaluateAsync (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:284:5)\n    at Function.errback (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:108:7)\n    at errback (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\gensync-utils\\async.js:70:18)\n    at async (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:183:31)\n    at onFirstPause (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:209:13)\n    at Generator.next (<anonymous>)\n    at cachedFunction (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\caching.js:68:46)\n    at cachedFunction.next (<anonymous>)\n    at loadPresetDescriptor (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\full.js:304:43)\n    at loadPresetDescriptor.next (<anonymous>)\n    at recursePresetDescriptors (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\full.js:112:30)\n    at recursePresetDescriptors.next (<anonymous>)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\full.js:186:21\n    at Generator.next (<anonymous>)\n    at loadFullConfig (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\config\\full.js:142:5)\n    at loadFullConfig.next (<anonymous>)\n    at Function.transform (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\transform.js:25:45)\n    at transform.next (<anonymous>)\n    at step (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:262:25)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:266:13\n    at async.call.result.err.err (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:216:11)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:184:28\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\@babel\\core\\lib\\gensync-utils\\async.js:72:7\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\gensync\\index.js:108:33");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n8 │ @import '~bootstrap/scss/bootstrap';\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  D:\\xampp\\htdocs\\SPWMCalendar\\resources\\sass\\app.scss 8:9  root stylesheet\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass-loader\\dist\\index.js:73:7\n    at Function.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:89862:16)\n    at _render_closure1.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:79036:12)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:13112:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4276:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24634:12)\n    at _awaitOnObject_closure0.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24626:25)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:15754:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4276:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24634:12)\n    at _awaitOnObject_closure0.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24626:25)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)");

/***/ }),

/***/ "./resources/sass/custom/custom.scss":
/*!*******************************************!*\
  !*** ./resources/sass/custom/custom.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Undefined variable.\n   ╷\n32 │             background: $sidebar-light;\r\n   │                         ^^^^^^^^^^^^^^\n   ╵\n  resources\\sass\\custom\\calendar\\index.scss 32:25  @import\n  D:\\xampp\\htdocs\\SPWMCalendar\\resources\\sass\\custom\\custom.scss 3:9                                        root stylesheet\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass-loader\\dist\\index.js:73:7\n    at Function.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:89862:16)\n    at _render_closure1.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:79036:12)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:13112:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4276:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24634:12)\n    at _awaitOnObject_closure0.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24626:25)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)\n    at D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:15754:20\n    at _wrapJsFunctionForAsync_closure.$protected (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4276:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24634:12)\n    at _awaitOnObject_closure0.call$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24626:25)\n    at _RootZone.runBinary$3$3 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:26612:18)\n    at _FutureListener.handleError$1 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25140:19)\n    at _Future__propagateToListeners_handleError.call$0 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25437:49)\n    at Object._Future__propagateToListeners (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4502:77)\n    at _Future._completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:25270:9)\n    at _AsyncAwaitCompleter.completeError$2 (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:24613:12)\n    at Object._asyncRethrow (D:\\xampp\\htdocs\\SPWMCalendar\\node_modules\\sass\\sass.dart.js:4251:17)");

/***/ }),

/***/ 0:
/*!*************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./resources/sass/custom/custom.scss ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\xampp\htdocs\SPWMCalendar\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! D:\xampp\htdocs\SPWMCalendar\resources\sass\app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! D:\xampp\htdocs\SPWMCalendar\resources\sass\custom\custom.scss */"./resources/sass/custom/custom.scss");


/***/ })

/******/ });