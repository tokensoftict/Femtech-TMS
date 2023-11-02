<div class="mt-4">

    <div class="mt-4 d-flex justify-content-center">
        @if(session()->has('success'))
        <div class="alert alert-info alert-dismissible fade show text-light w-50" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close btn btn-danger ms-auto" data-bs-dismiss="alert" aria-label="Close" onclick="refreshPage()">X</button>
        </div>
        @endif

        @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show text-light w-50" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close btn btn-danger ms-auto" data-bs-dismiss="alert" aria-label="Close" onclick="refreshPage()">X</button>
        </div>
        @endif
    </div>

    <script>
        // Get references to the success and danger divs
        const successDiv = document.getElementById("success");
        const dangerDiv = document.getElementById("danger");

        // Get references to the buttons inside each div
        const successButton = successDiv.querySelector("button");
        const dangerButton = dangerDiv.querySelector("button");

        // Add a click event listener to the success button
        successButton.addEventListener("click", function() {
            // Hide the success div
            successDiv.style.display = "none";
        });

        // Add a click event listener to the danger button
        dangerButton.addEventListener("click", function() {
            // Hide the danger div
            dangerDiv.style.display = "none";
        });


        // Function to refresh the page
        function refreshPage() {
            window.location.reload();
        }

    </script>
</div>
