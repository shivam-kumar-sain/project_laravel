"use strict";!function(){new Bouncer("[data-validate]",{disableSubmit:!0,customValidations:{valueMismatch:function(e){var t=e.getAttribute("data-bouncer-match");return!!t&&!!(t=e.form.querySelector(t))&&t.value!==e.value}},messages:{valueMismatch:function(e){e=e.getAttribute("data-bouncer-mismatch-message");return e||"Please make sure the fields match."}}});document.addEventListener("bouncerFormInvalid",function(e){window.scrollTo(0,e.detail.errors[0].offsetTop)},!1),document.addEventListener("bouncerFormValid",function(){alert("Form submitted successfully!"),window.location.reload()},!1)}();