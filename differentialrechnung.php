<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";?>
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
            <li class="toc-entry toc-h2"><a href="#ableitung">Ableitung</a></li>
            <li class="toc-entry toc-h2"><a href="#ableitungsregeln">Ableitungsregeln</a></li>
            <li class="toc-entry toc-h2"><a href="#spezielle_funktionene">Spezielle Funktionen</a></li>
            <li class="toc-entry toc-h2"><a href="#tools">Tools</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Differentialrechnung</h1>

          <p class="bd-lead">Die Differential- bzw. Differenzialrechnung ist ein wesentlicher Bestandteil der Analysis und damit ein Gebiet der Mathematik. Sie ist eng verwandt mit der Integralrechnung, mit der sie gemeinsam unter der Bezeichnung Infinitesimalrechnung zusammengefasst wird.</p>

          <br><br><h5 id="ableitung">Ableitung</h5>
          
          <table class="table">
                <thead>
                  <tr id="add_und_sub">
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th scope="col">Grafik / Text</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td rowspan="2" >Differenzenquotient / mittlere Änderungsrate</td>
                    <td>$${\color{#0BACE8}\frac{\Delta y}{\Delta x} } = \frac{\Delta f}{\Delta x} \coloneqq \frac{f(x_{0}+\Delta x)-f(x_{0})}{\Delta x}$$</td>
                    <td rowspan="2"><img src="bilder/differentialrechnung/ableitung/differenzenquotient.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td><p>Der Differenzenquotient gibt die Steigung der <t style="color:#18A45A";>Sekante</t> PQ an.</p></td>
                  </tr>
            </tbody>
            </table>

            <br><br><h5 id="ableitungsregel">Ableitungsregeln</h5>
            <table class="table">
                <tbody>
                  <tr>
                    <th width=20%>Regel</th>
                    <th width=42%>Funktion</th>
                    <th>Ableitung</th>
                  </tr>
                  <tr>
                    <td>Monom-Ableitung</td>
                    <td>$$ f(x) = x^{s} $$ </td>
                    <td>$$f'(x) = s \cdot x^{s-1} $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Summenregel</td>
                    <td width=42%>$$ f(x) = u(x) \pm v(x) $$</td>
                    <td>$$ f'(x) = u'(x) \pm u'(x) $$ </td>
                  </tr>
                  <tr>
                    <td width=20%>Faktorregel</td>
                    <td width=42%>$$ f(x) = c \cdot u(x) $$</td>
                    <td>$$ f'(x) = c \cdot u'(x) $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Produktregel</td>
                    <td width=42%>$$ f(x) = u(x) \cdot v(x) $$</td>
                    <td>$$ f'(x) = u'(x) \cdot u(x) + u(x) \cdot v'(x) $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Quotientenregel</td>
                    <td width=42%>$$ f(x) = \frac{u(x)}{v(x)} $$</td>
                    <td>$$ f'(x) = \frac{u'(x)\cdot v(x)-u(x)\cdot v'(x)}{v^2(x)} $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Kettenregel</td>
                    <td width=42%>$$ f(x) = u(v(x)) $$</td>
                    <td>$$ f'(x) = u'(v(x)) \cdot v'(x) $$</td>
                  </tr>
                  
            </tbody>
            </table>

            <br><br><h5 id="spezielle_funktionene">Spezielle Funktionen</h5>

            <table class="table">
              <tr>
                <td rowspan="2" width=20%>Sinus</td>
                <td width=42%>$$ \sin'(x) = \cos(x) $$</td>
                <td>$$ \arcsin'(x) = \frac{1}{\sqrt{1-x^2}} $$</td>
              </tr>
              <tr>
                <td>$$ \sinh'(x) = \cosh(x) $$</td>
                <td>$$ \text{arsinh}'(x) = \frac{1}{\sqrt{x^2+1}} $$</td>
              </tr>
              <tr>
                <td rowspan="2">Cosinus</td>
                <td>$$ \cos'(x) = -\sin(x) $$</td>
                <td>$$ \arccos'(x) = \frac{1}{\sqrt{1-x^2}} $$</td>
              </tr>
              <tr>
                <td>$$ \cosh'(x) = -\sinh(x) $$</td>
                <td>$$ \text{arcosh}'(x) = \frac{1}{\sqrt{x^2-1}} $$</td>
              </tr>
              <tr>
                <td rowspan="2">Tangens</td>
                <td>$$ \tan'(x) = \frac{1}{\cos^{2}(x)} = 1+\tan^2(x) $$</td>
                <td>$$ \arctan'(x) = \frac{1}{1+x^2} $$</td>
              </tr>
              <tr>
                <td>$$ \tanh'(x) = \frac{1}{\cosh^2(x)} = 1-\tanh^2(x) $$</td>
                <td>$$ \text{artanh}'(x) = \frac{1}{1-x'2} $$</td>
              </tr>
            </table>

            <table class="table">
              <tr>
                <td width=20%>Konstante c</td>
                <td width=42%>$$c' = 0$$</td>
                <td>$$ (c \cdot x)' = c $$</td>
              </tr>
              <tr>
                <td>Exponentialfunktion</td>
                <td>$$ (e^x)' = e^x $$</td>
                <td>$$ (a^x)' = \ln(a) \cdot a^x $$</td>
              </tr>
              <tr>
                <td>Logarithmus</td>
                <td>$$ \ln(\left | x \right |)'= \frac{1}{x} $$</td>
                <td>$$ \log_a(\left | x \right |)' = \log_a(e)\cdot \frac{1}{x} = \frac{1}{ \ln(a)\cdot x} $$</td>
              </tr>
              <tr>
                <td>Wurzel</td>
                <td>$$ (\sqrt{x})'  = \frac{1}{2\sqrt{x}} $$</td>
                <td>$$ \left(\frac{1}{\sqrt{x}}\right)'  = -\frac{1}{2 x^{3/2}} $$</td>
              </tr>
              <tr>
                <td>Monom-Regel</td>
                <td>$$ (x^s)' = x\cdot x^{s-1} $$</td>
                <td>$$ \left(\frac{1}{x}\right)' = -\frac{1}{x^2} $$</td>
              </tr>
            </table>

            <br><br><h5 id="tools">Tools</h5>
              <table class="table">
                  <tr>
                    <td width=20%>Wolframalpha / Mathematica</td>
                    <td width=42%><p>Ableitung</p><figure class="highlight"><pre><code class="language-html" data-lang="html">D[2 x^2, x]</code></pre></figure></td>
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