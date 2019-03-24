<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
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
            <li class="toc-entry toc-h2"><a href="#allgemien">Allgemein</a></li>
            <li class="toc-entry toc-h2"><a href="#lineare_abbildunge_und_matrizen">Lineare Abbildungen und Matrizen</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Lineare Abbildungen</h1>

          <p class="bd-lead">Eine lineare Abbildung ist in der linearen Algebra ein wichtiger Typ von Abbildung zwischen zwei Vektorräumen über demselben Körper.</p>

          <br><br><h5 id="allgemien">Allgemein</h5>
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
                    <td>Identität</td>
                    <td>$$ E\rightarrow E, \;x \mapsto x^2 x  $$</td>
                    <td>Die Abbildung, die jedes Element von E auf sich abbildet, heisst die Identität von E oder identische Abbildung von E und wird mit Id<sub>E</sub> bezeichnet.</td>
                  </tr>
                  <tr>
                    <td>Komposition</td>
                    <td>$$ f:E\rightarrow F \; \small \text{ und } \normalsize \; g:F\rightarrow  G \\ \text{ } \\ g \circ f: E\rightarrow G,x \mapsto g (f(x)) $$</td>
                    <td>Wenn der Wertevorrat von f gleich dem Definitionsbereich von g ist, dann kann eine neue Abbildung definiert werden. Es wird gelesen als g nach f.</td>
                  </tr>
                  <tr>
                    <td>Invertierbar</td>
                    <td>$$ f^{-1} $$</td>
                    <td>Eine Abbildung ist genau dann invertierbar, wenn sie <a href="http://localhost:8888/funktionen.php#sur">bijektiv</a> ist.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Linear</td>
                    <td>$$ f(x+y) = f(x)+ f(y) \small \; \text{ für alle } \;\normalsize x,y \in V $$</td>
                    <td rowspan="2">Diese zwei Bedingungen müssen erfüllt sein, damit die Abbildung linear ist.</td>
                  </tr>
                  <tr>
                    <td>$$ f(rx) = rf(x) \small \; \text{ für alle } \;\normalsize x \in V \small \; \text{ und alle } \;\normalsize r \in \mathbb{R}$$</td>
                  </tr>
                  <tr>
                    <td>Homomorphismen</td>
                    <td>$$ \text{Hom}(V,W) $$</td>
                    <td>Seien V und W Vektorräume, dann wird die Menge aller linearen Abbildungen von V nach W mit Hom(V,W) bezeichnet.</td>
                  </tr>
                  <tr>
                    <td>Isomorphismen</td>
                    <td>$$  $$</td>
                    <td>Isomorphismen sind genau die linearen Abbildungen, welche lineare Inverse besitzen.</td>
                  </tr>
                  <tr>
                    <td>Kern</td>
                    <td>$$ \text{Ker}(f) := f^{-1}(0) = \left \{  x\in V \mid f(x)=0 \right \} $$</td>
                    <td>Die Menge aller Elemente von V, welche nach 0 abgebildet werden. heisst der Kern von f.<br>Also alle Werte, die nach erstellen der Treppenform nicht 0 sind.</td>
                  </tr>
                  <tr>
                    <td>Bild</td>
                    <td>$$ \text{Im}(f) $$</td>
                    <td>Die Menge aller Werte von f heisst das Bild von f.</td>
                  </tr>
                  <tr>
                    <td>Defekt</td>
                    <td>$$ \text{def}(f) := \text{dim}(\text{Ker}(f))$$</td>
                    <td>Wenn der Untervektorraum endlichdimensional ist, nennt man seine Dimension den Defekt von f</td>
                  </tr>
                  <tr>
                    <td>Rang</td>
                    <td>$$ \text{rg}(f) := \text{dim}(\text{Im}(f)) $$</td>
                    <td>Durch elementare Zeilenumformungen erhält man aus einer Matrize eine in Treppenform. Die anzahl von 0 verschiedener Zeilen nennt man den Rang.</td>
                  </tr>
            </tbody>
          </table>

          <br><br><h5 id="allgemien">Lineare Abbildungen und Matrizen</h5>
          <table>
            <tr>
              <td width=20%>Schreibweise</td>
              <td width=42%>$$ M_{f}^{ED} := (r_{ij})_{1\leq i\leq n,1\leq j\leq m } \in \mathbb{M}(n,m) $$</td>
              <td>Die Matrix von f bezüglich der Basen D und E.</td>
            </tr>
            <tr>
              <td>Basiswechselmatirzen</td>
              <td>$$ \small A = \left \{ (1,0),(0,1) \right \}; \; C = \left \{ (1,0),(1,1) \right \} \\ \text{ } \\
                    u = (6,2); \; \: v=(-4,8) \\ \text{ } \\
                    (1,0) = x\cdot (1,0)+y \cdot (1,1) \\ (0,1) = x\cdot (1,0)+y \cdot (1,1)\\ \text{ } \\
                  \underline{M^{CA}} = \begin{bmatrix}1 &-1 \\ 0&1 \end{bmatrix} \\ \text{ } \\ 
                  u^C = \begin{bmatrix}1 &-1 \\ 0&1 \end{bmatrix} \cdot \begin{bmatrix}6\\2 \end{bmatrix} = \begin{bmatrix}4\\2 \end{bmatrix}; \\ \text{ } \\ 
                  v^C = \begin{bmatrix}1 &-1 \\ 0&1 \end{bmatrix} \cdot \begin{bmatrix}-4\\8 \end{bmatrix} = \begin{bmatrix}-12\\8 \end{bmatrix}; $$</td>
              <td>Der Basiswechsel kann durch eine Matrix beschrieben werden, die Basiswechselmatrix genannt wird. Mit dieser lassen sich auch die Koordinaten bezüglich der neuen Basis ausrechnen. Stellt man die Basisvektoren der alten Basis <b>(A)</b> als Linearkombinationen der Vektoren der neuen Basis <b>(C)</b> dar, so bilden die Koeffizienten dieser Linearkombinationen die Einträge der Basiswechselmatrix <b>(M<sup>CA</sup>)</b>.</td>
            </tr>
            <tr>
              <td width=20%>Invertieren</td>
              <td width=42%>$$ M^{DF} = (M^{FD})^{-1} = \frac{1}{\text{det}(M^{FD})}\cdot \tilde{M} $$</td>
              <td><p>
                M raute ist die zu M eine komplementäre Matrix.<br><br>
                <b>CASIO</b> MatA + <kbd><kbd>x<sup>-1</sup></kbd>
              </p></td>
            </tr>
            <tr>
              <td>Multiplikation</td>
              <td>$$ M_{f}^{DE} = M^{DF}\cdot M_{f}^{FE} $$</td>
              <td>Vereinfachung</td>
            </tr>
          </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>