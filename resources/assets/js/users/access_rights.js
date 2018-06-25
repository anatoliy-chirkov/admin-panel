// main function
function onChangeAccessRights() {
    $(document).ready(function() {
        $('.btn-sm').on('click', function () {
            var accessRights = getUserElement(this, '.user_data-access_rights');
            setUpForm(this);
            onSubmit(accessRights);
        });
    });
}

function getUserElement(selector, field) {
    return $(selector).parent().parent().children(field);
}

function setUpForm(selector) {
    var userId = $(selector).attr('user-id');
    var name = getUserElement(selector, '.user_data-name').text();
    var email = getUserElement(selector, '.user_data-email').text();

    $('#user_id').attr('value', userId);
    $('#name').attr('value', name);
    $('#email').attr('value', email);
}

function onSubmit(accessRights) {
    $('.btn-submit').on('click', function () {
        $('.btn-close').click();
        accessRights.html('Refreshing...');

        $.ajax({
            type: 'POST',
            url: '/user/update/access-rights',
            dataType: 'html',
            data: $('form').serializeArray(),
            success: function(response) {
                accessRights.html(response);
            },
            error: function() {
                alert('error');
            }
        });
    });
}

onChangeAccessRights();
