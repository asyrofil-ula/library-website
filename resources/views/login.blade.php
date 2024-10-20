
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Styles -->

   <title>Website Template Demo</title>

   <link rel="preload" as="style" href="https://www.smarteyeapps.com/build/assets/style-324d1a7d.css" /><link rel="modulepreload" href="https://www.smarteyeapps.com/build/assets/home-6dd98ea4.js" /><link rel="modulepreload" href="https://www.smarteyeapps.com/build/assets/bootstrap.esm-03e0081a.js" /><link rel="stylesheet" href="https://www.smarteyeapps.com/build/assets/style-324d1a7d.css" /><script type="module" src="https://www.smarteyeapps.com/build/assets/home-6dd98ea4.js"></script>
  </head>
  <body>
     <div x-data="{ open: true }" class="container-fluid">
         <div x-show="open" class="head-card shadow bg-white row m-0">
            <div class="col-md-4 col-10 pt-2">
                <img class="mt-2 ms-2" style="max-width:230px" src="https://www.smarteyeapps.com/images/smarteye-apps-logo.png" alt="">
            </div>
            <div class="col-md-8 d-none d-md-block text-end p-3">
                <a href="https://www.smarteyeapps.com/bootstrap-5-login-page-template-with-source-code">
                    <button class="btn btn-success text-white">Buy Now</button>
                </a>
                <a href="https://www.smarteyeapps.com/free-download/bootstrap-5-login-page-template-with-source-code">
                    <button class="btn btn-primary text-white">Free Download</button>
                </a>

                <button @click="open = false" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                </svg>
                Remove</button>
            </div>
            <div class="col-md-8 col-2 d-md-none text-end p-3">
                <button @click="open = false" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                </button>
            </div>

         </div>
         <iframe :class="open ? 'fix-frame' : 'fix-frame-nohit'" class="fix-frame" src="https://www.yudaah.com/demo/bootstrap-5-login-page-template-with-source-code" frameborder="0"></iframe>
     </div>
   <script src="https://www.smarteyeapps.com/js/home.js" defer></script>
  </body>
</html>
