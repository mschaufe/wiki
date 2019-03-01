<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
    <style type="text/css">
      .anchor{
        display: block;
        height: 115px; /*same height as header*/
        margin-top: -115px; /*same height as header*/
        visibility: hidden;
      }
    </style>
</head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

  <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <?php include ('includes/head.php'); ?>
  </header>

    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <?php include ('includes/search.php'); ?>
          <?php include ('includes/nav_mathe.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#vektorfelder">Vektorfelder</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Vektoranalysis</h1>

          <p class="bd-lead">Vektoranalysis ist ein Teilgebiet der Mathematik, das sich hauptsächlich mit Vektorfeldern in zwei oder mehr Dimensionen beschäftigt und dadurch die bereits in der Schulmathematik behandelten Gebiete der Differential- und der Integralrechnung wesentlich verallgemeinert.</p>


          <br><br><h5 id="vektorfelder">Vektorfelder</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th scope="col">Grafik</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Funktionen in mehreren Variablen</td>
                    <td>$$ f: \mathbb{R}^2 \longrightarrow \mathbb{R}, \; (x_1; \; ... \; ; x_n) \mapsto f(x_1; \; ... \; ; x_n)  $$</td>
                    <td>Sowohl die Variablen als auch der Funktionswert können Masseinheiten tragen.</td>
                  </tr>
                  <tr>
                    <td>Level-Mengen</td>
                    <td>$$ f^{-1}(\left \{ L \right \}) :=\left \{ p\in A\mid f(p) = L \right \} $$</td>
                    <td>Wenn man alle Punkte mit einem bestimmten wert sucht. Braucht man zum Beispiel bei für Höhenlinien auf der Karte.</td>
                  </tr>
                  <tr>
                    <td>Vektorfelder</td>
                    <td>$$ \vec{v}: \mathbb{R}^n \rightarrow \mathbb{R}^n \\(x_1; \; ... \; ;x_n )x \mapsto \vec{v} (x_1; \; ... \; ;x_n ) = \begin{bmatrix}v_1 (x_1; \; ... \; ;x_n )\\ \text{ } \\ \vdots \\ v_n (x_1; \; ... \; ;x_n )\end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/2d.png"style="max-height:100%; max-width:100%">Vektor <b>v(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> stellt einen Vektor am Punkt <b>(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> dar.</td>
                  </tr>
                  <tr>
                    <td>Homogenes Vektorfeld</td>
                    <td>$$ \vec{v} (x_1; \; ... \; ;x_n ) \equiv \small \text{konstant.} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/homogen.jpeg"style="max-height:100%; max-width:100%"><br>An jedem Punkt der gleiche Vektor. </td>
                  </tr>
                  <tr>
                    <td>Einheitsvektorfeld / <br>Richtungsvektorfeld</td>
                    <td>$$ \left | \vec{v} (x_1; \; ... \; ;x_n ) \right | = 1 \\ \text{ } \\ \hat{v} (x_1; \; ... \; ;x_n ) =  \vec{v} (x_1; \; ... \; ;x_n ) $$</td>
                    <td>Mit der Länge 1 ohne Masseinheit. </td>
                  </tr>
                  <tr>
                    <td>Quellenfeld</td>
                    <td>$$ \vec{v} (x;y) = \begin{bmatrix}x\\y \end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/quellenfeld.jpeg"style="max-height:80%; max-width:75%"></td>
                  </tr>
                  <tr>
                    <td>Wirbelfeld</td>
                    <td>$$ \vec{v} (-y;x) = \begin{bmatrix}-y\\x \end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/wirbelfeld.jpeg"style="max-height:80%; max-width:80%"></td>
                  </tr>

                </tbody>
              </table>


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>