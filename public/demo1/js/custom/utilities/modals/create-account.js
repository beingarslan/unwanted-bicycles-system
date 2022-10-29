"use strict";

// Class definition
var KTCreateAccount = function () {
  // Elements
  var modal;
  var modalEl;

  var stepper;
  var form;
  var formSubmitButton;
  var formContinueButton;

  // Variables
  var stepperObj;
  var validations = [];

  // Private Functions
  var initStepper = function () {
    // Initialize Stepper
    stepperObj = new KTStepper(stepper);

    // Stepper change event
    stepperObj.on('kt.stepper.changed', function (stepper) {
      if (stepperObj.getCurrentStepIndex() === 4) {
        // validate email
        var email = document.getElementById('user_email').value;
        // ajax
        $.ajax({
          url: '/verify-unique-email/' + email,
          type: 'get',
          success: function success(response) {
            if (!response.unique) {
              Swal.fire({
                text: "Email already exists",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                  confirmButton: "btn font-weight-bold btn-light"
                }
              }).then(function () {
                // go back
                stepper.goPrevious();
                KTUtil.scrollTop();
              });
            } else {
              formSubmitButton.classList.remove('d-none');
              formSubmitButton.classList.add('d-inline-block');
              formContinueButton.classList.add('d-none');
            }
          }
        });
      } else if (stepperObj.getCurrentStepIndex() === 5) {
        
        formSubmitButton.classList.add('d-none');
        formContinueButton.classList.add('d-none');
      } else {
        formSubmitButton.classList.remove('d-inline-block');
        formSubmitButton.classList.remove('d-none');
        formContinueButton.classList.remove('d-none');
      }
    });

    // Validation before going to next page
    stepperObj.on('kt.stepper.next', function (stepper) {
      console.log('stepper.next');

      // Validate form before change stepper step
      var validator = validations[stepper.getCurrentStepIndex() - 1]; // get validator for currnt step

      if (validator) {
        validator.validate().then(function (status) {
          console.log('validated!', status);

          if (status == 'Valid') {
            stepper.goNext();

            KTUtil.scrollTop();
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-light"
              }
            }).then(function () {
              KTUtil.scrollTop();
            });
          }
        });
      } else {
        stepper.goNext();

        KTUtil.scrollTop();
      }
    });

    // Prev event
    stepperObj.on('kt.stepper.previous', function (stepper) {
      console.log('stepper.previous');

      stepper.goPrevious();
      KTUtil.scrollTop();
    });
  }

  var handleForm = function () {
    formSubmitButton.addEventListener('click', function (e) {
      // Validate form before change stepper step
      var validator = validations[3]; // get validator for last form

      validator.validate().then(function (status) {
        console.log('validated!', status);

        if (status == 'Valid') {
          // Prevent default button action
          e.preventDefault();

          // Disable button to avoid multiple click 
          formSubmitButton.disabled = true;

          // Show loading indication
          formSubmitButton.setAttribute('data-kt-indicator', 'on');

          // Simulate form submission
          setTimeout(function () {
            // Hide loading indication
            formSubmitButton.removeAttribute('data-kt-indicator');

            // Enable button
            formSubmitButton.disabled = false;

            stepperObj.goNext();
          }, 2000);
        } else {
          Swal.fire({
            text: "Sorry, looks like there are some errors detected, please try again.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn btn-light"
            }
          }).then(function () {
            KTUtil.scrollTop();
          });
        }
      });
    });

    // Expiry month. For more info, plase visit the official plugin site: https://select2.org/
    $(form.querySelector('[name="card_expiry_month"]')).on('change', function () {
      // Revalidate the field when an option is chosen
      validations[3].revalidateField('card_expiry_month');
    });

    // Expiry year. For more info, plase visit the official plugin site: https://select2.org/
    $(form.querySelector('[name="card_expiry_year"]')).on('change', function () {
      // Revalidate the field when an option is chosen
      validations[3].revalidateField('card_expiry_year');
    });

    // Expiry year. For more info, plase visit the official plugin site: https://select2.org/
    $(form.querySelector('[name="business_type"]')).on('change', function () {
      // Revalidate the field when an option is chosen
      validations[2].revalidateField('business_type');
    });
  }

  var initValidation = function () {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    // Step 1
    validations.push(FormValidation.formValidation(
      form,
      {
        fields: {
          company_name: {
            validators: {
              notEmpty: {
                message: 'Company name is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Company name must be more than 3 and less than 100 characters long'
              }
            }
          },
          postal_code: {
            validators: {
              notEmpty: {
                message: 'Postal code is required'
              },
              stringLength: {
                min: 7,
                max: 7,
                message: 'Postal code must be 7 characters long'
              },
              regexp: {
                regexp: /^[0-9]+$/,
                message: 'The postal code can only consist of numbers'
              }
            }
          },
          prefecture: {
            validators: {
              notEmpty: {
                message: 'Prefecture is required'
              },
              stringLength: {
                min: 1,
                max: 100,
                message: 'Company name must be more than 3 and less than 100 characters long'
              }
            }
          },
          county: {
            validators: {
              notEmpty: {
                message: 'County is required'
              },
              stringLength: {
                min: 1,
                max: 100,
                message: 'County must be more than 3 and less than 100 characters long'
              }
            }
          },
          town: {
            validators: {
              notEmpty: {
                message: 'Town is required'
              },
              stringLength: {
                min: 1,
                max: 100,
                message: 'Town must be more than 3 and less than 100 characters long'
              }
            }
          },
          building_name: {
            validators: {
              notEmpty: {
                message: 'Building Name is required'
              },
              stringLength: {
                min: 1,
                max: 100,
                message: 'Building name must be more than 3 and less than 100 characters long'
              }
            }
          },
          phone_number: {
            validators: {
              notEmpty: {
                message: 'Phone is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Phone must be more than 3 and less than 100 characters long'
              }
            }
          },
          fax_number: {
            validators: {
              notEmpty: {
                message: 'Fax is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Phone must be more than 3 and less than 100 characters long'
              }
            }
          },
          home_page: {
            validators: {
              regexp: {
                regexp: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/,
                message: 'The value is not a valid URL'
              },
              notEmpty: {
                message: 'Home Page is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Phone must be more than 3 and less than 100 characters long'
              }
            }
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: '.fv-row',
            eleInvalidClass: '',
            eleValidClass: ''
          })
        }
      }
    ));

    // Step 2
    validations.push(FormValidation.formValidation(
      form,
      {
        fields: {
          'department': {
            validators: {
              notEmpty: {
                message: 'Department is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Department must be more than 3 and less than 100 characters long'
              }
            }
          },
          'full_name': {
            validators: {
              notEmpty: {
                message: 'Full Name is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Full Name must be more than 3 and less than 100 characters long'
              }
            }
          },
          'name_furigana': {
            validators: {
              notEmpty: {
                message: 'Name Furigana is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Name Furigana must be more than 3 and less than 100 characters long'
              }
            }
          },
          'emergency_phone': {
            validators: {
              notEmpty: {
                message: 'Emergency Contact Phone is required'
              },
              stringLength: {
                min: 3,
                max: 100,
                message: 'Emergency Contact Phone must be more than 3 and less than 100 characters long'
              }
            }
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          // Bootstrap Framework Integration
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: '.fv-row',
            eleInvalidClass: '',
            eleValidClass: ''
          })
        }
      }
    ));

    // Step 3
    validations.push(FormValidation.formValidation(
      form,
      {
        fields: {
          'email': {
            validators: {
              notEmpty: {
                message: 'Email is required'
              },
              emailAddress: {
                message: 'The value is not a valid email address'
              },
              stringLength: {
                min: 5,
                max: 100,
                message: 'Email must be more than 5 and less than 100 characters long'
              }
            }
          },
          'password': {
            validators: {
              notEmpty: {
                message: 'Password is required'
              },
              stringLength: {
                min: 8,
                max: 100,
                message: 'Password must be more than 8 and less than 100 characters long'
              },
              different: {
                field: 'email',
                message: 'The password cannot be the same as email'
              },
              regexp: {
                regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,15}$/,
                message: 'The password must contain at least 1 lowercase, 1 uppercase, 1 number and 1 special character',
              }
            }
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          // Bootstrap Framework Integration
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: '.fv-row',
            eleInvalidClass: '',
            eleValidClass: ''
          })
        }
      }
    ));

    // Step 4
    validations.push(FormValidation.formValidation(
      form,
      {
        fields: {

        },

        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          // Bootstrap Framework Integration
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: '.fv-row',
            eleInvalidClass: '',
            eleValidClass: ''
          })
        }
      }
    ));
  }

  return {
    // Public Functions
    init: function () {
      // Elements
      modalEl = document.querySelector('#kt_modal_create_account');

      if (modalEl) {
        modal = new bootstrap.Modal(modalEl);
      }

      stepper = document.querySelector('#kt_create_account_stepper');

      if (!stepper) {
        return;
      }

      form = stepper.querySelector('#kt_create_account_form');
      formSubmitButton = stepper.querySelector('[data-kt-stepper-action="submit"]');
      formContinueButton = stepper.querySelector('[data-kt-stepper-action="next"]');

      initStepper();
      initValidation();
      handleForm();
    }
  };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTCreateAccount.init();
});