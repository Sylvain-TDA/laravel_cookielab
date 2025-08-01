<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dynamic Modal</title>

    <!-- BOOTSTRAP -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            background: #f7f7f7;
        }

        .form-box {
            max-width: 80%;
            margin: auto;
            padding: 50px;
            background: #ffffff;
            border: 10px solid #f2f2f2;
            margin-top: 100px;
        }

        h1, p {
            text-align: center;
            padding-bottom: 40px;
        }

        input, textarea {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="form-box text-center">
    <h1>Dynamic Modal</h1>
    <button class="btn btn-primary" onclick="dynamicModal('{{route('modal-content')}}')">{{ __('messages.Create User') }}</button>
</div>

<!-- BOOTSTRAP MODAL STARTS -->
<div class="modal fade" id="dynamic-model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>
<!-- BOOTSTRAP MODAL END -->

<!-- JQUERY, BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- SCRIPT STARTS -->
<script>
    function dynamicModal( url, size = 'md'){
        var modal_id = '#dynamic-model';
        $(modal_id+" .modal-dialog").addClass('modal-' + size);
        $.ajax({
            url: url,
            success: function (data) {
                if (data.error == undefined) {
                    $(modal_id + ' .modal-content').html(data);
                    $(modal_id).modal('show');
                } else {
                  createToast('error', data.error);
                }
            },
            error: function (data) {
               createToast('error', 'Something went wrong');
            }
        });
    }
</script>
<!-- SCRIPT END -->
</body>
</html>