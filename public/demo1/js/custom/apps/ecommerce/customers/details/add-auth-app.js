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

/***/ "./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js":
/*!******************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js ***!
  \******************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTUsersAddAuthApp = function () {\n  // Shared variables\n  var element = document.getElementById('kt_modal_add_auth_app');\n  var modal = new bootstrap.Modal(element);\n\n  // Init add schedule modal\n  var initAddAuthApp = function initAddAuthApp() {\n    // Close button handler\n    var closeButton = element.querySelector('[data-kt-users-modal-action=\"close\"]');\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to close?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, close it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          modal.hide(); // Hide modal\t\t\t\t\n        }\n      });\n    });\n  };\n\n  // QR code to text code swapper\n  var initCodeSwap = function initCodeSwap() {\n    var qrCode = element.querySelector('[ data-kt-add-auth-action=\"qr-code\"]');\n    var textCode = element.querySelector('[ data-kt-add-auth-action=\"text-code\"]');\n    var qrCodeButton = element.querySelector('[ data-kt-add-auth-action=\"qr-code-button\"]');\n    var textCodeButton = element.querySelector('[ data-kt-add-auth-action=\"text-code-button\"]');\n    var qrCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"qr-code-label\"]');\n    var textCodeLabel = element.querySelector('[ data-kt-add-auth-action=\"text-code-label\"]');\n    var toggleClass = function toggleClass() {\n      qrCode.classList.toggle('d-none');\n      qrCodeButton.classList.toggle('d-none');\n      qrCodeLabel.classList.toggle('d-none');\n      textCode.classList.toggle('d-none');\n      textCodeButton.classList.toggle('d-none');\n      textCodeLabel.classList.toggle('d-none');\n    };\n\n    // Swap to text code handler\n    textCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n    qrCodeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      toggleClass();\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      initAddAuthApp();\n      initCodeSwap();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTUsersAddAuthApp.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvZWNvbW1lcmNlL2N1c3RvbWVycy9kZXRhaWxzL2FkZC1hdXRoLWFwcC5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVk7RUFDaEM7RUFDQSxJQUFNQyxPQUFPLEdBQUdDLFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLHVCQUF1QixDQUFDO0VBQ2hFLElBQU1DLEtBQUssR0FBRyxJQUFJQyxTQUFTLENBQUNDLEtBQUssQ0FBQ0wsT0FBTyxDQUFDOztFQUUxQztFQUNBLElBQUlNLGNBQWMsR0FBRyxTQUFqQkEsY0FBYyxHQUFTO0lBRXZCO0lBQ0EsSUFBTUMsV0FBVyxHQUFHUCxPQUFPLENBQUNRLGFBQWEsQ0FBQyxzQ0FBc0MsQ0FBQztJQUNqRkQsV0FBVyxDQUFDRSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBQUMsQ0FBQyxFQUFJO01BQ3ZDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtNQUVsQkMsSUFBSSxDQUFDQyxJQUFJLENBQUM7UUFDTkMsSUFBSSxFQUFFLHVDQUF1QztRQUM3Q0MsSUFBSSxFQUFFLFNBQVM7UUFDZkMsZ0JBQWdCLEVBQUUsSUFBSTtRQUN0QkMsY0FBYyxFQUFFLEtBQUs7UUFDckJDLGlCQUFpQixFQUFFLGdCQUFnQjtRQUNuQ0MsZ0JBQWdCLEVBQUUsWUFBWTtRQUM5QkMsV0FBVyxFQUFFO1VBQ1RDLGFBQWEsRUFBRSxpQkFBaUI7VUFDaENDLFlBQVksRUFBRTtRQUNsQjtNQUNKLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsVUFBVUMsTUFBTSxFQUFFO1FBQ3RCLElBQUlBLE1BQU0sQ0FBQ0MsS0FBSyxFQUFFO1VBQ2R0QixLQUFLLENBQUN1QixJQUFJLEVBQUUsQ0FBQyxDQUFDO1FBQ2xCO01BQ0osQ0FBQyxDQUFDO0lBQ04sQ0FBQyxDQUFDO0VBRU4sQ0FBQzs7RUFFRDtFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZLEdBQVM7SUFDckIsSUFBTUMsTUFBTSxHQUFHNUIsT0FBTyxDQUFDUSxhQUFhLENBQUMsc0NBQXNDLENBQUM7SUFDNUUsSUFBTXFCLFFBQVEsR0FBRzdCLE9BQU8sQ0FBQ1EsYUFBYSxDQUFDLHdDQUF3QyxDQUFDO0lBQ2hGLElBQU1zQixZQUFZLEdBQUc5QixPQUFPLENBQUNRLGFBQWEsQ0FBQyw2Q0FBNkMsQ0FBQztJQUN6RixJQUFNdUIsY0FBYyxHQUFHL0IsT0FBTyxDQUFDUSxhQUFhLENBQUMsK0NBQStDLENBQUM7SUFDN0YsSUFBTXdCLFdBQVcsR0FBR2hDLE9BQU8sQ0FBQ1EsYUFBYSxDQUFDLDRDQUE0QyxDQUFDO0lBQ3ZGLElBQU15QixhQUFhLEdBQUdqQyxPQUFPLENBQUNRLGFBQWEsQ0FBQyw4Q0FBOEMsQ0FBQztJQUUzRixJQUFNMEIsV0FBVyxHQUFHLFNBQWRBLFdBQVcsR0FBUTtNQUNyQk4sTUFBTSxDQUFDTyxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7TUFDakNOLFlBQVksQ0FBQ0ssU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO01BQ3ZDSixXQUFXLENBQUNHLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztNQUN0Q1AsUUFBUSxDQUFDTSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxRQUFRLENBQUM7TUFDbkNMLGNBQWMsQ0FBQ0ksU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO01BQ3pDSCxhQUFhLENBQUNFLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLFFBQVEsQ0FBQztJQUM1QyxDQUFDOztJQUVEO0lBQ0FMLGNBQWMsQ0FBQ3RCLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFBQyxDQUFDLEVBQUc7TUFDekNBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO01BRWxCdUIsV0FBVyxFQUFFO0lBQ2pCLENBQUMsQ0FBQztJQUVGSixZQUFZLENBQUNyQixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsVUFBQUMsQ0FBQyxFQUFHO01BQ3ZDQSxDQUFDLENBQUNDLGNBQWMsRUFBRTtNQUVsQnVCLFdBQVcsRUFBRTtJQUNqQixDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsT0FBTztJQUNIO0lBQ0FHLElBQUksRUFBRSxnQkFBWTtNQUNkL0IsY0FBYyxFQUFFO01BQ2hCcUIsWUFBWSxFQUFFO0lBQ2xCO0VBQ0osQ0FBQztBQUNMLENBQUMsRUFBRTs7QUFFSDtBQUNBVyxNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVk7RUFDbEN4QyxpQkFBaUIsQ0FBQ3NDLElBQUksRUFBRTtBQUM1QixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvZWNvbW1lcmNlL2N1c3RvbWVycy9kZXRhaWxzL2FkZC1hdXRoLWFwcC5qcz83N2E1Il0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RVc2Vyc0FkZEF1dGhBcHAgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBTaGFyZWQgdmFyaWFibGVzXHJcbiAgICBjb25zdCBlbGVtZW50ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2t0X21vZGFsX2FkZF9hdXRoX2FwcCcpO1xyXG4gICAgY29uc3QgbW9kYWwgPSBuZXcgYm9vdHN0cmFwLk1vZGFsKGVsZW1lbnQpO1xyXG5cclxuICAgIC8vIEluaXQgYWRkIHNjaGVkdWxlIG1vZGFsXHJcbiAgICB2YXIgaW5pdEFkZEF1dGhBcHAgPSAoKSA9PiB7XHJcblxyXG4gICAgICAgIC8vIENsb3NlIGJ1dHRvbiBoYW5kbGVyXHJcbiAgICAgICAgY29uc3QgY2xvc2VCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXVzZXJzLW1vZGFsLWFjdGlvbj1cImNsb3NlXCJdJyk7XHJcbiAgICAgICAgY2xvc2VCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBlID0+IHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgIHRleHQ6IFwiQXJlIHlvdSBzdXJlIHlvdSB3b3VsZCBsaWtlIHRvIGNsb3NlP1wiLFxyXG4gICAgICAgICAgICAgICAgaWNvbjogXCJ3YXJuaW5nXCIsXHJcbiAgICAgICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiWWVzLCBjbG9zZSBpdCFcIixcclxuICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6IFwiTm8sIHJldHVyblwiLFxyXG4gICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG4gICAgICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvbjogXCJidG4gYnRuLWFjdGl2ZS1saWdodFwiXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3VsdCkge1xyXG4gICAgICAgICAgICAgICAgaWYgKHJlc3VsdC52YWx1ZSkge1xyXG4gICAgICAgICAgICAgICAgICAgIG1vZGFsLmhpZGUoKTsgLy8gSGlkZSBtb2RhbFx0XHRcdFx0XHJcbiAgICAgICAgICAgICAgICB9IFxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICB9XHJcblxyXG4gICAgLy8gUVIgY29kZSB0byB0ZXh0IGNvZGUgc3dhcHBlclxyXG4gICAgdmFyIGluaXRDb2RlU3dhcCA9ICgpID0+IHtcclxuICAgICAgICBjb25zdCBxckNvZGUgPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJxci1jb2RlXCJdJyk7XHJcbiAgICAgICAgY29uc3QgdGV4dENvZGUgPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJ0ZXh0LWNvZGVcIl0nKTtcclxuICAgICAgICBjb25zdCBxckNvZGVCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJxci1jb2RlLWJ1dHRvblwiXScpO1xyXG4gICAgICAgIGNvbnN0IHRleHRDb2RlQnV0dG9uID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwidGV4dC1jb2RlLWJ1dHRvblwiXScpO1xyXG4gICAgICAgIGNvbnN0IHFyQ29kZUxhYmVsID0gZWxlbWVudC5xdWVyeVNlbGVjdG9yKCdbIGRhdGEta3QtYWRkLWF1dGgtYWN0aW9uPVwicXItY29kZS1sYWJlbFwiXScpO1xyXG4gICAgICAgIGNvbnN0IHRleHRDb2RlTGFiZWwgPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJ1sgZGF0YS1rdC1hZGQtYXV0aC1hY3Rpb249XCJ0ZXh0LWNvZGUtbGFiZWxcIl0nKTtcclxuXHJcbiAgICAgICAgY29uc3QgdG9nZ2xlQ2xhc3MgPSAoKSA9PntcclxuICAgICAgICAgICAgcXJDb2RlLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICBxckNvZGVCdXR0b24uY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHFyQ29kZUxhYmVsLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xyXG4gICAgICAgICAgICB0ZXh0Q29kZS5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcclxuICAgICAgICAgICAgdGV4dENvZGVCdXR0b24uY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgIHRleHRDb2RlTGFiZWwuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICAvLyBTd2FwIHRvIHRleHQgY29kZSBoYW5kbGVyXHJcbiAgICAgICAgdGV4dENvZGVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBlID0+e1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICB0b2dnbGVDbGFzcygpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBxckNvZGVCdXR0b24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBlID0+e1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICB0b2dnbGVDbGFzcygpO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIGZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgaW5pdEFkZEF1dGhBcHAoKTtcclxuICAgICAgICAgICAgaW5pdENvZGVTd2FwKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVFVzZXJzQWRkQXV0aEFwcC5pbml0KCk7XHJcbn0pOyJdLCJuYW1lcyI6WyJLVFVzZXJzQWRkQXV0aEFwcCIsImVsZW1lbnQiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibW9kYWwiLCJib290c3RyYXAiLCJNb2RhbCIsImluaXRBZGRBdXRoQXBwIiwiY2xvc2VCdXR0b24iLCJxdWVyeVNlbGVjdG9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsIlN3YWwiLCJmaXJlIiwidGV4dCIsImljb24iLCJzaG93Q2FuY2VsQnV0dG9uIiwiYnV0dG9uc1N0eWxpbmciLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJjdXN0b21DbGFzcyIsImNvbmZpcm1CdXR0b24iLCJjYW5jZWxCdXR0b24iLCJ0aGVuIiwicmVzdWx0IiwidmFsdWUiLCJoaWRlIiwiaW5pdENvZGVTd2FwIiwicXJDb2RlIiwidGV4dENvZGUiLCJxckNvZGVCdXR0b24iLCJ0ZXh0Q29kZUJ1dHRvbiIsInFyQ29kZUxhYmVsIiwidGV4dENvZGVMYWJlbCIsInRvZ2dsZUNsYXNzIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/ecommerce/customers/details/add-auth-app.js"]();
/******/ 	
/******/ })()
;