$("form").vindicate("init");
/*$("form").vindicate({

    // if true, do not submit form even if validation is correct
    soft: true,
  
    // if true, validate on element blur
    activeForm: false,
  
    // shows success messages
    showSuccess: true,
  
    // URL, if present, converts data to a request and posts to URL provided
    submitTo: "",
  
    // message to show for required fields
    requiredMessage: "This is a required field.",
  
    // parent container
    parent: "form-group",
  
    // CSS helper
    helper: "form-control-feedback",
  
    // custom styles based on the states
    validationStates: {
      valid: {
        parent: "has-success",
        input: "form-control-success"
      },
      warning: {
        icon: "has-warning",
        color: "form-control-warning"
      },
      invalid: {
        icon:"has-danger",
        color:"form-control-danger"
      }
    },
  
    // custom validation rules
    formats: {
      alpha: {
        regex: /^[a-zA-Z0-9]+/,
        message: "This field only accepts alphabetic characters. (a-z)"
      },
      alphanumeric: {
        regex: /^[a-zA-Z0-9]+/,
        message: "This field does not accept any special characters. (a-z, 0-9)"
      },
      creditcard: {
        regex: /^d{16}/,
        message: "Please enter a valid credit card number."
      },
      date: {
        regex: /([0-9]{4}.[0-9]{1,2}.[0-9]{1,2})|([0-9]{1,2}.[0-9]{1,2}.[0-9]{4})/,
        message: "Please enter a valid date. (YYYY-MM-DD)",
      },
      decimal: {
        regex: /^\d+$/,
        message: "Please enter a decimal value (xxx.xx)"
      },
      email: {
        regex: /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/,
        message: "Please enter a valid email address. (email@domain.com)"
      },
      numeric: {
        regex: /^\d+$/,
        message: "This field only accepts numbers. (0-9)"
      },
      phone: {
        regex: /^([0-9]{3}[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4})/,
        message: "Please enter a 10 digit phone number. (xxx-xxx-xxxx)"
      },
      time: {
        regex: /[0-9]{1,2}(\:[0-9]{0,2})?/,
        message: "Please enter a valid time (xx:xx)"
      },
      url: {
        regex: /^\d+$/,
        message: "Please enter a valid url. (www.website.com/example)"
      }
    }
  });*/