    <x-header /> <!-- Pour injecter le header -->
<main class="container my-1">
@vite('resources/js/app.js')
<x-breadcrumb :items="$breadcrumbs ?? []" />
     
 
    <div class="d-flex">
    <img src="/images/cookie.png" width="auto" height="400px" alt="Responsive image"/>
    <div>
        <h1 class = "p-1 m-20" style = "background-color: #E5AB69">Super dupper cookie</h1>
        
        <br>
        <h2>Dark chocolate</h2>
        <br>

            <h3 class = "p-1 m-20" style = "background-color: #E5AB69" width = "50">
                A wonderfull baked cookie full of melty chocolate, Made with the best 
                selection of floor and chocolate.  <br>
                This crunchy cookie with light taste of vanilla and darker chocolate than Trump policy 
                will make you forget about those of your grand-mother.<br><br><br>
                   Enjoy, folks !
            </h3>
    </div>


</main>

    <x-footer /> <!-- Pour injecter le footer -->



