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
            <li class="toc-entry toc-h2"><a href="#operationen">Operationen</a></li>
            
            
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Matrizen</h1>

          <p class="bd-lead">Matrizen sind ein Schlüsselkonzept der linearen Algebra und tauchen in fast allen Gebieten der Mathematik auf. Sie stellen Zusammenhänge, in denen Linearkombinationen eine Rolle spielen, übersichtlich dar und erleichtern damit Rechen- und Gedankenvorgänge.  </p>

          

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
                    <td>Einträge</td>
                    <td>$$ A_{(i),(j)} = A_{23} = 1  $$</td>
                    <td>$$ A = \begin{bmatrix}7 &5  &0 \\ 2 &2  & 1 \end{bmatrix}  $$</td>
                  </tr>
                  <tr>
                    <td>Typ</td>
                    <td>$$ \text{Typ}(A) = (m,n)  $$</td>
                    <td>Ist A eine Matrix mit <b>m</b> Zeilen und <b>n</b> Spalten, so ist es eine m-kreiz-n Matrix.</td>
                  </tr>
                  <tr>
                    <td>Untermatrizen</td>
                    <td>$$ \hat{A}_{23} = \begin{bmatrix}1 &3   &1  &1  &0 \\ 3 &2    &3  &2 &1 \\ 1 &0    &1  &1 &0\end{bmatrix}  $$</td>
                    <td>$$ A = \begin{bmatrix}1 &3 & \color{grey}2  &1  &1  &0 \\  \color{grey} 2& \color{grey}2  & \color{grey}0  & \color{grey}0  & \color{grey}0  & \color{grey}1 \\3 &2  & \color{grey}1  &3  &2 &1 \\ 1 &0  & \color{grey}0  &1  &1  &0 \end{bmatrix} $$</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Transposition</td>
                    <td>$$ A=\begin{bmatrix}1 &2 \\ 3 &-1 \end{bmatrix} $$</td>
                    <td>$$ A^t=\begin{bmatrix}1 &3 \\ 2 &-1 \end{bmatrix}$$</td>
                  </tr>
                  <tr>
                    <td>$$ A =\begin{bmatrix}7 &5  &0 \\ 2 &2  &1 \end{bmatrix}$$</td>
                    <td>$$ A^t =\begin{bmatrix}7 &2 \\ 5&2 \\ 0 &1 \end{bmatrix} $$</td>
                  </tr>
                  <tr>
                    <td>Nullmatrix</td>
                    <td>$$ 0_{2,3}  $$</td>
                    <td>$$ \begin{bmatrix}0 &0  &0 \\  0&0  &0 \end{bmatrix} = 0 $$</td>
                  </tr>
                  <tr>
                    <td>Standardmatrix</td>
                    <td>$$ E_{[12]}=\begin{bmatrix}0 &1  \\  0&0  \end{bmatrix} $$</td>
                    <td>Eine Standardmatrix ist eine Matrix die genau einen Eintrag 1 und sonst lauter Einträge 0 hat.</td>
                  </tr>
                  <tr>
                    <td>Dimension</td>
                    <td>$$ \dim(\mathbb{M}(2,2)) = 4 $$</td>
                    <td>Die Anzahl möglicher Einträge in eine Matrix, geben die Dimension an.</td>
                  </tr>
                  <tr>
                    <td>Diagonalmatrizen</td>
                    <td>$$ \text{diag}(1,2,3) = \begin{bmatrix}1 &0  &0 \\ 0 &2  &0 \\ 0 &0  &3 \end{bmatrix} $$</td>
                    <td>Falls alle Einträge 0 sind abgesehen von der Diagonale.</td>
                  </tr>
                  <tr>
                    <td>Obere Dreiecksmatirx</td>
                    <td>$$ \begin{bmatrix}35 & 65 & 70 & 51 \\ 0 & 97 & 48 & 88 \\ 0 & 0 & 22 & 88 \\ 0 & 0 & 0 & 40 \\\end{bmatrix} $$</td>
                    <td>Falls alle Einträge oberhalb der Diagonale 0 sind, ist es eine obere Dreiecksmatrix.</td>
                  </tr>
                  <tr>
                    <td>Untere Dreiecksmatrix</td>
                    <td>$$ \begin{bmatrix}8 & 0 & 0 & 0 \\ 37 & 93 & 0 & 0 \\ 13 & 64 & 41 & 0 \\65 & 10 & 93 & 46 \\\end{bmatrix} $$</td>
                    <td>Falls alle Einträge unterhalb der Diagonale 0 sind, ist es eine untere Dreiecksmatrix.</td>
                  </tr>
                  <tr>
                    <td>Symmetrisch</td>
                    <td>$$ \begin{bmatrix}1 &2  &3 \\  2& 5 &6 \\ 3 &6  &8 \end{bmatrix} $$</td>
                    <td>Falls A<sup>t</sup> = A</td>
                  </tr>
                  <tr>
                    <td>Schiefsymmetrisch</td>
                    <td>$$ \begin{bmatrix}0 &2  &3 \\  -2& 0 &6 \\ -3 &-6  &0 \end{bmatrix} $$</td>
                    <td>Falls A<sup>t</sup> = -A<br>Alle Diagonaleinträge einer schiefsymmetrischen Matrix sind gliech 0.</td>
                  </tr>
                </tbody>
              </table>

          <br><br><h5 id="operationen">Operationen</h5>
            <table>
              <tr>
                <td width=20%>Addition</td>
                <td width=42%>$$ \begin{bmatrix}2 &1 \\ -1 &3 \end{bmatrix} + \begin{bmatrix}0 &5 \\ -2 &-2\end{bmatrix} = \begin{bmatrix}2 &6 \\ -3 &1 \end{bmatrix}  $$</td>
                <td>Sind <b>A</b> und <b>B</b> zwei Matrizen vom selben Typ, dann nehmen wir die Summe komponentenweise.</td>
              </tr>
              <tr>
                <td width=20%>Skalarenmultiplikation</td>
                <td width=42%>$$ 2 \begin{bmatrix}2 &1 \\ -1 &3 \end{bmatrix}  = \begin{bmatrix}4 &2\\ -2 &6 \end{bmatrix} $$</td>
                <td>Ist <b>A</b> eine Matrix und <b>r</b> eine Zahl, dann ist das Produkt von <b>r</b> und <b>A</b> komponentenweise definiert.</td>
              </tr>
            </table>
          


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>