(document.querySelectorAll("[toast-list]") ||
    document.querySelectorAll("[data-choices]") ||
    document.querySelectorAll("[data-provider]")) &&
    (document.writeln(
        // "<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>"
        "<script type='text/javascript' src='cdn/js/toastify-js.js'></script>"
    ),
        document.writeln(
            // "<script type='text/javascript' src='backend/libs/choices.js/public/assets/scripts/choices.min.js'></script>"
            "<script type='text/javascript' src='cdn/js/choices.js'></script>"
        ),

        document.writeln(
            "<script type='text/javascript' src='cdn/js/choices.min.js'></script>"
        ),

        document.writeln(
            // "<script type='text/javascript' src='backend/libs/flatpickr/flatpickr.min.js'></script>"
            "<script type='text/javascript' src='cdn/js/flatpickr.min.js'></script>"
        ));
