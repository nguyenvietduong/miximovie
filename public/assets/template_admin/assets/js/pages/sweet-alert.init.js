function executeExample(type, message = '', title = '', options = {}) {
    switch (type) {
        case "success":
        case "error":
        case "warning":
        case "info":
        case "question":
            return Swal.fire({
                icon: type,
                title: title || getDefaultTitle(type),
                text: message,
                ...options
            });

        case "customHtml":
            return Swal.fire({
                title: title || "<strong>HTML <u>example</u></strong>",
                icon: options.icon || "info",
                html: message || 'You can use <b>bold text</b>, <a href="#">links</a> and other HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: options.confirmButtonText || '<i class="fa fa-thumbs-up"></i> Great!',
                cancelButtonText: options.cancelButtonText || '<i class="fa fa-thumbs-down"></i>',
                ...options
            });

        case "confirm":
            return Swal.fire({
                title: title || "Are you sure?",
                text: message || "You won't be able to revert this!",
                icon: options.icon || "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: options.confirmButtonText || "Yes, delete it!",
                cancelButtonText: options.cancelButtonText || "No, cancel!",
                ...options
            }).then(result => {
                if (result.isConfirmed) {
                    if (typeof options.onConfirm === 'function') options.onConfirm();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    if (typeof options.onCancel === 'function') options.onCancel();
                }
            });

        case "toast":
            return Swal.fire({
                toast: true,
                position: options.position || "top-end",
                icon: options.icon || "success",
                title: title || "Notification",
                text: message,
                showConfirmButton: false,
                timer: options.timer || 3000,
                timerProgressBar: true,
                ...options
            });

        case "timer":
            let timerInterval;
            return Swal.fire({
                title: title || "Auto close alert!",
                html: message || "I will close in <b></b> milliseconds.",
                timer: options.timer || 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    timerInterval = setInterval(() => {
                        const content = Swal.getHtmlContainer();
                        if (content) {
                            const b = content.querySelector("b");
                            if (b) b.textContent = Swal.getTimerLeft();
                        }
                    }, 100);
                },
                willClose: () => clearInterval(timerInterval),
                ...options
            });

        default:
            return Swal.fire({
                title: title || "Notification",
                text: message || "No matching alert type found.",
                icon: "info",
                ...options
            });
    }
}

function getDefaultTitle(type) {
    switch (type) {
        case "success":
            return "Success!";
        case "error":
            return "Error!";
        case "warning":
            return "Warning!";
        case "info":
            return "Info!";
        case "question":
            return "Are you sure?";
        default:
            return "Notification";
    }
}

// Example usage:

// executeExample('success', 'Status updated successfully');

// executeExample('error', 'Unable to connect to the server.', 'Connection Error');

// executeExample('toast', 'Saved successfully.', 'Success', { icon: 'success' });

// executeExample('confirm', 'Do you really want to delete this?', 'Delete Confirmation', {
//     onConfirm: () => console.log('Confirmed'),
//     onCancel: () => console.log('Cancelled')
// });