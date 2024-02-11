<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proratis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://proratis.youpihost.fr/assets/css/custom.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-5">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="{{route('home')}}"><small class="me-3 fw-bold">Entreprises</small></a>
                    <a href="{{route('candidat')}}"><small class="me-3 fw-bold">Candidats</small></a>
                </div>
            </div>
        </div>
    </div> <!-- Topbar End -->

    <!-- Navbar Start -->

    <!-- Navbar End -->

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card rounded-0 ">
                    <div class="card-header font18 fw-bold">veuillez attendre la confirmation des admins</div>
                 
                </div>
            </div>
            
        </div>
    </div>


    <!-- Back to Top -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="https://proratis.youpihost.fr/assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        const formatState = (state) => {
            if (!state.id) {
                return state.text;
            }

            const option = document.querySelector(`.option${state.element.value}`);

            var path = option.getAttribute('data-path');
            var icon = option.getAttribute('data-icon');

            var imgicon = `${path}/${icon}`;
            var img = '';
            if (icon != '') {
                img = '<img class="select2-icon border" />';
            }
            var $state = $(`<div class="d-flex align-items-center">${img}<span class="m-2"></span></div>`);

            // Use .text() instead of HTML string concatenation to avoid script injection issues
            $state.find("span").text(state.text);
            if (icon != '') {
                $state.find("img").attr("src", imgicon);
            }

            return $state;
        };

        $(".select2").select2({
            templateSelection: formatState,
            templateResult: formatState
        });
    </script>
</body>

</html>