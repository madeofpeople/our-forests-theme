/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/blocks/patterns/index.js":
/*!*****************************************!*\
  !*** ./src/js/blocks/patterns/index.js ***!
  \*****************************************/
/***/ (() => {



/***/ }),

/***/ "./src/js/blocks/variations/index.js":
/*!*******************************************!*\
  !*** ./src/js/blocks/variations/index.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _lists__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lists */ "./src/js/blocks/variations/lists.js");
/* harmony import */ var _paragraph__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./paragraph */ "./src/js/blocks/variations/paragraph.js");



/***/ }),

/***/ "./src/js/blocks/variations/lists.js":
/*!*******************************************!*\
  !*** ./src/js/blocks/variations/lists.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'list',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Basic List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Display a basic list.', 'the-territory' ),
        isDefault: true,
        icon: 'editor-ul',
        attributes: {
            className: 'basic',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        example: {
            attributes: {
                className: 'basic',
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list-columns',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Columned Bullet List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A list displayed in 2 columns.', 'the-territory' ),
        attributes: {
            className: 'bullet-list-columns',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        icon: 'columns',
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Bullet List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A regular list, with fancy bullets.', 'the-territory' ),
        icon: 'list-view',
        attributes: {
            className: 'bullet-list',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'icon-list',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Icon List', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A regular with icon.', 'the-territory' ),
        icon: 'star-filled',
        attributes: {
            className: 'icon-list',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add list items ...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    }
];

variations.forEach( ( variation ) => {
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'core/list',
        variation
    );
} );

/***/ }),

/***/ "./src/js/blocks/variations/paragraph.js":
/*!***********************************************!*\
  !*** ./src/js/blocks/variations/paragraph.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__);



const variations = [
    {
        name: 'paragraph',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Paragraph', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'A standard paragraph.', 'the-territory' ),
        isDefault: true,
        category: 'text',
        keywords: [
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'intro', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'paragraph', 'the-territory' ),
            (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'sentence', 'the-territory' )
        ],
        icon: 'editor-alignleft',
        attributes: {
            className: 'ptag',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add content...', 'the-territory' )
        },
        example: {
            attributes: {
                content: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'This is a bock for displaying the opening paragraph, the big idea, the tl;dr.', 'the-territory' )
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    },
    {
        name: 'lede',
        title: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Lede', 'the-territory' ),
        description: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add opening sentence or paragraph.', 'the-territory' ),
        icon: 'editor-justify',
        attributes: {
            className: 'lede',
            placeholder: (0,_wordpress_i18n__WEBPACK_IMPORTED_MODULE_1__.__)( 'Add content...', 'the-territory' )
        },
        scope: [
            'transform'
        ],
    }
];

variations.forEach( ( variation ) => {
    (0,_wordpress_blocks__WEBPACK_IMPORTED_MODULE_0__.registerBlockVariation)(
        'core/paragraph',
        variation
    );
} );


/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["blocks"];

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!********************************!*\
  !*** ./src/js/blocks/index.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _patterns__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./patterns */ "./src/js/blocks/patterns/index.js");
/* harmony import */ var _patterns__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_patterns__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _variations__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./variations */ "./src/js/blocks/variations/index.js");
/**
 * Gutenberg Block JS
 *
 * Import JS for Gutenberg blocks.
 */



})();

/******/ })()
;
//# sourceMappingURL=blocks.js.map