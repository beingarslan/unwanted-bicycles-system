/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/general/jstree/customicons.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/jstree/customicons.js ***!
  \*************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTJSTreeCustomIcons = function () {\n  // Private functions\n  var exampleCustomIcons = function exampleCustomIcons() {\n    $('#kt_docs_jstree_customicons').jstree({\n      \"core\": {\n        \"themes\": {\n          \"responsive\": false\n        }\n      },\n      \"types\": {\n        \"default\": {\n          \"icon\": \"fa fa-folder text-warning\"\n        },\n        \"file\": {\n          \"icon\": \"fa fa-file  text-warning\"\n        }\n      },\n      \"plugins\": [\"types\"]\n    });\n\n    // handle link clicks in tree nodes(support target=\"_blank\" as well)\n    $('#kt_docs_jstree_customicons').on('select_node.jstree', function (e, data) {\n      var link = $('#' + data.selected).find('a');\n      if (link.attr(\"href\") != \"#\" && link.attr(\"href\") != \"javascript:;\" && link.attr(\"href\") != \"\") {\n        if (link.attr(\"target\") == \"_blank\") {\n          link.attr(\"href\").target = \"_blank\";\n        }\n        document.location.href = link.attr(\"href\");\n        return false;\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleCustomIcons();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTJSTreeCustomIcons.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9qc3RyZWUvY3VzdG9taWNvbnMuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxtQkFBbUIsR0FBRyxZQUFXO0VBQ2pDO0VBQ0EsSUFBSUMsa0JBQWtCLEdBQUcsU0FBckJBLGtCQUFrQixHQUFjO0lBQ2hDQyxDQUFDLENBQUMsNkJBQTZCLENBQUMsQ0FBQ0MsTUFBTSxDQUFDO01BQ3BDLE1BQU0sRUFBRztRQUNMLFFBQVEsRUFBRztVQUNQLFlBQVksRUFBRTtRQUNsQjtNQUNKLENBQUM7TUFDRCxPQUFPLEVBQUc7UUFDTixTQUFTLEVBQUc7VUFDUixNQUFNLEVBQUc7UUFDYixDQUFDO1FBQ0QsTUFBTSxFQUFHO1VBQ0wsTUFBTSxFQUFHO1FBQ2I7TUFDSixDQUFDO01BQ0QsU0FBUyxFQUFFLENBQUMsT0FBTztJQUN2QixDQUFDLENBQUM7O0lBRUY7SUFDQUQsQ0FBQyxDQUFDLDZCQUE2QixDQUFDLENBQUNFLEVBQUUsQ0FBQyxvQkFBb0IsRUFBRSxVQUFTQyxDQUFDLEVBQUNDLElBQUksRUFBRTtNQUN2RSxJQUFJQyxJQUFJLEdBQUdMLENBQUMsQ0FBQyxHQUFHLEdBQUdJLElBQUksQ0FBQ0UsUUFBUSxDQUFDLENBQUNDLElBQUksQ0FBQyxHQUFHLENBQUM7TUFDM0MsSUFBSUYsSUFBSSxDQUFDRyxJQUFJLENBQUMsTUFBTSxDQUFDLElBQUksR0FBRyxJQUFJSCxJQUFJLENBQUNHLElBQUksQ0FBQyxNQUFNLENBQUMsSUFBSSxjQUFjLElBQUlILElBQUksQ0FBQ0csSUFBSSxDQUFDLE1BQU0sQ0FBQyxJQUFJLEVBQUUsRUFBRTtRQUM1RixJQUFJSCxJQUFJLENBQUNHLElBQUksQ0FBQyxRQUFRLENBQUMsSUFBSSxRQUFRLEVBQUU7VUFDakNILElBQUksQ0FBQ0csSUFBSSxDQUFDLE1BQU0sQ0FBQyxDQUFDQyxNQUFNLEdBQUcsUUFBUTtRQUN2QztRQUNBQyxRQUFRLENBQUNDLFFBQVEsQ0FBQ0MsSUFBSSxHQUFHUCxJQUFJLENBQUNHLElBQUksQ0FBQyxNQUFNLENBQUM7UUFDMUMsT0FBTyxLQUFLO01BQ2hCO0lBQ0osQ0FBQyxDQUFDO0VBQ04sQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBSyxJQUFJLEVBQUUsZ0JBQVc7TUFDYmQsa0JBQWtCLEVBQUU7SUFDeEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FlLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ2pCLG1CQUFtQixDQUFDZSxJQUFJLEVBQUU7QUFDOUIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvanN0cmVlL2N1c3RvbWljb25zLmpzPzZjY2EiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEpTVHJlZUN1c3RvbUljb25zID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGVDdXN0b21JY29ucyA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICQoJyNrdF9kb2NzX2pzdHJlZV9jdXN0b21pY29ucycpLmpzdHJlZSh7XHJcbiAgICAgICAgICAgIFwiY29yZVwiIDoge1xyXG4gICAgICAgICAgICAgICAgXCJ0aGVtZXNcIiA6IHtcclxuICAgICAgICAgICAgICAgICAgICBcInJlc3BvbnNpdmVcIjogZmFsc2VcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgXCJ0eXBlc1wiIDoge1xyXG4gICAgICAgICAgICAgICAgXCJkZWZhdWx0XCIgOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgXCJpY29uXCIgOiBcImZhIGZhLWZvbGRlciB0ZXh0LXdhcm5pbmdcIlxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIFwiZmlsZVwiIDoge1xyXG4gICAgICAgICAgICAgICAgICAgIFwiaWNvblwiIDogXCJmYSBmYS1maWxlICB0ZXh0LXdhcm5pbmdcIlxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICBcInBsdWdpbnNcIjogW1widHlwZXNcIl1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gaGFuZGxlIGxpbmsgY2xpY2tzIGluIHRyZWUgbm9kZXMoc3VwcG9ydCB0YXJnZXQ9XCJfYmxhbmtcIiBhcyB3ZWxsKVxyXG4gICAgICAgICQoJyNrdF9kb2NzX2pzdHJlZV9jdXN0b21pY29ucycpLm9uKCdzZWxlY3Rfbm9kZS5qc3RyZWUnLCBmdW5jdGlvbihlLGRhdGEpIHtcclxuICAgICAgICAgICAgdmFyIGxpbmsgPSAkKCcjJyArIGRhdGEuc2VsZWN0ZWQpLmZpbmQoJ2EnKTtcclxuICAgICAgICAgICAgaWYgKGxpbmsuYXR0cihcImhyZWZcIikgIT0gXCIjXCIgJiYgbGluay5hdHRyKFwiaHJlZlwiKSAhPSBcImphdmFzY3JpcHQ6O1wiICYmIGxpbmsuYXR0cihcImhyZWZcIikgIT0gXCJcIikge1xyXG4gICAgICAgICAgICAgICAgaWYgKGxpbmsuYXR0cihcInRhcmdldFwiKSA9PSBcIl9ibGFua1wiKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgbGluay5hdHRyKFwiaHJlZlwiKS50YXJnZXQgPSBcIl9ibGFua1wiO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgZG9jdW1lbnQubG9jYXRpb24uaHJlZiA9IGxpbmsuYXR0cihcImhyZWZcIik7XHJcbiAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgZXhhbXBsZUN1c3RvbUljb25zKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcclxuICAgIEtUSlNUcmVlQ3VzdG9tSWNvbnMuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktUSlNUcmVlQ3VzdG9tSWNvbnMiLCJleGFtcGxlQ3VzdG9tSWNvbnMiLCIkIiwianN0cmVlIiwib24iLCJlIiwiZGF0YSIsImxpbmsiLCJzZWxlY3RlZCIsImZpbmQiLCJhdHRyIiwidGFyZ2V0IiwiZG9jdW1lbnQiLCJsb2NhdGlvbiIsImhyZWYiLCJpbml0IiwiS1RVdGlsIiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/jstree/customicons.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/jstree/customicons.js"]();
/******/ 	
/******/ })()
;