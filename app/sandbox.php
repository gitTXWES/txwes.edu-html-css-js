<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" 160 max characters " />

    <link rel="canonical" href="https://txwes.edu/" />

    <!-- robot text to follow and index for search engines -->
    <meta name="robots" content="index,follow"><!-- All Search Engines -->
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->

    <title>Texas Wesleyan—Project Name</title>

    <link rel="stylesheet" href="https://use.typekit.net/dyt3onb.css"/>
    <link rel="stylesheet" href="../css/size_indicator.css" />
    <link rel="stylesheet" href="../css/tailwind_preflight.css" />
    <link rel="stylesheet" href="https://catalog.txwes.edu/widget-api/widget-api.min.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous" ></script>

    <style>

      /* sm	640px  */
      @media (min-width: 640px) {  }

      /*md	768px	*/
      @media (min-width: 768px) {  }

      /* lg	1024px	*/
      @media (min-width: 1024px) { }

      /*xl	1280px	*/
      @media (min-width: 1280px) {  }
      /*2xl	1536px	*/

      @media (min-width: 1536px) {  }
    </style>

  </head>
  <body>
    <header> </header>
    <main style="padding: 20px;">
      <div class="size-indicator">
        <span class="xs">xs</span>
        <span class="sm">sm</span>
        <span class="md">md</span>
        <span class="lg">lg</span>
        <span class="xl">xl</span>
        <span class="xl2">2xl</span>
      </div>

   <h2><a href="https://catalog.txwes.edu">See all the programs Texas Wesleyan has to offer</a></h2>

   <div class="acalog" data-acalog-catalog-id="3" data-acalog-program-legacy-id="251">Loading...</div>

    </main>
    <footer></footer>
   <!-- added 6-24-24 for catalog widget  jquery dependent -->
    <script defer src="https://catalog.txwes.edu/widget-api/widget-api.min.js"></script>
       <script>
       $(function() {
           $('.acalog').acalogWidgetize({
               gateway: 'https://catalog.txwes.edu',
               data: 'degree_planner',
           });
       });


       </script>
  </body>
</html>
