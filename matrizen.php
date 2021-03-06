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
            <li class="toc-entry toc-h2"><a href="#tools">Tools</a></li>
            
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
                    <td>$$ A = \begin{bmatrix}7 &5  &0 \\ 2 &2  & 1 \end{bmatrix} \qquad A_{(i),(j)} = A_{23} = 1  $$</td>
                    <td>Allgemein sprechen wir vom Eintrag mit Index ij einer Matrix A und schreiben dafür A<sub>ij</sub></td>
                  </tr>
                  <tr>
                    <td>Typ</td>
                    <td>$$ \text{Typ}(A) = (m,n)  $$</td>
                    <td>Ist A eine Matrix mit <b>m</b> Zeilen und <b>n</b> Spalten, so ist es eine m-kreuz-n Matrix.</td>
                  </tr>
                  <tr>
                    <td>Untermatrizen</td>
                    <td>$$A =  \footnotesize  \begin{bmatrix}1 &3 & \color{grey}2  &1  &1  &0 \\  \color{grey} 2& \color{grey}2  & \color{grey}0  & \color{grey}0  & \color{grey}0  & \color{grey}1 \\3 &2  & \color{grey}1  &3  &2 &1 \\ 1 &0  & \color{grey}0  &1  &1  &0 \end{bmatrix} \; \:\normalsize \hat{A}_{23} = \footnotesize  \begin{bmatrix}1 &3   &1  &1  &0 \\ 3 &2    &3  &2 &1 \\ 1 &0    &1  &1 &0\end{bmatrix}  $$</td>
                    <td>Lässt man in A die zweite Zeile und die dritte Spalte weg, so erhält man eine neue Matrix vom Typ 3x5.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Transposition</td>
                    <td>$$  A=\begin{bmatrix}1 &2 \\ 3 &-1 \end{bmatrix} \: \; A^t=\begin{bmatrix}1 &3 \\ 2 &-1 \end{bmatrix}$$</td>
                    <td>Die Einträge von A<sup>t</sup> sind dieselben wie diejenigen von A, aber sie werden anders angeordnet.</td>
                  </tr>
                  <tr>
                    <td>$$  A =\begin{bmatrix}7 &5  &0 \\ 2 &2  &1 \end{bmatrix} \: \; A^t =\begin{bmatrix}7 &2 \\ 5&2 \\ 0 &1 \end{bmatrix} $$</td>
                    <td>Es gilt:<br>$$ (A^t)_{ij}=A_{ji} \text{ und }(A^t)^t = A  $$</td>
                  </tr>
                  <tr>
                    <td>Nullmatrix</td>
                    <td>$$ 0_{2,3} =\begin{bmatrix}0 &0  &0 \\  0&0  &0 \end{bmatrix} = 0 $$</td>
                    <td>Die Matrix vom Typ (m,n), deren Einträge alle 0 sind, nennen wir die Nullmatrix vom Typ (m,n).</td>
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
                    <td>Obere Dreiecksmatrix</td>
                    <td>$$ \text{Tri}^u = \begin{bmatrix}35 & 65 & 70 & 51 \\ 0 & 97 & 48 & 88 \\ 0 & 0 & 22 & 88 \\ 0 & 0 & 0 & 40 \\\end{bmatrix} $$</td>
                    <td>Falls alle Einträge oberhalb der Diagonale 0 sind, ist es eine obere Dreiecksmatrix.</td>
                  </tr>
                  <tr>
                    <td>Untere Dreiecksmatrix</td>
                    <td>$$ \text{Tri}^l =  \begin{bmatrix}8 & 0 & 0 & 0 \\ 37 & 93 & 0 & 0 \\ 13 & 64 & 41 & 0 \\65 & 10 & 93 & 46 \\\end{bmatrix} $$</td>
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
                    <td>Falls A<sup>t</sup> = -A<br>Alle Diagonaleinträge einer schiefsymmetrischen Matrix sind gleich 0.</td>
                  </tr>
                  <tr>
                    <td>Einheitsmatrizen</td>
                    <td>$$ \mathbb{1}_3 = \text{diag}(1,1,1) =\begin{bmatrix}1 &0  &0 \\ 0 &1  &0 \\ 0 &0  &1 \end{bmatrix} $$</td>
                    <td>Eine Diagonalmatrix vom Typ n deren Diagonaleinträge alle 1 sind, nennen wir die Einheitsmatrix vom Typ n.</td>
                  </tr>
                  <tr>
                    <td>Spur</td>
                    <td>$$ \text{tr}(\begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix}) = 2+7 = 9 $$</td>
                    <td>Die Spur einer quadratischen Matrix ist die Summe der Einträge auf der Diagonalen.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Determinante</td>
                    <td>$$ \text{det}(\begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix})=2\cdot 7 - 5\cdot 2 = -1 $$</td>
                    <td rowspan="2">Die Determinante wird vor allem in der linearen Algebra in vielen Gebieten angewendet, wie beispielsweise zum Lösen von linearen Gleichungssystemen, dem Invertieren von Matrizen oder auch bei der Flächenberechnung.<br>- Sie gibt den <b>Streckungsfaktor</b> an.<br>- Wenn die Determinante <b>negativ</b> ist, wird die Ebene/Fläche zuerst umgedreht und dann gestreckt. <br>- Wenn die Determinante <b>0</b> ist, dann wird die Ebene oder Fläche so auf etwas gestreckt, das kein Volumen, Fläche oder Länge mehr hat.<br>- Für nicht quadratische Matrizen ist die Determinante nicht definiert.</td>
                  </tr>
                  <tr>
                    <td>$$ \scriptsize \text{det}(\begin{bmatrix}4 &6  &1 \\ 10 &8  &5 \\ 0 &0  &1 \end{bmatrix}) = 4\cdot \text{det}\begin{bmatrix}8 &5 \\ 0 &1 \end{bmatrix}-10\cdot \text{det}\begin{bmatrix}6 &1 \\ 0 &1 \end{bmatrix}+0\cdot \text{det}\begin{bmatrix}6 &1 \\ 8 &5 \end{bmatrix}  \\  =4(8-0)-10(6-0)+0(30-8)=32-60+0=-28 $$</td>
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
                <td width=42%>$$ 2 \cdot \begin{bmatrix}2 &1 \\ -1 &3 \end{bmatrix}  = \begin{bmatrix}4 &2\\ -2 &6 \end{bmatrix} $$</td>
                <td>Ist <b>A</b> eine Matrix und <b>r</b> eine Zahl, dann ist das Produkt von <b>r</b> und <b>A</b> komponentenweise definiert.</td>
              </tr>
              <tr>
                <td rowspan="3" width=20%>Matrizenmultiplikation</td>
                <td width=42%>$$ \small \begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix} \cdot \begin{bmatrix}4 &6 \\ 10 &8 \end{bmatrix} = \begin{bmatrix}2\cdot 4+3\cdot 10 &2\cdot 6+3\cdot 8 \\ 5\cdot 4+7\cdot 10 &5\cdot 6+7\cdot 8 \end{bmatrix} = \begin{bmatrix}38 &36 \\ 90 &86 \end{bmatrix} $$</td>
                <td>Geometrisch gesehen, vereinigt man bei der Matrizenmultiplikation zwei lineare transformationen.<img src="bilder/matrizen/multiplikation.jpeg"style="max-height:35%; max-width:100%"></td>
              </tr>
              <tr>
                <td>$$ \scriptsize \begin{bmatrix}1 &2  &3 \\ 5 &1  &2 \\ 1 &0  &2 \end{bmatrix} \cdot\begin{bmatrix}3 &1  &1 \\ 0 &5  &1 \\ 2 &4 &1\end{bmatrix}=\begin{bmatrix}3+0+6 &1+10+12  &1+2+3 \\ 15+0+4 &5+5+8  &5+1+2 \\ 3+0+4 &1+0+2  &1+0+2 \end{bmatrix} $$</td>
                <td><img src="bilder/matrizen/multiplikation_3x3.jpeg"style="max-height:30%; max-width:100%"></td>
              </tr>
              <tr>
                <td>$$ \small \begin{bmatrix}2 &3  &-1  &5 \end{bmatrix} \cdot \begin{bmatrix}7\\ 6\\ 0\\ 2\end{bmatrix} = 2\cdot 7+3\cdot 6+(-1)\cdot 0+5\cdot 2 = 42 $$</td>
                <td>Liefert eine 1x1-Matrix, was einfach eine Zahl ist.</td>
              </tr>
            </table>

              <br><br><h5 id="tools">Tools</h5>
              <table class="table">
                  <tr>
                    <td rowspan="10" width=20%>Wolframalpha / Mathematica</td>
                    <td width=42%><p>Einträge</p><figure class="highlight"><pre><code class="language-html" data-lang="html">{{1, 0}, {0, 2}}[[2, 2]]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Transponieren</p><figure class="highlight"><pre><code class="language-html" data-lang="html">Transpose[{{a, b, c}, {x, y, z}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Nullmatrix</p><figure class="highlight"><pre><code class="language-html" data-lang="html">ConstantArray[0, {2, 2}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Dimension</p><figure class="highlight"><pre><code class="language-html" data-lang="html">Dimensions[{{a, b, c}, {d, e, f}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Diagonalmatrizen</p><figure class="highlight"><pre><code class="language-html" data-lang="html">DiagonalMatrix[{1, 2, 3}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Obere Dreiecksmatrix </p><figure class="highlight"><pre><code class="language-html" data-lang="html">LowerTriangularize[{{8, 4}, {5, 5}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Untere Dreiecksmatrix  </p><figure class="highlight"><pre><code class="language-html" data-lang="html">UpperTriangularize[{{8, 4}, {5, 5}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Einheitsmatrizen</p><figure class="highlight"><pre><code class="language-html" data-lang="html">DiagonalMatrix[{1, 1, 1}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Spur</p><figure class="highlight"><pre><code class="language-html" data-lang="html">Tr[{{1, 2, 3}, {4, 5, 6}, {7, 8, 9}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><p>Determinante</p><figure class="highlight"><pre><code class="language-html" data-lang="html">Det[{{8, 4}, {5, 5}}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Matlab</td>
                    <td></td>
                    <td></td>
                  </tr>
              </table>
          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>