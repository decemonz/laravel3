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

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: /Applications/MAMP/htdocs/laravel3/resources/js/app.js: Unexpected token (36:12)\n\n\u001b[0m \u001b[90m 34 | \u001b[39mel\u001b[33m:\u001b[39m\u001b[32m\"#app\"\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 35 | \u001b[39mcomponents\u001b[33m:\u001b[39m{\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 36 | \u001b[39m  \u001b[32m'carousel'\u001b[39m\u001b[33mVueCarousel\u001b[39m\u001b[33m.\u001b[39m\u001b[33mCarousel\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m            \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 37 | \u001b[39m  \u001b[32m'slide'\u001b[39m\u001b[33m:\u001b[39m\u001b[33mVueCarousel\u001b[39m\u001b[33m.\u001b[39m\u001b[33mSlide\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 38 | \u001b[39m}\u001b[0m\n\u001b[0m \u001b[90m 39 | \u001b[39m\u001b[0m\n    at Parser.raise (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:3831:17)\n    at Parser.unexpected (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5143:16)\n    at Parser.parseObjPropValue (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6756:21)\n    at Parser.parseObj (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6670:12)\n    at Parser.parseExprAtom (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6229:21)\n    at Parser.parseExprSubscripts (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5862:23)\n    at Parser.parseMaybeUnary (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5842:21)\n    at Parser.parseExprOps (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5729:23)\n    at Parser.parseMaybeConditional (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5702:23)\n    at Parser.parseMaybeAssign (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5647:21)\n    at Parser.parseObjectProperty (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6730:101)\n    at Parser.parseObjPropValue (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6755:101)\n    at Parser.parseObj (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6670:12)\n    at Parser.parseExprAtom (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6229:21)\n    at Parser.parseExprSubscripts (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5862:23)\n    at Parser.parseMaybeUnary (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5842:21)\n    at Parser.parseExprOps (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5729:23)\n    at Parser.parseMaybeConditional (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5702:23)\n    at Parser.parseMaybeAssign (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5647:21)\n    at Parser.parseExprListItem (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6940:18)\n    at Parser.parseExprList (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6924:22)\n    at Parser.parseNewArguments (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6542:25)\n    at Parser.parseNew (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6536:10)\n    at Parser.parseExprAtom (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:6243:21)\n    at Parser.parseExprSubscripts (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5862:23)\n    at Parser.parseMaybeUnary (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5842:21)\n    at Parser.parseExprOps (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5729:23)\n    at Parser.parseMaybeConditional (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5702:23)\n    at Parser.parseMaybeAssign (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5647:21)\n    at Parser.parseExpression (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:5595:23)\n    at Parser.parseStatementContent (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:7378:23)\n    at Parser.parseStatement (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:7243:17)\n    at Parser.parseBlockOrModuleBlockBody (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:7810:25)\n    at Parser.parseBlockBody (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:7797:10)\n    at Parser.parseTopLevel (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:7181:10)\n    at Parser.parse (/Applications/MAMP/htdocs/laravel3/node_modules/@babel/parser/lib/index.js:8660:17)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/laravel3/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/laravel3/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });